<?php include "includes/freelancerPanelHeader.php"; ?>

<!--Image Uploading-->
<?php
    // Initialize message variable
  $msg = "";

?>

<?php 

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

$query = "SELECT *FROM user WHERE username='{$username}'";

$selectuserprofile = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($selectuserprofile)) {
        $userid = $row["user_id"];
        $username = $row["username"];
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $useremail = $row["email"];
        $userpassword = $row["password"];
        $userRole = $row["user_role"];
        $userImage = '../images/'.$row["user_image"];
        $skills = $row["skills"];
        $userDescription = $row["user_description"];
        $ratePerHour = $row["user_rate_per_hour"];
        $userTitle = $row["user_title"];
    }
}

?>



<div id="wrapper">

<?php include "includes/freelancerpanelnavigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12">

                <h1> <center>Users </center> </h1> 
                <hr>

                    <form action="" method="POST" enctype="multipart/form-data">

                            <div class="row">
                        
                                <div class="col-sm-2">

                                    <img src="<?php echo $userImage; ?>" style="height: 150px; width: 150px; padding-top: 5px; padding-bottom: 5px; float: left;" alt="" />
                                </div> 

                                <div class="col-sm-10">


                                        <div class="form-group">
                                            <b><?php {echo $firstname , " " , $lastname;} ?> </b>
                                        </div>

                                        <div class="form-group">
                                            <b>Title:</b> <?php {echo $userTitle;} ?>
                                        </div>
                                    

                                        <div class='form-group'>
                                            <label for='userRatePerHour'>Rate Per Hour (Ksh):</label>                 <?php {echo $ratePerHour;} ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="userEmail">Email:</label>
                                                <?php if (isset($useremail)) {echo $useremail;}  ?>
                                        </div>

                                </div> <!--<div class="col-sm-9"> -->

                            </div> <!-- End of Image Row-->

                                
                            <div class="form-group">
                                    <label for="skills"style="font-size:18px;">Skills:</label>
                                        <input value="<?php {echo $skills;} ?>" style="width:100%;padding-bottom:20px; padding-top:10px;"> 
                                </div>

                            <div class="form-group">
                                    <label for="user_description" style="font-size:18px;">Description:</label>
                                        <input value="<?php {echo $userDescription;}  ?>" style="width:100%;padding-bottom:5px"> 
                                </div>
                           


                                <div class="form-group">
                                    <a href="freelancereditprofile.php"><button class="btn btn-default" type="submit"> Edit Profile </a>
                                </div>
                                                                    
                    </form>

                
                </div>
            </div>
        </div>
    </div>

                
</div>
<?php include "includes/adminfooter.php"; ?>