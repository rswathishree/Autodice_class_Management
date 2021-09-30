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
<body class="body">
    <?php
    include 'header.php';
    $standard=$_GET['standard'];

    $id=$_GET['id'];?>
    <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table">
    <?php
    $user_registration_query="SELECT t.name,sb.subject FROM student s INNER JOIN subject sb on s.standard=sb.standard  INNER join teacher t on t.id=sb.teacherid where s.id=$id";
    $result=mysqli_query($con,$user_registration_query)
    or die(mysqli_error($con)) ;
    if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    
                                    <th>teacher_Name</th>
                                    <th>handling_subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr><td>"  . $row["name"] . "</td><td>" . $row["subject"] . "</td></tr>";
                                }
                                
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<h3>"."Add teachers  first!"."</h3>";
                        }?>
   </table>
                </div>
            </div>
            <div class="row">
    <div class="container gut">
            <h2 class="bole">You have successfully collected data!</h2>
            <h3 class="lill"><a href="view1.php?standard=<?php echo $standard ?>">Click Here !</a>  to go back.</h3>
        
    
</div>
   
    </div>
        </div>
    
    
    
    
 <?php   
include 'footer.php';
?>
</body>
</html>