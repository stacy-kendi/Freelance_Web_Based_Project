<?php 

if (isset($_POST['submitProject'])) {
  $title = $_POST['projectTitle'];
  $projectCategory = $_POST['projectCategory'];
  $requiredSkill = $_POST['requiredSkill'];
  $projectDescription = $_POST['projectDescription'];
  $attachmentUpload = $_POST['attachmentUpload'];
  $similarProject = $_POST['similarProject'];
  $projectBudget = $_POST['projectBudget'];
  $projectTime = $_POST['projectTime'];

  $query = "INSERT INTO projects (project_title, project_category, project_skills, project_salary, project_timeframe, project_description, project_attachment, similar_project, project_postingdate) VALUES('$title', '$projectCategory', '$requiredSkill', '$projectBudget', '$projectTime', '$projectDescription', '$attachmentUpload', '$similarProject', now())";
  mysqli_query($connection, $query);
  header("Location: adminallprojects.php");
}

?>




<form action="" method="POST">
                                            
            <div class="form-group">
                <label for="projectTitle">Project Title:</label>
                    <input type="text" class="form-control" name="projectTitle" required>
            </div>


        <div class='row'>
            <div class='col-sm-6'>
                <label for='projectCategory'>Project Category</label> </br>
                    <div class='form-group'>
                        <select class='form-control' name='projectCategory' required>
                        
                            <?php 

                                $sql = $sql = "SELECT * FROM category"; 
                                $selectcategory = mysqli_query($connection, $sql);
                                if (mysqli_num_rows($selectcategory) > 0) {
                                    while($row = mysqli_fetch_assoc($selectcategory)) {
                                        $id = $row["category_id"];
                                        $name = $row["category_name"];

                                        echo "<option value='{$id}'>{$name}</option>";                                      
                                    
                                    }
                                } else {
                                    echo "0 results";
                                }
                            ?>    

                        </select>
                                    
                    </div>
            </div>

            <div class= 'col-sm-6'>
                <label for='requiredSkill'>Required Skill</label> </br>
                                    
                    <div class='form-group'>
                        <select class='form-control' name='requiredSkill' required>
                                    
                            <?php 

                                $sql = 'SELECT * FROM skills'; 
                                $skillsresult = mysqli_query($connection, $sql);

                                if (mysqli_num_rows($skillsresult) > 0) {
                                    while($row = mysqli_fetch_assoc($skillsresult)) {
                                        $id = $row["skills_id"];
                                        $name = $row["skill_name"];

                                        echo "<option value='{$id}'>{$name}</option>";                                      
                                    
                                    }
                                } else {
                                    echo "0 results";
                                }
                            ?>    

                        </select>
                            
                    </div>

            </div>


        </div>
                        
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="projectBudget">Project Budget:</label>
                    <input type="text" class="form-control" name="projectBudget" required>
            </div>
        
        </div>    

        <div class="col-sm-6">
            <div class="form-group">
                <label for="projectTimeframe">Project TimeFrame:</label>
                    <input type="text" class="form-control" name="projectTime" required>
            </div>
        </div>    
    </div>    

            <div class="form-group">
                <label for="projectDescription">Project Description:</label>
                <textarea name='projectDescription' class='form-control' rows='15' cols='100' required></textarea>
            </div>

            <div class="form-group">
                <label for="projectAttachment">Project Attachment:</label>
                <input type='file' name='attachmentUpload' class='form-control' placeholder='Upload Attachment'> 
            </div>

            <div class="form-group">
                <label for="similarProject">Similar Project:</label>
                <input type='text' class='form-control' name='similarProject'>
            </div>
                

            <div class="form-group">
                <input class="btn btn-success" type="submit" name="submitProject" value="Add Project">
                </div>
                                                
</form>