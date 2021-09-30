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
<title>Class Management</title>
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
        <div class="container-fluid" id="content">
            <?php include 'header.php'; 
            $id=$_GET['id'];?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table ">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $query = "SELECT * FROM subject where teacherid=$id";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    
                                    <th>standard</th>
                                    <th>subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $id= $row["no"];
                                    echo  "<tr><td>" . $row["standard"] . "</td><td> " . $row["subject"] . "</td></tr>";
                                }
                                
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Add items first!";
                        }
                        ?>
                        
                    </table>
                    <div class="row">
                    <div class="thumbnail">
                    <a href="visit.php" class="btn btn-block
button">Click here to return</a>
        
        </div>
        </div>
                </div>
            </div>
        </div>
        
        <?php include'footer.php'; ?>
    </body>
    </html>