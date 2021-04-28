<?php
include "includes/header.php";
include "includes/freelancerNavigation.php";
?>




<div id="mainpostprojectcontentcontainer" style="display: flex;
    flex: 1;
    padding: 50px 350px;">

    

        <div class="column" style="width: 100pc;">

            <?php 

            if(isset($_GET['category'])){
                $thecategory_id=$_GET['category'];
            }

                $sql = "SELECT * FROM projects WHERE project_category = '$thecategory_id'";
                $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                         while($row = mysqli_fetch_assoc($result)) {
                             $project_id = $row["project_id"];
                             $project_title = $row["project_title"];
                             $project_salary = $row["project_salary"];
                             $project_description = substr($row["project_description"],0,250);
                             
                             
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
                                        <?php echo "<p> $project_description </p>"; ?> 
                                        </br>
                                    </div>
                                </div> 

                                <div class='row'>
                                                            
                                    <div class='col-sm-5'>
                                        <label for='salary'>Salary</label> 
                                        <?php echo "<p> $project_salary </p>"; ?> </br>
                                    </div>

                                    <div class='col-sm-2'></div>

                                    <div class='col-sm-5'>
                                        <center><button class='btn btn-success' type='submit' name='submitbidButton' onclick="document.location='singleprojectYouth.php?p_id=<?php echo $project_id; ?>'">View Project </button> </center>
                                    </div>

                                </div> 

                                <hr style="height:5px;border-width:0;color:black;background-color:black"> 

                                

            <?php
                        }
                    } else {
                        echo "No Project Currently Available ";
                        }

            ?>

        </div>

                

    

</div>

<?php
include "includes/footer.php";
?>