<?php 
include "../../Control/buyerlogincheck.php";
if(isset($_SESSION['buyeremail'])){
    header("location: ../../BuyerHome/View/buyerhome.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Customer Account</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        
    </head>
    <body>
    <header class="header">

<div class="header-1">
    <a href="../../../index.php" class="logo"> <i><img src="../../../Logo/logo.png"></i> </a>
    <div class="icons">
        <a href="../../../index.php" class="fas fa-home"></a>
    </div>
</div>
</header>
<hr class="line">
        <div class="split-screen">
            <div class="left">
                <section class ="copy">
                    <h1> CUSTOMER SERVICE</h1>
                    <p>Please sign in as a customer</p>
                </section>
            </div>
            <div class="right">
            <section class ="copy">
                <div class="Buyerlogin-form-container">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h3>Sign in</h3>
                        <span>E-mail</span>
                        <input type="email" name="buyeremail" class="box" placeholder="enter your email" id="">
                        <span>Password</span>
                        <input type="password" name="buyerpass" class="box" placeholder="enter your password" id="">
                        <div class="checkbox">
                            <input type="checkbox" name="" id="remember-me">
                            <label for="remember-me"> remember me</label>
                        </div>
                        <p style="color:red"><?php echo $error; ?></p>
                        <input type="submit" name = "buyersignin" value="sign in" class="btn">
                        <p>forget password ? <a href="#">click here</a></p>
                        <p>don't have an account ? <a href="../../Signup/View/buyersignup.php">create one</a></p>
                    </form>
                    <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <div class="credit"> created by <span>syeda nazia tasnim</span> | © 2021-2022 </div>
                </div>
            </section>
            </div>
        </div>
</hr><hr class="line2"></hr>
    </body>
</html>