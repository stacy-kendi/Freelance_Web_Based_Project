<?php
include "includes/header.php";
include "includes/SmeNavigation.php";
include "includes/classes/projectSubmissionFormDetails.php";
include "includes/server.php";
?>


<div id="mainpostprojectcontentcontainerpostproject" style="display: flex;
    flex: 1;
    padding: 50px 350px;">

    <div class="column">

        <?php 
            $formProvider = new projectSubmissionFormDetails($connection);
            echo $formProvider -> createProjectSubmissionForm();

           
    

        ?>

    </div>

</div>

<?php
include "includes/footer.php";
?>