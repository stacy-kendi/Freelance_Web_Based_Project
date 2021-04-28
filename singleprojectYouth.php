<?php
include "includes/header.php";
include "includes/freelancerNavigation.php";
?>
<title>View Project Details</title>



<div id="mainpostprojectcontentcontainer" style="display: flex;
    flex: 1;
    padding: 50px 350px;">

    

        <div class="column" style="width: 100pc;">

            <?php 

            if(isset($_GET['p_id'])){
                $theproject_id=$_GET['p_id'];
            }

                $sql = "SELECT * FROM projects WHERE project_id = '$theproject_id'";
                $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                         while($row = mysqli_fetch_assoc($result)) {
                             $project_id = $row["project_id"];
                             $project_title = $row["project_title"];
                             $project_category = $row["project_category"];
                             $project_skills = $row["project_skills"];
                             $project_salary = $row["project_salary"];
                             $project_timeframe = $row["project_timeframe"];
                             $project_description = $row["project_description"];
                             $project_attachment = $row["project_attachment"];
                             $similar_project = $row["similar_project"];
                             
            ?>

                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <label for='projectTitle'>Project Title: </label>
                                        <a href="project.php?p_id=<?php echo $project_id; ?>"> <?php echo  $project_title ?> </a>
                                        </br>
                                    </div>
                                </div> </br> </br>

                                <div class='row'>
                                    <div class='col-sm-5'>
                                        <label for='projectCategory'>Project Category</label> </br>
                                       <?php echo "<p style='border-bottom: 1px solid black;'> $project_category </p>"; ?>  </br>
                                    </div>

                                    <div class='col-sm-2'>
                                        
                                    </div>
                                
                                
                                    <div class='col-sm-5'>
                                        <label for='requiredSkill'>Required Skill</label> </br>
                                        <?php echo "<p style='border-bottom: 1px solid black;'> $project_skills </p>"; ?> 
                                    </div>
                                </div> </br> </br>

                                <div class='row'>
                                    <div class='col-sm-5'>
                                        <label for='salary'>Salary</label> </br>
                                        <?php echo "<p style='border-bottom: 1px solid black;'> $project_salary </p>"; ?>  
                                    </div> 

                                    <div class='col-sm-2'>

                                    </div>
                                
                                
                                    <div class='col-sm-5'>
                                        <label for='projectTimeframe'>Time Frame</label> </br>
                                        <?php echo "<p style='border-bottom: 1px solid black;'> $project_timeframe </p>"; ?>   </br>
                                    </div> 
                                </div> </br> </br>

                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <label for='projectDescription'>Project Description</label> </br>
                                        <?php echo "<p style='padding:20px; border-style: solid;'> $project_description </p>"; ?> 
                                        </br>
                                    </div>
                                </div> </br> </br>

                                <div class='row'>
                                    <div class='col-sm-5'>
                                        <label for='projectAttachment'>Attachment</label> </br>
                                        <?php echo $project_attachment ?>  </br>
                                        <a href='attachmentUploads/<?php echo $project_attachment ?>' target='_blank'>Download File</a>
                                    </div>

                                    <div class='col-sm-2'>
                                        
                                    </div>
                                
                                
                                    <div class='col-sm-5'>
                                        <label for='similarProject'>Similar Project</label> </br>
                                        <?php echo "<p style='border-bottom: 1px solid black;'> $similar_project </p>"; ?>  
                                    </div>
                                </div> </br> </br>

                                <center><button class='btn btn-success' type='submit' name='submitbidButton' onclick="document.location='submitBid.php'">Submit Bid </button> </center>

                                <hr style="height:5px;border-width:0;color:black;background-color:black"> 

                                

            <?php
                        }
                    } else {
                        echo "0 results";
                        }

            ?>

        </div>

                

    

</div>

<?php
include "includes/footer.php";
?>