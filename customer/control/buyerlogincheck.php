<?php
include('../../Model/model.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['buyersignin'])) {
if (empty($_POST['buyeremail']) || empty($_POST['buyerpass'])) {
$error = "Username or Password is invalid";
}
else
{
$buyeremail=$_POST['buyeremail'];
$buyerpass=$_POST['buyerpass'];

$connection = new db();
$conobj=$connection->opencon();

$userQuery=$connection->CheckUser($buyeremail,$buyerpass,"buyer",$conobj);

if ($userQuery->num_rows > 0) {
$_SESSION["buyeremail"] = $buyeremail;
$_SESSION["buyerpass"] = $buyerpass;

   }
 else {
$error = "Email or Password is invalid";
}
$connection->closecon($conobj);

}
}


?>
