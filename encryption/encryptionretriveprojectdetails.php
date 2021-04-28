<?php
include_once('encryptionheader.php');
error_reporting(0);
$result = $connection->query("SELECT * FROM projects") ;
while ($row = $result->fetch_assoc()) {
	$project_id = $row["project_id"];
?>


   

                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <label for='projectTitle'>Project Title: </label>
                                        <a href="../singleprojectYouth.php?p_id=<?php echo $project_id; ?>"> <?php echo '<p>'.decryptthis($row['project_title'], $key).'</p>'; ?> </a>
                                        </br>
                                    </div>
                                </div> 

                                <div class='row'>
                                    <div class='col-sm-12'>
                                        <label for='projectDescription'>Project Description</label> </br>
                                        <?php echo '<p style="padding:20px; border-style: solid;">'.decryptthis($row['project_description'], $key).'</p>'; ?> 
                                        </br>
                                    </div>
                                </div> 

                                <div class='row'>
                                    <div class='col-sm-5'>
                                        <label for='timeframe'>Timeframe</label> 
                                        <?php echo '<p>'.decryptthis($row['project_timeframe'], $key).'</p>'; ?>  </br>
                                    </div>

                                    <div class='col-sm-2'>
                                        
                                    </div>
                                
                                
                                    <div class='col-sm-5'>
                                        <center><button class='btn btn-success' type='submit' name='submitbidButton' onclick="document.location='../singleprojectYouth.php?p_id=<?php echo $project_id; ?>'">View Project </button> </center>
                                    </div>
                                </div> 

      
                                <hr style="height:5px;border-width:0;color:black;background-color:black"> </br>

            <?php
                        }
						
						echo '</div>
	  </div>
	  <div class="col-sm-3"></div>
	  </div>';

            ?>

            

        </div>

    
    


                

    

</div>
<?php
include_once('../includes/footer.php');
?>