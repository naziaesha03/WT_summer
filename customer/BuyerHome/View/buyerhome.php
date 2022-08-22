<?php
session_start(); 
include('../../Model/model.php');
if(empty($_SESSION["buyeremail"]))
{
header("Location: ../../Login/View/buyerlogin.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customer</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../Style/style.css">
    </head>
    <body>
    <header class="header">
        <div class="header-1">
        <a href="#" class="logo"> <i><img src="../../../Logo/logo.png"></i> </a>
        </div>
    </header>
    <hr class="line"></hr>
    <div class="sidebar">
        <a class="active" href="#profile">Profile</a>
        <a href="#news">Update Profile</a>
        <a href="#news">Shop</a>
        <a href="#contact">Transaction</a>
        <a href="#contact">eBanking</a>
        <a class="logout" href="../../Logout/logout.php">logout</a>
    </div>
    <div class="panel">
        <h2>Profile Dashboard</h2>
        
        <?php

        $name=$email=$gender=$address="";
        $connection = new db();
        $conobj=$connection->opencon();
        $userQuery=$connection->CheckUser($_SESSION["buyeremail"],$_SESSION["buyerpass"],"buyer",$conobj);
        
        if ($userQuery->num_rows > 0) 
        {
            while($row = $userQuery->fetch_assoc()) 
            {
                $name=$row["fname"];
                $email=$row["mail"];
                $gender=$row["gender"];
                $address=$row["adres"];
            }
        }else 
        {
            echo "0 results";
        }
        
        ?>
        <h5> Hi <p class ="font"><?php echo $name." !";?></p></h5><br><br><br>
        <h7 class ="font1">E-mail: <?php echo $email;?></h7><br>
        <h7 class ="font1">Gender: <?php echo $gender;?></h7><br>
        <h7 class ="font1">Location: <?php echo $address;?></h7><br>
    </div>
    </body>
</html>


