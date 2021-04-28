<?php
include_once('encryptionheader.php');
if(isset($_POST['submit'])){
	
	//GET POST VARIABLES
$projectTitle=$_POST['projectTitle'];
$projectDescription=$_POST['projectDescription'];
$projectBudget=$_POST['projectBudget'];
$projectTime=$_POST['projectTime'];
$categoryinput=$_POST['categoryinput'];
$requiredSkill=$_POST['requiredSkill'];

	//THE ENCRYPTION PROCESS
$projectTitleEncrypted=encryptthis($projectTitle, $key);
$projectDescriptionEncrypted=encryptthis($projectDescription, $key);
$projectBudgetEncrypted=encryptthis($projectBudget, $key);
$projectTimeEncrypted=encryptthis($projectTime, $key);
$categoryInputEncrypted=encryptthis($categoryinput, $key);
$requiredSkillEncrypted=encryptthis($requiredSkill, $key);


	//INSERT INTO DATABASE
mysqli_query($connection,"INSERT INTO projects(`project_title`, `project_category`, `project_skills`, `project_salary`, `project_timeframe`, `project_description`)
VALUES ('$projectTitleEncrypted','$categoryInputEncrypted','$requiredSkillEncrypted','$projectBudgetEncrypted','$projectTimeEncrypted','$projectDescriptionEncrypted')");
header('location: ../payment/pesapal-iframe.php');

}

$sql = "SELECT * FROM category"; 
$result = mysqli_query($connection, $sql);

$sql = "SELECT * FROM skills"; 
$skillsresult = mysqli_query($connection, $sql); 

echo '<form method="post">
	
    <div class="form-group">
        <div class="row">
            <div class="col-sm-12">
                <label for="projectTitle">Project Title</label> </br>
                <input type="text" name="projectTitle" required style="border:1.5px solid;"> </br>
            </div>
        </div>
    </div>


    <div>

    
                            <div class="row">
                                <div class="col-sm-6">
                                        <label for="projectCategory">Project Category</label> </br>
                                    <div class="form-group">
                                        <select class="form-control" name="categoryinput" required style="border:1.5px solid;>"; ';

                                    

                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            //$id = $row["category_id"];
                                            $name = $row["category_name"];
                                            echo "<option value=$name>$name</option>";
                                        
                                        }
                                    } else {
                                        echo "0 results";
                                    }

                                    echo '</select> 
                                    </div>
                                </div> 

                                <div class= "col-sm-6">
                                        <label for="requiredSkill">Required Skill</label> </br>
                                    
                                    <div class="form-group">
                                        <select class="form-control" name="requiredSkill" required style="border:1.5px solid;>"; ';
                                    

                                    if (mysqli_num_rows($skillsresult) > 0) {
                                        while($row = mysqli_fetch_assoc($skillsresult)) {
                                            $id = $row["skills_id"];
                                            $name = $row["skill_name"];
                                            echo "<option value=$id>$name</option>";
                                        
                                        }
                                    } else {
                                        echo "0 results";
                                    }

                                    echo '</select> 
                                    </div>

                                </div>


                            </div>

    </div>


    <div class="form-group">
        <label for="projectDescription">Project Description</label> </br>
                    <textarea name="projectDescription" rows="15" cols="100" required style="border:1.5px solid;"></textarea> </br>
    </div>


    <div class="form-group">
        <div class="row">
            <div class= "col-sm-6">

                <div class="input-group">
                    <label for="attachmentupload">Attachment Upload</label> 
                    <input type="file" name="attachmentUpload" class="form-control" placeholder="Upload Attachment"  style="border:1.5px solid;"> 
                </div>

            </div>
    
            <div class= "col-sm-6">
                <label for="similarProject">Link To Similar Project </label> </br>
                <input type="text" name="similarProject"  style="border:1.5px solid;">
            </div>

        </div> </br>
    </div>

    

    <div class="form-group">
        <div class="row">
            <div class= "col-sm-6">
                <label for="projectDescription">Budget</label> </br>
                <input type="text" name="projectBudget" required style="border:1.5px solid;">
            </div>
                        
            <div class= "col-sm-6">
                <label for="projectTime">Time Frame </label> </br>
                <input type="text" name="projectTime" required style="border:1.5px solid;">
            </div>

        </div> </br>
    </div>

	<input type="submit" name="submit" class="btn btn-success btn-lg" value="submit">
</form>';
echo '</div>
	  </div>
	  <div class="col-sm-3"></div>
	  </div>';
include_once('../includes/footer.php');
?>