<?php 
$connection = mysqli_connect('localhost', 'root', '', 'projectsdb');
?>

<?php
include_once('encryptionfunction.php');
?>

<html>
<head>
<title>Project Submission Form Encryption</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="../style.css">
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">

<script src="../jquery-3.3.1.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="../bootstrap/js/jquery min3.2.1.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"> </script>
</head>
<body style="background-color:#dddddd;">
<?php 
include ("SmeNavigation.php"); 
?>
<div>
</div>
<div class="container">
 <div class="row">
 <div class="col-sm-3"></div>
 <div class="col-sm-6">