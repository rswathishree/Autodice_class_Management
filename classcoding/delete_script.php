<?php
if (!isset($_GET['id'])) {
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
</head>
<body>
    <?php
    include 'header.php';

    $id=$_GET['id'];
    $standard=$_GET['standard'];
    $user_registration_query="DELETE FROM student  WHERE student.id = '$id'";
    $user_registration_result=mysqli_query($con,$user_registration_query)
    or die(mysqli_error($con)) ;?>
    <div class="container gut">
        <div class="jumbotron">
            <h2 class="bole">You have successfully deleted!</h2>
            <h3 class="lill"><a href="view1.php?standard=<?php echo $standard ?>">Click Here !</a>  to go back.</h3>
        </div>
    </div>
    
    
    
    
 <?php   
include 'footer.php';
?>

    
