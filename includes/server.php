<?php
session_start();

// initializing variables
$username = "";
$firstname = "";
$lastname = "";
$email    = "";
$password = "";
$user_role = "";
$errors = array(); 

// connecting to the database
$db = mysqli_connect('localhost', 'root', '', 'tujiajiri');

// Registeriing a User to the Database
if (isset($_POST['submit'])) {
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $user_role = mysqli_real_escape_string($db, $_POST['user_role']);
  $userTitle = mysqli_real_escape_string($db, $_POST['user_title']);
  

  // form validation: ensuring that the form is correctly filled ...
  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($lastname)) { array_push($errors, "Lastname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($user_role)) { array_push($errors, "User Role is required"); }
  if (empty($userTitle)) { array_push($errors, "Title is required"); }
  

  // Checking the database to make sure a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (username, firstname, lastname, email, password, user_role, user_title) VALUES('$username', '$firstname', '$lastname', '$email', '$password', '$user_role', '$userTitle')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index2.php');
  }
}

// User Login Part
if (isset($_POST['submitlogin'])) {

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $username = mysqli_real_escape_string($db, $username);
  $password = mysqli_real_escape_string($db, $password);

  $query = "SELECT * FROM user WHERE username='$username'";
  $results = mysqli_query($db, $query);

  if (!$results) {
    die ("QUERY FAILED". mysqli_error($db));
  }

  while($row = mysqli_fetch_assoc($results)) {
    $database_id = $row["user_id"];
    $database_username = $row["username"];
    $database_firstname = $row["firstname"];
    $database_lastname = $row["lastname"];
    $database_password = $row["password"];
    $database_user_role = $row["user_role"];
  }

  if ($username ==$database_username && $password ==$database_password) {
    $_SESSION['username'] = $database_username;
    $_SESSION['firstname'] = $database_firstname;
    $_SESSION['lastname'] = $database_lastname;
    $_SESSION['user_role'] = $database_user_role;
    $_SESSION['username'] = $database_username;
    $_SESSION['username'] = $database_username;
    header('location:./adminpanel/index2.php');
  } else {
    array_push($errors, "Wrong Username/Password");  
  }

  
    /*$username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index2.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }*/

    
  }





//Project Form Submission
if (isset($_POST['submitProject'])){

   // File Destination
  $destination = 'attachmentUploads/' . $filename;

  // Retrieving File Extension Path
  $extension = pathinfo($filename, PATHINFO_EXTENSION);


  $title = $_POST['projectTitle'];
  $categoryinput = $_POST['categoryinput'];
  $requiredSkill = $_POST['requiredSkill'];
  $projectDescription = $_POST['projectDescription'];
  $filename = $_FILES['attachmentUpload']['name'];// Getting File Name
  $fileTemp = $_FILES['attachmentUpload']['tmp_name'];//storing file on a temporary folder
  $similarProject = $_POST['similarProject'];
  $projectBudget = $_POST['projectBudget'];
  $projectTime = $_POST['projectTime'];
  $size = $_FILES['attachmentUpload']['size'];//storing file size on temporary folder

  move_uploaded_file($fileTemp, "attachmentUploads/$filename");

  if (!in_array($extension, ['pdf', 'docx'])) {
    echo "You file extension must be .pdf or .docx";
} elseif ($_FILES['attachmentUpload']['size'] > 10000) { // The size of the file should not be more than 1MB
    echo "File is too large!";
} else {
    // move the uploaded file from temporary location to the specified destination
    if (move_uploaded_file($fileTemp, $destination)) {
        
        
            echo "File uploaded successfully";
        
    } else {
        echo "Failed to upload file.";
    }
}

  $query = "INSERT INTO projects (project_title, project_category, project_skills, project_salary, project_timeframe, project_description, project_attachment, similar_project, project_postingdate, size, downloads) VALUES('$title', '$categoryinput', '$requiredSkill', '$projectBudget', '$projectTime', '$projectDescription', '$filename', '$similarProject', now(), $size, 0)";
  mysqli_query($db, $query);
  header('location: projectViewingSme.php');
  
}

//Bid Submission Form
if (isset($_POST['submitBid'])){
  $bidDescription = $_POST['bidDescription'];
  

  $query = "INSERT INTO bids (bid_description) VALUE('$bidDescription')";
  mysqli_query($db, $query);
  //header('location: allBids.php');
  
}


?>