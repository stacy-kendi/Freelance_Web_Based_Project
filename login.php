<?php
include "includes/header.php";
include "includes/server.php";
?>



<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">

<!--Homepage Navigation Bar. Upon login in re-direct to the next page with the included freelancer/sme navigation bar-->

<div id="pagecontainer">


    <div id="topnavigationcontainer">
        <nav class="navbar navbar-static-top" role="navigation">
 

            <div class="container">
 
 
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tujiajirinavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                    </button>
 
                    <a id="navbrand" href="index2.php" class="navbar-brand" alt="sitename"> Tujiajiri </a>
                </div>
 
 
                <div class="collapse navbar-collapse" id="tujiajirinavbar">

                    <!--Search Icon Navigation-->

                    <form class="navbar-form navbar-left" action="search.php" method="POST" id="searchbar">
                        
                        <div class="input-group" style="width: 115px">
                            
                            <input name="search" type="text" class="form-control"  placeholder="Search" name="search"> 
                            
                            <span class="input-group-btn" style="height: 34px; display: flex">
                                <button name="submit" class="btn btn-success" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        

                        </div>
                    </form>

                      
                    <!--Main Navigation Links--> 
  
                    <ul class="nav navbar-nav navbar-center"> 
                        <li>  <a href="projectDetailsYouth.php"> Browse Projects </a>  </li>
                        <li>  <a href="encryption/encryptioninsertproject.php"> Post Project </a>  </li>
                        <li> <a href="C:/Users/user/Documents/ElegantlyHandy%20website/contactus.html"> Contact </a>  </li>
                    </ul>
 
 
                    <!--User & Bell Navigation-->
                    <ul class="nav navbar-nav pull-right"> 

                        <li> <a href="signup.php"> SignUp </a> </li> 
            
                        <li > <a href="login.php"> Login </a> </li>

                    </ul> 
  
                </div>
 
 
            </div>
 
 
        </nav>

    </div>


    <div class="mainsectioncontainerSignUp"style="display: flex; height: 100vh; justify-content: center;">

        <div id="mainsigninpagecontentcontainer">
            <div class="column">
                <div class="header" style="padding: 20px 80px;">

                    <b><h1 id="signuph1"style="font-size: 60px; color: #04a704; text-align: center;">Login </h1> </b>

                    <p style="color: purple; font-size:17px; text-align: center;"> Dream Big, Set Goals, Take Action</p>

                    <p style="text-align: center;">Don't Have An Account? Click to <a class="loginMessage" href="signup.php">SignUp</a> </p> </br>
                
                </div>


                <div class="registerform">
                    <form action="login.php" method="POST" style="display: flex; flex-direction: column;">

                        <?php include "includes/errors.php"; ?>

                        <label for="username">Username*</label> </br>
                        <input type="text" name="username" autocomplete="off" required style="border:1.5px solid;font-size:25px;">  </br>

                        <!--<label for="email">Email*</label> </br>
                        <input type="email" name="email" autocomplete="off" required style="border:1.5px solid;font-size:25px;"> --> </br>

                        <label for="password">Password*</label> </br>
                        <input type="password" name="password" autocomplete="off" required style="border:1.5px solid; font-size:25px;"> </br> </br>

                        <div class="row" id="checkbox">
                            <div class="col-sm-6">  
                                <input type="checkbox" id="freelancer" name="freelancer" value="freelancer" style="border:1.5px solid; font-size:25px;">
                                <label for="remember me">Remember Me</label>
                            </div>

                            <div class="col-sm-6">
                                <a href="#"style="color:black;">Forgot Password?</a><br>
                            </div>

                        </div> </br>

                        <button class="btn btn-success" type="submit" name="submitlogin" value="SUBMIT" style="font-size:20px;">Login</button>

                    </form>
                </div>

                <div class="termsAndConditions" style="padding-bottom:80px; text-align: center;">
                   <p>By Signing Up, You Agree To the Terms and Conditions</p> </br> </br>
                </div> </br> </br>

            </div> </br> </br>
        </div>

    </div>
    

    <div id="footercontainer">

        <?php 
            include "includes/footer.php";
        ?>

    </div>

</div>    
