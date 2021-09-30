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
    echo"<br/><br/><br/>";
    $standard=$_GET['standard'];
    $id=$_GET['id'];
    $query = "SELECT * FROM class.student where student.standard='$standard'and student.id='$id'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $name=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $gender=$row['gender'];
    $rollno=$row['rollno'];?>
    

    <div class="container">
        <div class="row gut ">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4>Update student's detail</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning">Enter the student details </p>
                        <form method="POST" action= "update_script2.php?<?php echo "standard=".$standard."& id=".$id ?>">
                        <div class="form-group">
        <input class="form-control" type="text" name="name" id="name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" placeholder=<?php echo "$name"?> value=<?php echo "$name"?>>
        </div>
        <div class="form-group">
        <input  class="form-control" type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"   placeholder=<?php echo "$email"?> value=<?php echo "$email"?>>
        
        </div>
        
        <div class="form-group">
        <input  class="form-control" type="number" id="phone"name="phone"placeholder=<?php echo "$phone"?> value=<?php echo "$phone"?>>
        

        </div>
        
        <?php if($gender=="male"){  ?>
        <div class="form-group">
            
            Gender:
            <input  type="radio" name="gender" value="male"id="gender" checked >male
            <input  type="radio" name="gender" value="female"id="gender">female
        </div><?php } ?>
        <?php if($gender=="female"){  ?>
        <div class="form-group">
            
            Gender:
            <input  type="radio" name="gender" value="male"id="gender" >male
            <input  type="radio" name="gender" value="female"id="gender" checked>female
        </div><?php } ?>
        <div class="form-group">
        <input  class="form-control" type="number" id="rollno" name="rollno" placeholder=<?php echo "$rollno"?> value=<?php echo "$rollno"?>>
        
        </div>
        <button type="submit" name="submit" class="btn btn-danger">Submit</button><br><br>
                            

                        </form><br>
                    </div>
                    <div class="panel-footer"><p>click here to? <a href="view1.php?standard=<?php echo $standard ?>">Return</a></p></div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>