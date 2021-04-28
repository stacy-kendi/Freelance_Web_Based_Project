<?php
include "includes/header.php";
include "includes/SmeNavigation.php";
?>
<title>Freelancer Listing</title>
<center> <h4 style="color:purple;"> Get to Work With the Best Freelancers </h4> </center>



<?php 

$query = "SELECT * FROM user WHERE user_role = 'freelancer'";

$selectuserprofile = mysqli_query($connection, $query);

    

    while($row = mysqli_fetch_assoc($selectuserprofile)) {
        $userid = $row["user_id"];
        $username = $row["username"];
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $userRole = $row["user_role"];
        $userImage = 'images/'.$row["user_image"];
        $skills = $row["skills"];
        $userDescription = $row["user_description"];
        $ratePerHour = $row["user_rate_per_hour"];
        

?>

    <div id="mainpostprojectcontentcontainer" style="display: flex;
    flex: 1;
    padding-left:350px; padding-right:350px; padding-top:20px; padding-bottom:10px">


        <div class="column" style="width:100%">

        
            <div class="col-sm-3">

                <img src="<?php echo $userImage; ?>" style="height: 175px; width: 175px; padding-top: 5px; padding-bottom: 5px; float: right;" alt="" />
            </div> 

            <div class="col-sm-9">

                <div class="form-group">
                                    <label for="username">Username:</label>
                                        <?php {echo $username;}  ?>
                                </div>


                                <div class="form-group">
                                    <label for="firstname">First Name:</label>
                                        <?php {echo $firstname;}  ?>
                                </div>


                                <div class="form-group">
                                    <label for="skills">Skills:</label>
                                        <?php {echo $skills;} ?>
                                </div>

                                <div class="form-group">
                                    <label for="description">description:</label>
                                        <?php {echo $userDescription;} ?>
                                </div>

                                    <div class='form-group'>

                                        <label for='userRatePerHour'>Rate Per Hour (Ksh):</label> 
                                                                                   
                                            <?php {echo $ratePerHour;} ?>
                                  
                                    </div>
            </div>

        </div>

    

    </div>
<?php }
    
?>


<?php
include "includes/footer.php";
?>