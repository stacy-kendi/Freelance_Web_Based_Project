
    


<form action="" method="POST">

    <?php 

    if (isset($_GET['p_id'])) {

            $editpostid = $_GET['p_id'];

            $sql = "SELECT * FROM projects WHERE project_id = $editpostid"; 
            $projectresult = mysqli_query($connection, $sql);



            if (mysqli_num_rows($projectresult) > 0) {
                while($row = mysqli_fetch_assoc($projectresult)) {
                    $projectid = $row["project_id"];
                    $projectTitle = $row["project_title"];
                    $projectCategory = $row["project_category"];
                    $projectSkills = $row["project_skills"];
                    $projectSalary = $row["project_salary"];
                    $projectTimeframe = $row["project_timeframe"];
                    $projectDescription = $row["project_description"];
                    $projectAttachment = $row["project_attachment"];
                    $similarProject = $row["similar_project"];
                    $projectDate = $row["project_postingdate"];
                }
            }


    ?>
                                            
            <div class="form-group">
                <label for="projectTitle">Project Title:</label>
                <input value="<?php if (isset($projectTitle)) {echo $projectTitle;}  ?>" type="text" class="form-control" name="projectTitle" required>
            </div>

    
        <div class='row'>
            <div class='col-sm-6'>
                <label for='projectCategory'>Project Category</label> </br>
                    <div class='form-group'>
                        <select class='form-control' name='projectCategory' id="editProjectCategory" value="<?php/* if (isset($projectCategory)) {echo $projectCategory;}  */?>" required > 

                            <option value="technology"><?php echo $projectCategory; ?> </option>
                                    
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
                        <select class='form-control' name='requiredSkill' value="<?php /* if (isset($projectSkills)) {echo $projectSkills;} */ ?>" required>

                        <option value="marketing"><?php echo $projectSkills; ?> </option>
                                    
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
                    <input value="<?php if (isset($projectSalary)) {echo $projectSalary;}  ?>" type="text" class="form-control" name="projectBudget" required>
            </div>
        
        </div>    

        <div class="col-sm-6">
            <div class="form-group">
                <label for="projectTimeframe">Project TimeFrame:</label>
                    <input value="<?php if (isset($projectTimeframe)) {echo $projectTimeframe;}  ?>" type="text" class="form-control" name="projectTimeframe" required>
            </div>
        </div>    
    </div>    

            <div class="form-group">
                <label for="projectDescription">Project Description:</label>
                <textarea name='projectDescription' class='form-control' rows='15' cols='100' required> <?php if (isset($projectDescription)) {echo $projectDescription;}  ?> </textarea>
            </div>

            <div class="form-group">
                <label for="projectAttachment">Project Attachment:</label>
                <input value="<?php if (isset($projectAttachment)) {echo $projectAttachment;}  ?>" type='file' name='projectAttachment' class='form-control' placeholder='Upload Attachment'> 
            </div>

            <div class="form-group">
                <label for="similarProject">Similar Project:</label>
                <input value="<?php if (isset($similarProject)) {echo $similarProject;}  ?>" type='text' class='form-control' name='similarProject'>
            </div>

<?php } ?>

<?php 
    if(isset($_POST['editProject'])) {

        $projectTitle = $_POST['projectTitle'];
        $projectCategory = $_POST['projectCategory'];
        $projectSkills = $_POST['requiredSkill'];
        $projectDescription = $_POST['projectDescription'];
        $projectAttachment = $_POST['projectAttachment'];
        $similarProject = $_POST['similarProject'];
        $projectBudget = $_POST['projectBudget'];
        $projectTimeframe = $_POST['projectTimeframe'];
    
        $query = "UPDATE projects SET ";
        $query .= "project_title = '{$projectTitle}', ";
        $query .= "project_category = '{$projectCategory}', ";
        $query .= "project_skills = '{$projectSkills}', ";
        $query .= "project_salary = '{$projectBudget}', ";
        $query .= "project_timeframe = '{$projectTimeframe}', ";
        $query .= "project_description = '{$projectDescription}', ";
        $query .= "project_attachment = '{$projectAttachment}', ";
        $query .= "similar_project= '{$similarProject}', ";
        $query .= "project_postingdate = now()  ";
        $query .= "WHERE project_id = {$editpostid} ";
    

        $update_query = mysqli_query($connection, $query);

        confirmQuery($update_query);
        header("Location: adminallprojects.php");
    }
?>
                

            <div class="form-group">
                <input class="btn btn-success" type="submit" name="editProject" value="Edit Project">
                </div>
                                                
</form>