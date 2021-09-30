<?php
if (!isset($_POST['name'])) {
    header('location: index.php');
   }
include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="syndex.css" rel="stylesheet" type="text/css"/>
    <title>class</title>
    <style>
.body{
        background-color:#FFFF99;
    }
</style>
</head>
<body class="body">
    <?php
    include 'header.php';
    $id=$_GET['id'];
    $query = "SELECT * FROM class.teacher where teacher.id='$id'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $name=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $gender=$row['gender'];
    $experience=$row['experience'];
    $qualification=$row['qualification'];
   
$name1 = mysqli_real_escape_string($con, $_POST['name']);
$email1= mysqli_real_escape_string($con,$_POST['email']);
$phone1 = mysqli_real_escape_string($con,$_POST['phone'] );
$gender1 = mysqli_real_escape_string($con, $_POST['gender']);
$qualification1 = mysqli_real_escape_string($con, $_POST['qualification']);
$experience1 = mysqli_real_escape_string($con, $_POST['experience']);


if($name!=$name1){
    $user_registration="UPDATE class.teacher SET name = '$name1' WHERE teacher.id=$id";
        
    $user_registrate=mysqli_query($con,$user_registration)
    or die(mysqli_error($con)) ;}

if($email!=$email1){
        $user_registration="UPDATE class.teacher SET email = '$email1' WHERE teacher.id=$id";
            
        $user_registrate=mysqli_query($con,$user_registration)
        or die(mysqli_error($con)) ;}
if($phone!=$phone1){
            $user_registration="UPDATE class.teacher SET phone= '$phone1' WHERE teacher.id=$id";
                
            $user_registrate=mysqli_query($con,$user_registration)
            or die(mysqli_error($con)) ;}
if($gender!=$gender1){
                $user_registration="UPDATE class.teacher SET teacher.gender = '$gender1' WHERE teacher.id=$id";
                    
                $user_registrate=mysqli_query($con,$user_registration)
                or die(mysqli_error($con)) ;}
if($qualification!=$qualification1){
                    $user_registration="UPDATE class.teacher SET qualification = '$qualification1' WHERE teacher.id=$id";
                    $user_registrate=mysqli_query($con,$user_registration)
                    or die(mysqli_error($con)) ;}
if($experience!=$experience1){
                        $user_registration="UPDATE class.teacher SET experience = '$experience1' WHERE teacher.id=$id";
                        
                    $user_registrate=mysqli_query($con,$user_registration)
                    or die(mysqli_error($con)) ;}


?>
    <div class="container gut">
        <div class="jumbotron">
            <h2 class="bole">You have successfully updated!</h2>
            <h3 class="lill"><a href="visit.php">Click Here !</a>  to go back.</h3>
        </div>
    </div>
    
    
    
    
 <?php   
include 'footer.php';
?>

    
