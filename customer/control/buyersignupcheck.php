<?php

include "../../Model/model.php";
?>
<?php

if(isset($_POST["buyersignup"]))
{
    
    if(!empty($_POST["buyername"]) || isset($_post["buyergender"]) || !empty($_POST["buyeremail"]) || 
    preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["buyeremail"]) 
    || !empty($_POST["buyeraddress"]) || !strlen($_POST["buyerpass"])<6)
    {
        $name=$_POST["buyername"];
        $gender=$_POST["buyergender"];
        $email=$_POST["buyeremail"];
        $address=$_POST["buyeraddress"];
        $pass=$_POST["buyerpass"];

        $mydb = new DB();
        $conobj=$mydb->opencon();
        $mydb->InsertData($name, $gender,$email, $address, $pass,"buyer", $conobj);
        $mydb->closecon($conobj);
    }
}

?>