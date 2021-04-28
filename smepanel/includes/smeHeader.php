<?php include "includes/db.php"; ?>
<?php include "functions.php"; ?>

<?php ob_start(); ?> <!--output buffering to redirect users & pieces of code to send evey request at the same time-->
<?php session_start(); ?>

<?php
if(!isset($_SESSION['user_role'])) {
    header('location:../index2.php');
} 

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">

<script src="jquery-3.3.1.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/jquery min3.2.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"> </script>
<script src="path/to/chartjs/dist/Chart.js"></script>
<script src="chartjs/chart.js/dist/Chart.js"> </script>

</head>

<body>