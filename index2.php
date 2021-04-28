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
                        <li>  <a href="encryption/encryptionretriveprojectdetails.php"> Browse Projects </a>  </li>
                        <li>  <a href="encryption/encryptioninsertproject.php"> Post Project </a>  </li>
                        <li> <a href="contact.php"> Contact </a>  </li>
                    </ul>

                    
 
 
                    <!--User SignUp and Login Navigation-->
                    <ul class="nav navbar-nav pull-right"> 

                        <li> <a href="signup.php"> SignUp </a> </li> 
            
                        <li > <a href="login.php"> Login </a> </li>
                        

                    </ul> 
  
                </div>
 
 
            </div>
 
 
        </nav>

    </div>


    <div class="container" style="text-align:center;">
            <img src="image1/background.jpg" style="height:340px;width:1000px" />
            <div class="centered" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);color:white;"><button style="background-color:green;"><a href="projectDetailsYouth.php" style="color:white;">View Projects</a></button></div>
            <div class="centered" style="position:absolute;top:50%;left:70%;transform:translate(-50%,-50%);color:white;"><button style="background-color:green;"><a href="encryption/encryptioninsertproject.php" style="color:white;">Post Projects</a></button></div>
            </div>
    
    <div id="mainsectioncontainer" style="padding-left:150px; padding-right:100px;">

        <div id="mainindexpagecontentcontainer">
            .
            <!--Carousel Slides--> 
            
            <section id="demos">
            <h3 style="text-align:center;color:green;"><b>Popular Job Categories</b></h3>
                    <div class="row">

                        <div class="large-12 columns">

                            <div class="owl-carousel owl-theme">

                                <?php 
                                    $sql = 'SELECT * FROM category'; 
                                    $admincategoryresult = mysqli_query($connection, $sql);
                                ?>

                                <?php 
                                    if (mysqli_num_rows($admincategoryresult) > 0) {
                                        while($row = mysqli_fetch_assoc($admincategoryresult)) {
                                            $id = $row["category_id"];
                                            $name = $row["category_name"];
                                            $category_image = $row["category_image"];
                                            
                                        
                                ?>
                                
                                            <div class="item" style="width: 178px; margin-right: 20px;background-colour:">
                                            <img src="image1/<?php echo $category_image; ?>" style="width: 200px;height:120px"/>
                                            <?php echo "<p style='text-align:center;'><a href='singlecategory.php?category=$id' style='color:black;'>{$name}</a></p>";?>
                                            </div>
                                <?php                            
                                        }
                                    } else {
                                            echo "0 results";
                                            }
                                    ?>
                                    
                            </div> 

                            <!--How It Works-->
                            <h3 style="text-align:center;color:green;"><b>How It Works</h3> </b>
                            <div>
                                <div class="row" style="margin-left:18px">
                                    <div class="col-sm-4" style="width: 300px;margin-right: 20px;">
                                        <img class="img-responsive img-circle" src="image1/post image.png" alt="Post a Project" style="height:250px;"/>
                                        <h4 style='text-align:center;'>Post a Project & Get Bids</h4>
                                    </div>

                                    <div class="col-sm-4" style="width: 300px; margin-right: 20px;">
                                        <img class="img-responsive img-circle" src="image1/e-wallet.jpg" alt="Search & Apply for Projects" style="height:250px;"/>
                                        <h4 style='text-align:center;'>Search & Apply for Projects</h4>
                                    </div>

                                    <div class="col-sm-4" style="width: 300px; margin-right: 20px;">
                                        <img class="img-responsive img-circle" src="image1/bid.jpg" alt="Make & Recieve Payments" style="height:250px;"/>
                                        <h4 style='text-align:center;'>Make & Receive Payments</h4>
                                    </div>

                                </div>
                            </div> </br> </br> </br>

                        <!--Projects -->
                        <h3 style="text-align:center;color:green;"><b>Projects</h3></b>
                        <div class="row">

                        <div class="large-12 columns">

                            <div class="owl-carousel owl-theme">

                                <?php 
                                    $sql = 'SELECT * FROM projects'; 
                                    $admincategoryresult = mysqli_query($connection, $sql);
                                ?>

                                <?php 
                                    if (mysqli_num_rows($admincategoryresult) > 0) {
                                        while($row = mysqli_fetch_assoc($admincategoryresult)) {
                                            $project_id = $row["project_id"];
                                            $project_title = $row["project_title"];
                                            $project_categoryid = $row["project_category"];
                                            $project_skills_id = $row["project_skills"];
                                            $project_salary = $row["project_salary"];
                                            $project_timeframe = $row["project_timeframe"];
                                            $project_description = substr($row["project_description"],0,250);
                                            $project_attachment = $row["project_attachment"];
                                            $similar_project = $row["similar_project"];
                                            
                                        
                                ?>
                                
                                            <div class="item" style="width: 178px; margin-right: 20px;background-colour:">
                                            <img src="image1"/>
                                            <?php echo $project_title; ?>
                                            </div>
                                <?php                            
                                        }
                                    } else {
                                            echo "0 results";
                                            }
                                    ?>
                                    
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
 




