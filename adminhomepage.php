<?php
include "includes/header.php";
?>



<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">


<!--Carousel Link-->
<link rel="stylesheet" href="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/css/docs.theme.min.css">
<link rel="stylesheet" href="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
<script src="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script src="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>

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
                        <div class="input-group" style="width: 113px">

                            <input name="search" type="text" class="form-control"  placeholder="Search" name="search"> 

                            <span class="input-group-btn" style="height: 36.5px; display: flex">
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
                        <li> <a href="C:/Users/user/Documents/ElegantlyHandy%20website/contactus.html"> Contact </a>  </li>
                    </ul>

                    
 
 
                    <!--User & Bell Navigation-->
                    <ul class="nav navbar-nav pull-right"> 

                        <li> <a href="signup.php"> SignUp </a> </li> 
            
                        <li > <a href="login.php"> Login </a> </li>
                        <li><a href="logout.php">Logout</a></li>

                    </ul> 
  
                </div>
 
 
            </div>
 
 
        </nav>

    </div>


    <div id="mainsectioncontainer">

        <div id="mainindexpagecontentcontainer">
            trial text
            <!--Carousel Slides--> 
            
            <section id="demos">
                    <div class="row">

                        <div class="large-12 columns">

                            <div class="owl-carousel owl-theme">

                                <div class="item" style="width: 178px; margin-right: 20px;">
                                <h4>1</h4>
                                </div>
                                <div class="item" style="width: 178px; margin-right: 20px;">
                                <h4>2</h4>
                                </div>
                                <div class="item" style="width: 178px; margin-right: 20px;">
                                <h4>3</h4>
                                </div>
                                <div class="item" style="width: 178px; margin-right: 20px;">
                                <h4>4</h4>
                                </div>
                                <div class="item" style="width: 178px; margin-right: 20px;">
                                <h4>5</h4>
                                </div>
                                <div class="item" style="width: 178px; margin-right: 20px;">
                                <h4>6</h4>
                                </div>
                                <div class="item" style="width: 178px; margin-right: 20px;">
                                <h4>7</h4>
                                </div>
                                <div class="item" style="width: 178px; margin-right: 20px;">
                                <h4>8</h4>
                                </div>
                                <div class="item" style="width: 178px; margin-right: 20px;">
                                <h4>9</h4>
                                </div>
                                <div class="item" style="width: 178px; margin-right: 20px;">
                                <h4>10</h4>
                                </div>
                                <div class="item" style="width: 178px; margin-right: 20px;">
                                <h4>11</h4>
                                </div>
                                <div class="item" style="width: 178px; margin-right: 20px;">
                                <h4>12</h4>
                                </div>

                            </div>


                            <script>

                                $(document).ready(function() {
                                $('.owl-carousel').owlCarousel({
                                    loop: true,
                                    margin: 10,
                                    responsiveClass: true,
                                    responsive: {
                                    0: {
                                        items: 1,
                                        nav: true
                                    },
                                    600: {
                                        items: 3,
                                        nav: false
                                    },
                                    1000: {
                                        items: 5,
                                        nav: true,
                                        loop: false,
                                        margin: 20
                                    }
                                    }
                                })
                                })

                            </script>

                        </div>

                    </div>    

            </section>    


        </div>

    </div>

    <div id="footercontainer">

        <?php 
            include "includes/footer.php";
        ?>

    </div>

    <script src="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/vendors/highlight.js"></script>
    <script src="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/js/app.js"></script>

</div>    
 




