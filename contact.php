<?php
include "includes/header.php";

?>

<?php


if (isset($_POST["submit"])) {

    $to= "trialtestmoana@gmail.com";
    $subject=wordwrap($_POST["subject"], 50);
    $message=$_POST["message"];
    $header="From:" . $_POST["email"];

    // send email
    mail($to,$subject,$message,$header);

}


?>



<title>Contact</title>
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
                        <li>  <a href="postProject.php"> Post Project </a>  </li>
                        <li> <a href="contact.php"> Contact </a>  </li>
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


    <div class="mainsectioncontainerSignUp"style="display: flex;
    height: 100vh;
    justify-content: center;">

        <div id="mainsigninpagecontentcontainer">
            <div class="column">
                <div class="header" style="padding: 20px 80px;">

                    <b><h1 id="signuph1"style="font-size: 60px; color: #04a704; text-align: center;">Contact </h1> </b>

                    <p style="color: purple; font-size:17px; text-align: center;"> Need any help? Do fill in the form below.</p>

                    <p style="text-align: center;">Do You Already Have An Account? Click to <a class="loginMessage" href="login.php">Login</a> </p> </br>
                
                </div>


                <div class="registerform">
                    <form action="" method="POST" style="display: flex; flex-direction: column;">
                    
                       
                        
                        <label for="email">Email*</label> </br>
                        <input type="email" name="email" autocomplete="off" required style="border:1.5px solid;font-size:25px;"> </br>

                        <label for="subject">Subject*</label> </br>
                        <input type="text" name="subject" autocomplete="off" required style="border:1.5px solid;font-size:25px;"> </br>

                        <label for="subject">Message*</label> </br>
                        <textarea class="form-control" name="message" autocomplete="off" required style="border:1.5px solid;font-size:15px;"> </textarea> </br>


                        <button class="btn btn-success" type="submit" name="submit" value="SUBMIT" style="font-size:20px;">Send Message</button>

                    </form>
                </div>

            </div> </br> </br> 
        </div>

    </div> </br> </br> </br>
    

    <div id="footercontainer" style="padding-top: 280px;">

        <?php 
            include "includes/footer.php";
        ?>

    </div>

</div>    
