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
   
$name = mysqli_real_escape_string($con, $_POST['name']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$phone = mysqli_real_escape_string($con,$_POST['phone'] );
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$qualification = mysqli_real_escape_string($con, $_POST['qualification']);
$experience = mysqli_real_escape_string($con, $_POST['experience']);
$user_registration_query="SELECT email,id FROM  class.teacher WHERE    email='$email'";
$user_registration_result=mysqli_query($con,$user_registration_query)
or die(mysqli_error($con)) ;
$total_rows_fetched=mysqli_num_rows($user_registration_result);
if($total_rows_fetched>0){
    echo "the email already exists!";?>
    <div class="row">
                    <div class="thumbnail">
                    <a href="visit.php" class="btn btn-block
btn-danger">Click here to return</a>
        
        </div>
        </div><?php
}
else{
    $user_register_query="INSERT INTO class.teacher(`name`,`email`,`phone`,`gender`,`qualification`,`experience`) VALUES('$name','$email','$phone','$gender','$qualification','$experience')";
    $user_registration=mysqli_query($con,$user_register_query)
    or die(mysqli_error($con)) ;?>
    <div class="container gut">
        <div class="jumbotron">
            <h2 class="bole">You have successfully added!</h2>
            <h3 class="lill"><a href="visit.php">Click Here !</a>  to go back.</h3>
        </div>
    </div>
    
    
    
    
 <?php   
}
include 'footer.php';
?>

</body>
</html>   
