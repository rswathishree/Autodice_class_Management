<?php
if (!isset($_GET['standard'])) {
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
    $standard=$_GET['standard'];
    $id=$_GET['id'];
    $query = "SELECT * FROM class.student where student.standard='$standard'and student.id='$id'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $name=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $gender=$row['gender'];
    $rollno=$row['rollno'];
   
$name1 = mysqli_real_escape_string($con, $_POST['name']);
$email1= mysqli_real_escape_string($con,$_POST['email']);
$phone1 = mysqli_real_escape_string($con,$_POST['phone'] );
$gender1 = mysqli_real_escape_string($con, $_POST['gender']);
$rollno1 = mysqli_real_escape_string($con, $_POST['rollno']);
if($name!=$name1){
    $user_registration="UPDATE class.student SET name = '$name1' WHERE student.id=$id";
        
    $user_registrate=mysqli_query($con,$user_registration)
    or die(mysqli_error($con)) ;}

if($email!=$email1){
        $user_registration="UPDATE class.student SET email = '$email1' WHERE student.id=$id";
            
        $user_registrate=mysqli_query($con,$user_registration)
        or die(mysqli_error($con)) ;}
if($phone!=$phone1){
            $user_registration="UPDATE class.student SET phone= '$phone1' WHERE student.id=$id";
                
            $user_registrate=mysqli_query($con,$user_registration)
            or die(mysqli_error($con)) ;}
if($gender!=$gender1){
                $user_registration="UPDATE class.student SET student.gender = '$gender1' WHERE student.id=$id";
                    
                $user_registrate=mysqli_query($con,$user_registration)
                or die(mysqli_error($con)) ;}
if($rollno!=$rollno1){
                    $user_registration="UPDATE class.student SET student.rollno = '$rollno1' WHERE student.id=$id";
                        
                    $user_registrate=mysqli_query($con,$user_registration)
                    or die(mysqli_error($con)) ;}


?>
    <div class="container gut">
        <div class="jumbotron">
            <h2 class="bole">You have successfully updated!</h2>
            <h3 class="lill"><a href="view1.php?standard=<?php  echo $standard ?>">Click Here !</a>  to go back.</h3>
        </div>
    </div>
    
    
    
    
 <?php   
include 'footer.php';
?>
</body>
</html>
    
