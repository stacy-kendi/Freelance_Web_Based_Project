<?php
include "includes/header.php";
include "includes/freelancerNavigation.php";
?>




<div id="mainpostprojectcontentcontainer" style="display: flex;
    flex: 1;
    padding: 50px 350px;">

    

        <div class="column">

            <?php 

                $sql = 'SELECT * FROM bids';
                $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                         while($row = mysqli_fetch_assoc($result)) {
                             $bidId = $row["bid_id"];
                             $bidProjectId = $row["bid_project_id"];
                             $bidDescription = $row["bid_description"];
                             
                             
            ?>

                                <!--<div class='row'>
                                    <div class='col-sm-12'>
                                        <label for='projectTitle'>Project Title: </label>
                                        <a href="singleprojectYouth.php?p_id=<?php echo $bidId; ?>"> <?php echo  $bidProjectId ?> </a>
                                        </br>
                                    </div>
                                </div> </br> </br> -->

                                <div class='row'>
                                    <div class='col-sm-12'>
                                    <label for='projectDescription'>Project Description</label> </br>
                                    <?php echo "<p style='padding:20px; border-style: solid;'> $bidDescription </p>"; ?> 
                                    
                                    </div>

                                </div> 
                    
                                </br>


                                <hr style="height:5px;border-width:0;color:black;background-color:black">

                                </br>

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