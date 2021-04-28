<?php
$connection = mysqli_connect('localhost', 'root', '', 'users');



if(isset($_POST['submit'])){
	
	//GET POST VARIABLES
	$name=$_POST['name'];
	$project_description=$_POST['project_description'];
		$skill=$_POST['required_skill'];
	  $budget=$_POST['budget'];
		$time=$_POST['time_frame'];
		$links=$_POST['link_to_similar_project'];

	//THE ENCRYPTION PROCESS
$nameencrypted=encryptthis($name, $key);
$project_descriptionencrypted=encryptthis($project_description, $key);
    $skillencrypted=encryptthis($skill, $key);
    $budgetnencrypted=encryptthis($budget, $key);
    $timeencrypted=encryptthis($time, $key);
    $linksencrypted=encryptthis($links, $key);

	//DISPLAY RESULTS
echo '<h2>Original Data</h2>';
echo '<p>Project Title: '.$name.'</p>';
echo '<p>Project Description: '.$project_description.'</p>';
    echo '<p>Project Skill: '.$skill.'</p>';
    echo '<p>Project Budget: '.$budget.'</p>';
    echo '<p>Project Time: '.$time.'</p>';
    echo '<p>Project Links: '.$links.'</p>';

	//INSERT INTO DATABASE
mysqli_query($connection,"INSERT INTO people(`name`, `project_description`,`required_skill`,`budget`,`time_frame`,`link_to_similar_project`)
VALUES ('$nameencrypted','$project_descriptionencrypted','$skillencrypted','$budgetencrypted','$timeencrypted','$linksencrypted)'");

echo '<p class="lead">The name and email address have been encrypted and stored into the database</p>';
}

echo '<form method="post">
	<div class="form-group">
		<label for="firstName">Enter Name Here</label>
			<input type="text" class="form-control" name="firstName">
	</div>
	<div class="form-group">
		<label for="email">Enter Email Here</label>
			<input type="email" class="form-control" name="email">
	</div>
	<input type="submit" name="submit" class="btn btn-success btn-lg" value="submit">
</form>';
echo '</div>
	  </div>
	  <div class="col-sm-3"></div>
	  </div>';
include_once('include/footer.php');
?>