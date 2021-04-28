<?php
include "includes/header.php";
include "includes/freelancerNavigation.php";
?>




<div id="mainpostprojectcontentcontainer" style="display: flex;
    flex: 1;
    padding: 50px 350px;">

    

        <div class="column" style="width:100%">

            <?php 

                if(isset($_POST['submit'])) {
                    $search = $_POST['search'];
                

                    $query = "SELECT * FROM projects WHERE project_tags LIKE '%$search%' OR project_skills LIKE '%$search%' ";
                    $query2 = "SELECT * FROM user WHERE username LIKE '%$search%' OR firstname LIKE '%$search%'";
                    $searchquery = mysqli_query($connection, $query);
                    $searchquery2 = mysqli_query($connection, $query2); 


                    if (!$searchquery) {
                        die("Search Query Error" . mysqli_error($connection));
                    }

                    $count = mysqli_num_rows($searchquery);
                        if($count == 0) {
                            
                        } else {

                            while($row = mysqli_fetch_assoc($searchquery)) {
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

                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <label for='projectTitle'>Project Title: </label>
                                        <a href="singleprojectYouth.php?p_id=<?php echo $project_id; ?>"> <?php echo  $project_title ?> </a>
                                        </br>
                                    </div>
                                </div> </br>

                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <label for='projectDescription'>Project Description</label> </br>
                                        <?php echo "<p style='padding:20px; border-style: solid;'> $project_description ... </p>"; ?> 
                                        </br>
                                    </div>
                                </div> 

                                <div class='row'>
                                    <div class='col-sm-5'>
                                        <label for='salary'>Salary</label> 
                                        <?php echo "<p> $project_salary </p>"; ?>  </br>
                                    </div>

                                    <div class='col-sm-2'>
                                        
                                    </div>
                                
                                
                                    <div class='col-sm-5'>
                                        <center><button class='btn btn-success' type='submit' name='submitbidButton' onclick="document.location='singleprojectYouth.php?p_id=<?php echo $project_id; ?>'">View Project </button> </center>
                                    </div>
                                </div> 

      
                                <hr style="height:5px;border-width:0;color:black;background-color:black">

            <?php
                                }
                            } 

                            if (!$searchquery2) {
                                die("Search Query2 Error" . mysqli_error($connection));
                            }
        
                            $count = mysqli_num_rows($searchquery2);
                                if($count == 0) {
                                    
                                } else {
        
                                    while($row = mysqli_fetch_assoc($searchquery2)) {
                                        $userid = $row["user_id"];
                                        $username = $row["username"];
                                        $firstname = $row["firstname"];
                                        $lastname = $row["lastname"];
                                        $userRole = $row["user_role"];
                                        $userImage = 'images/'.$row["user_image"];
                                        $skills = $row["skills"];
                                        $userDescription = $row["user_description"];
                                        $ratePerHour = $row["user_rate_per_hour"];
                                        $userTitle = $row["user_title"];
                                     
                    ?>
                        
                        <div class="row">
                        
                        <div class="col-sm-3">

                            <img src="<?php echo $userImage; ?>" style="height: 150px; width: 150px; padding-top: 5px; padding-bottom: 10px; float: left;" alt="" />
                        </div> 

                        <div class="col-sm-9" style="padding-top:10px;">


                                <div class="form-group">
                                    <b><?php {echo $firstname , " " , $lastname;} ?> </b>
                                </div>

                                <div class="form-group">
                                    <b>Title:</b> <?php {echo $userTitle;} ?>
                                </div>
                            

                                <div class='form-group'>
                                    <label for='userRatePerHour'>Rate Per Hour (Ksh):</label>                 
                                    <?php {echo $ratePerHour;} ?>
                                </div>


                        </div> <!--<div class="col-sm-9"> -->

                    </div> <!-- End of Image Row-->

                        
                    <div class="form-group" style="padding-bottom:10px;padding-top:10px;">
                            <label for="skills"style="font-size:18px;">Skills:</label>
                                <input value="<?php {echo $skills;} ?>" style="width:100%;padding-bottom:20px; padding-top:10px;"> 
                        </div>

                    <div class="form-group">
                            <label for="user_description" style="font-size:18px;">Description:</label>
                                <input value="<?php {echo $userDescription;}  ?>" style="width:100%;padding-bottom:5px"> 
                        </div>


                                
                                            
                <?php
                                }
                            }
                        }
                    

            ?>

            
    
            

        </div> <!--entire column div-->

    
    


                

    

</div>

<?php
include "includes/footer.php";
?>