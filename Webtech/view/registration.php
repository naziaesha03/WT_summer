?php
session_start();
?>

<html>
<body>


<font size="20" color="forestgreen"><b>Sign Up Successful</b></font>
<br>
<br>
<br>
<br>
<table>

    <tr>
        <td>Image: </td>
        <td><img src="<?php echo $_SESSION['customer_image']; ?>" height="150" width="150">  </td>

    </tr>
    <tr>
        <td>Name: </td>
        <td> <?php echo $_SESSION['customerFName'] . " " . $_SESSION['customerLName'] . "<br>"; ?> </td>

    </tr>
    <tr>
        <td>Date of Birth: </td>
        <td> <?php echo $_SESSION['customerbirthdate'] . "<br>"; ?> </td>
    </tr> 
    <tr>
        <td>Age: </td>
        <td> <?php echo $_SESSION['customerAge'] . "<br>"; ?> </td>
    </tr>
    <tr>
        <td>Address: </td>
        <td> <?php echo $_SESSION['customerAddress'] . "<br>"; ?> </td>
    </tr>

    <tr>
        <td>Email: </td>
        <td> <?php echo $_SESSION['adminEmail'] . "<br>"; ?> </td>
    </tr> 
    <tr>
        <td>Your NID :</td>
        <td> <?php echo $_SESSION['customer_NID'] . "<br>"; ?> </td>
    </tr> 
    <tr>
        <td>Your Photo:</td>
        <td> <?php echo $_SESSION ['customer_ImageError'] . "<br>"; ?> </td>
        
    </tr> 
    <tr>
        <td>contact No: </td>
        <td> <?php echo $_SESSION['customercontactNo'] . "<br>"; ?> </td>
    </tr>


</table>

<br>

<big>
    Go to <a href= "customerlogin.php"> Login <br> </a>
    <br>
    <a href= "home.php"> Back to Home </a>
</big>

</body>
<html>