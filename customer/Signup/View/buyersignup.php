<?php 
include "../../Control/buyersignupcheck.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customer Account</title>
        
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
                    <form action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                        <h3>Sign in</h3>
                        <span>Fullname</span>
                        <input type="text" name="buyername" class="box" placeholder="enter your fullname" id="buyername">
                        <p style="color:red" id="errname"></p>
                        <table><tr><td><span>Gender</span></td></tr>
                        <tr><td><input type="radio" name="buyergender"  value="Male" id="buyergender1"><span>Male</span></td>
                        <td><input type="radio" name="buyergender"  value="Female" id="buyergender2"><span>Female</span></td></tr></table>
                        <p style="color:red" id="errgender"></p>
                        <span>E-mail</span>
                        <input type="email" name="buyeremail" class="box" placeholder="enter your email" id="buyeremail">
                        <p style="color:red" id="erremail"></p>
                        
                        <span>Address</span>
                        <input type="text" name="buyeraddress" class="box" placeholder="enter your address" id="buyeraddress">
                        <p style="color:red" id="erradd"></p>


                        <span>Password</span>
                        <input type="password" name="buyerpass" class="box" placeholder="enter your password" id="buyerpass">
                        <p style="color:red" id="errpass"></p>
                        <div class="checkbox">
                            <input type="checkbox" name="" id="remember-me">
                            <label for="remember-me"> Agreed to all terms and conditions</label>
                        </div>
                        <input type="submit" name = "buyersignup"value="sign up" class="btn">
                        <p>want to go back ? <a href="../../Login/View/buyerlogin.php">click here</a></p>
                    </form>
                    <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <div class="credit"> created by <span>syeda nazia Tasnim</span> | © 2021-2022</div>
                </div>
            </section>
            </div>
        </div>
       </hr><hr class="line2"></hr>
       
      <script src="../JS/script.js"></script>
    </body>
</html>