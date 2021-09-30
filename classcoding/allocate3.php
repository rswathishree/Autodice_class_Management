<?php if (!isset($_GET['standard'])) {
    header('location: index.php');
   }?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


<!--jQuery library--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<!--Latest compiled and minified JavaScript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" >
<link href="syndex.css" rel="stylesheet" type="text/css"/>
<title>Class Management</title>
<style>
.body{
        background-color:#FFFF99;
    }
</style>
</head>
<body class="body">
    <?php
    include 'header.php';
$standard = $_GET['standard'];
$teacherid=$_GET['teacherid'];
$subject=$_GET['subject'];
INCLUDE 'common.php';
$user_registration_query="INSERT INTO class.subject(teacherid, standard, subject) VALUES('$teacherid', '$standard', '$subject')";
$user_registration_result=mysqli_query($con,$user_registration_query)
or die(mysqli_error($con)) ;
//header('location: visit.php');?>
<div class="container gut">
        <div class="jumbotron">
            <h2 class="bole">You have successfully allocated!</h2>
            <h3 class="lill"><a href="visit.php">Click Here !</a>  to go back.</h3>
        </div>
    </div>
</body>
</html>