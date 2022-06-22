<?php


$customerFName = "";
$customerLName = "";
$customerBirthDate = "";
$customerAge = "";
$customerAddress ="";
$adminEmail = "";
$adminPassword = "";
$customer_NID= "";
$customer_Image = "";
$customerContactNo = "";

$customerFNameError = "";
$customerLNameError = "";
$customerBirthDateError = "";
$customerAgeError = "";
$customerAddressError = "";
$customerEmailError = "";
$customerPasswordError = "";
$customer_NIDError = "";
$customer_ImageError = "";
$customerContactNoError= "";
$dataError = "";

$count = 0;

if (isset($_POST["customer_signup_submit"])) {

    $customerFName = $_POST["customer_fname"];
    $customerLName = $_POST["customer_lname"];
    $customerBirthDate = $_POST["customer_birthdate"];
    $customerAge = $_POST["customer_age"];
    $customerAddress = $_POST["customer_adress"];
    $customerEmail = $_POST["customer_email"];
    $customerPassword = $_POST["customer_password"];
    $customer_NID = $_FILES["customer_nid"]["name"];
    $customer_Image = $_FILES["customer_image"]["name"];
    $customerContactNo = $_POST["customer_contactno"];


    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $customerPassword);
    $lowercase = preg_match('@[a-z]@', $customerPassword);
    $number = preg_match('@[0-9]@', $customerPassword);
    $specialChars = preg_match('@[^\w]@', $customerPassword);

    if (is_numeric($customerFName) || is_numeric($customerLName)) {
        $customerFNameError = "First name and Last Name should not contain numeric value";
    }
    elseif (empty($customerFName)) {
        $customerFNameError = "First name can't be Empty";
    }
    else {
        $count++;
    }
    if (empty($customerBirthDate)) {
        $customerBirthDateError= " Date of Birth can't be Empty ";
    }
    else

        $count++;

    if (empty($customerAddress)) {
        $customerAddressError = "Address can't be Empty";
    }
    else

        $count++;
    }

    if (empty($customerEmail)) {
        $customerEmailError = "Email can't be Empty";
    }
    else {

        $count++;

    }

    if (empty($customerPassword)) {
        $customerPasswordError = "Password can't be Empty <br>";
    }
    else {
        $count++;
    }

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($customerPassword) <6) {
        $adminPasswordError = 'Password should be at least 6 characters in length and at least one upper case letter, one number, and one special character.';
    }
    else {
        $count++;
    }


    if (!empty($customer_NID)) {
        if (move_uploaded_file($_FILES["customer_nid"]["tmp_name"], "../files/nid/" . $customerFName . "_" . date("Y-m-d") . ".pdf")) {
            $count++;
            $customer_NIDError = "You have selected " . $_FILES["customer_nid"]["name"];
            $customer_NID = 'files/nid/' . $_FILES["customer_nid"]["name"];
        }

    }
    else {
        $customer_NIDError = "Please choose a PDF Or Word file.";
    }

    if (!empty($customer_Image)) {
        if (move_uploaded_file($_FILES["customer_image"]["tmp_name"], "../files/photos/" . $customerFName . "_" . date("Y-m-d") . ".jpg")) {
            $count++;
            $customer_ImageError = "You have selected " . $_FILES["customer_photofile"]["name"];
            $customer_Image= 'files/photo/' . $_FILES["customer_image"]["name"];

        }

    }
    else {
        $customer_ImageError = "Please choose a under 2mb JPG file.";
    }
    if (empty(customer_contactno)) {
        $customerContactNoError = "Mobile No can't be Empty ";
    }
    else {

        $count++;
    }



    if ($count == 10) {
        $formData = array(
            'First Name        :' => $customerFName,
            'Last  Name        :' => $customerLName,
            'Date of Birth     :' => $customerBirthDate,
            'Age               :' => $customerAge,
            'customerAddress   :' => $customerAddress,
            'Email             :' => $customerEmail,
            'Password          :' => $customerPassword,
            'Contact No        :' => $customerContactNo,
            'Uploaded NID      :' => $customer_NID,
            'Uploaded Image    :' => $customer_Image


        );
        $existingData = file_get_contents('../file/data.json');
        $tempJsonData = json_decode($existingData);
        $tempJsonData[] = $formData;
        $jsonData = json_encode($tempJsonData, JSON_PRETTY_PRINT);

        if (file_put_contents("../file/data.json", $jsonData)) {
            $dataError = "Data successfully saved <br>";
            $signUpComplete = true;
        }
        else {
            $dataError = "No data saved";
        }



        if ($signUpComplete == true) {

            session_start();
            $_SESSION['customerFName'] = $customerFName;
            $_SESSION['customerLName'] = $customerLName;
            $_SESSION['customerBirthDate'] = $customerBirthDate;
            $_SESSION['customerAge'] = $customerAge;
            $_SESSION['customerAddress'] = $customerAddress;
            $_SESSION['customerEmail'] = $customerEmail;
            $_SESSION['customerpassword'] = $customerPassword;
            $_SESSION['customerContactNo'] = $customerContactNo;
            $_SESSION['customer_nid'] = $customer_NID;
            $_SESSION['customer_Image'] = $customer_Image;

            header("Location:../view/registration.php");


        }