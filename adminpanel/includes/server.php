<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$password = "";
$errors = array(); 

// connecting to the database
$db = mysqli_connect('localhost', 'root', '', 'tujiajiri');

// Registeriing a User to the Database
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  

  // first check the database to make sure a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
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

  	$query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// User Login Part
if (isset($_POST['submitlogin'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

//Project Form Submission
if (isset($_POST['submitProject'])){
  $title = $_POST['projectTitle'];
  $categoryinput = $_POST['categoryinput'];
  $requiredSkill = $_POST['requiredSkill'];
  $projectDescription = $_POST['projectDescription'];
  $attachmentUpload = $_POST['attachmentUpload'];
  $similarProject = $_POST['similarProject'];
  $projectBudget = $_POST['projectBudget'];
  $projectTime = $_POST['projectTime'];

  $query = "INSERT INTO projects (project_title, project_category, project_skills, project_salary, project_timeframe, project_description, project_attachment, similar_project, project_postingdate) VALUES('$title', '$categoryinput', '$requiredSkill', '$projectBudget', '$projectTime', '$projectDescription', '$attachmentUpload', '$similarProject', now())";
  mysqli_query($db, $query);
  header('location: projectViewingSME.php');
  
}


?>