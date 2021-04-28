<?php include "includes/smeHeader.php"; ?>

<div id="wrapper">

<?php include "includes/smenavigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12">

                <h1> <center>Projects </center> </h1> 
                <hr>

                <?php 

                    if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                    } else {
                        $source = '';
                    }

                    switch ($source) {

                        case 'adminaddprojectform';
                        include "includes/adminaddprojectform.php";
                        break;

                        case 'admineditproject';
                        include "includes/admineditproject.php";
                        break;

                        

                        default:

                        include "includes/adminviewprojects.php";

                        break;
                    }

                ?>
                <?php 
                    deleteProject();
                ?>

                </div>
            </div>
        </div>
    </div>

                
</div>
<?php include "includes/adminfooter.php"; ?>

<!--if(isset($_POST['editProject'])) {
    $title = $_POST['projectTitle'];
    $projectCategory = $_POST['projectCategory'];
    $requiredSkill = $_POST['requiredSkill'];
    $projectDescription = $_POST['projectDescription'];
    $attachmentUpload = $_POST['attachmentUpload'];
    $similarProject = $_POST['similarProject'];
    $projectBudget = $_POST['projectBudget'];
    $projectTime = $_POST['projectTime'];

    $query = "UPDATE projects SET ";
    $query .= "projectTitle = '{$title}', ";
    $query .= "projectCategory = '{$projectCategory}', ";
    $query .= "requiredSkill = '{$requiredSkill}', ";
    $query .= "projectDescription = '{$projectDescription}', ";
    $query .= "attachmentUpload = '{$attachmentUpload}', ";
    $query .= "similarProject = '{$similarProject}', ";
    $query .= "projectBudget = '{$projectBudget}', ";
    $query .= "projectTime = '{$projectTime}', ";
    $query .= "WHERE project_id = {$getProjectId} ";

    $update_query = mysqli_query($connection, $query);

        if (!$update_query) {
            die("QUERY FAILED". mysqli_query($connection));
        }
}-->

