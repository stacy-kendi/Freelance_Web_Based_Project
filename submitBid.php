<?php
include "includes/header.php";
include "includes/freelancerNavigation.php";
include "includes/classes/bidSubmissionFormDetails.php";
include "includes/server.php";
?>
<title>Bid Submission</title>



<div id="mainpostprojectcontentcontainer" style="display: flex;
    flex: 1;
    padding: 50px 350px;">

    <div class="column">

        <?php 
            $formProvider = new bidSubmissionFormDetails($connection);
            echo $formProvider -> createBidSubmissionForm();


        ?>

    </div>

</div>

<?php
include "includes/footer.php";
?>
