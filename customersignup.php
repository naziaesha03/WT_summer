<?php
include("../control/customersignup.php");

?>

<html>
<head>
<title>REGISTRATION</title>
</head>
<body>

<h1> Customer Registration Form </h1>

<form  method="POST" enctype="multipart/form-data">

<?php echo $dataError; ?>

<table align = "center">

    <tr>
        <td>First Name: </td>
        <td><input type="text" name="customer_fname" ></td>
        <td> <?php echo $customerFNameError; ?> </td>

    </tr>
    <tr>
        <td>Last Name: </td>
        <td><input type="text" name="customer_lname"></td>
        <td> <?php echo $customerLNameError; ?> </td>
    </tr> 
    <tr>
        <td>Date of Birth: </td>
        <td><input type="date" name="customer_birthdate"></td>
        <td> <?php echo $customerBirthDateError; ?> </td>
    </tr> 
    <tr>
        <td>Age: </td>
        <td><input type="text" name="customer_age"></td>
        <td> <?php echo $customerAgeError; ?> </td>
    </tr>
    <tr>
        <td>Address: </td>
        <td><input type="text" name="customer_address"></td>
        <td> <?php echo $customerAddressError; ?> </td>
    </tr>
    <tr>
        <td>Email: </td>
        <td><input type="email" name="customer_email"></td>
        <td> <?php echo $customerEmailError; ?> </td>
    </tr> 
    <tr>
        <td>Password: </td>
        <td><input type="password" name="customer_password"></td>
        <td> <?php echo $customerPasswordError; ?> </td>
    </tr> 
    <tr>
        <td>Contact no: </td>
        <td><input  type="mobile" id="contact"  pattern="[0]{1}[1]{1}[0-9]{9}"name="customer_contactNo"></td>
        <td> <?php echo $customerContactNoError; ?> </td>
    </tr>
    <tr>
        <td>Upload Your NID :</td>
        <td><input type="file" name="customer_nid"></td>
        <td> <?php echo $customer_NIDError; ?> </td>
    </tr> 
    <tr>
        <td>Upload Your Photo:</td>
        <td><input type="file" name="customer_image"></td>
        <td> <?php echo $customer_ImageError; ?> </td>
        
    </tr> 
    <tr>
        <td>
            <input type="submit" value="Submit" name ="customer_info_submit">
            <input type="reset" value="Reset" name= "customer_info_reset">
        </td>
    </tr>


</table>
<br>
Go to <a href= "customerlogin.php"> Login <br> </a>
<br>
<a href= "home.php"> Back to Home </a>
</form>

</body>
</html> 