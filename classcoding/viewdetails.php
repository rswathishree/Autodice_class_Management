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
    <style>
    #body{
        background-color:#FFFF99;
    }
    a{
        color:white;
        text-decoration:none;
        color:inherit;
    }
    table,th,td{
        font-size:20px;
        border: 3px solid darkred;
        border-collapse:collapse;
        
    }
    th,td{
        padding:5px;
        text-align:left;
        
    }
    th{
        border: 3px solid #FFFF99;
        background-color:darkred;
        width:25%;
        color:white;

    }
    tr{
        background-color:#FFFF99;
        color:darkred; 
    }
    .button{
        background-color:darkred;
        color:#FFFF99;
        
    }
    a.button:hover{
        color:white;
    }
</style>
    
</head>
<body id="body">
    <?php
    include 'header.php';
    $id=$_GET['id'];
    $query = "SELECT * FROM class.teacher where id='$id'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        $row = mysqli_fetch_array($result);?>
    <div class="container-fluid" id="content">
    <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">                    
    <table style="width:100%">
    
    <tr>
    <th>NAME</th>
    <td><?php echo $row['name']?></td>
    </tr>
    <tr>
    <th>EMAIL-ID</th>
    <td><?php echo $row['email']?></td>
    </tr>
    <tr>
    <th>GENDER</th>
    <td><?php echo $row['gender']?></td>
    </tr>
    <tr>
    <th>PHONE NUMBER</th>
    <td><?php echo $row['phone']?></td>
    </tr>
    <tr>
    <th>QUALIFICATION</th>
    <td><?php echo $row['qualification']?></td>
    </tr>
    <tr>
    <th>EXPERIENCE</th>
    <td><?php echo $row['experience']?></td>
    </tr>
   
</table>
    </div>
</div>
    <div class="row">
    <div class="container gut">
            <h2 class="bole">You have successfully collected data!</h2>
            <h3 class="lill"><a href="visit.php">Click Here !</a>  to go back.</h3>
        
    
</div>
   
    </div>
    
    </div>
    


    
</body>
</html>

<?php
    include 'footer.php';
    ?>
