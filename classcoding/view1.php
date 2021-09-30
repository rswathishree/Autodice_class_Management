<?php
include 'common.php';
include 'header.php';
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
    <?php
    if(isset($_GET['standard'])) {
    if(!isset($_GET['sort'])) {
    $standard=$_GET['standard'];?>
     
<div class="row">
        <div class="col-xs-3">
        <a href="add_script.php?<?php echo "standard=".$standard?>"  class="btn btn-block
button"><?php echo "click here to add students to this class";?></a>
        </div>
        <div class="col-xs-3">
        <a href="view1.php?<?php echo "standard=".$standard. " & sort=1"?>"  class="btn btn-block
button"><?php echo "click here to sort students";?></a>
</div>
        <div class="col-xs-3">

                    <a href="view1.php"  class="btn btn-block
button"><?php echo "click here to choose another standard";?></a>
        
</div>
        <div class="col-xs-3">
                    <a href="index.php"  class="btn btn-block
button"><?php echo "click here to go back";?></a>
        </div>
        </div>
        <div class="container-fluid" id="content">
            <?php  
            $standard=$_GET['standard'];
            echo "<br/><br/><br/>"?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table">
    
                        
                        <?php
                        echo "<h3>"."Students in standard ".$standard."<h3/>";
                        $query = "SELECT * FROM class.student where student.standard='$standard'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        $i=0;
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Roll no</th>
                                    <th>Name</th>
                                    <th>mail</th>
                                    <th>update</th>
                                    <th>delete</th>
                                    <th>view teacher</th>
                                    <th>view details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $id= $row["id"];
                                    $i+=1;
                                    echo "<tr><td>" . $row["rollno"] . "</td><td>" . $row["name"] . "</td><td> " . $row["email"] . "</td><td><a href='update_script-1.php?id=$id & standard=$standard' class='btn button'> update</a></td><td><a href='delete_script.php?id=$id & standard=$standard' class='btn button'>delete</a></td><td><a href='manages3.php?id=$id & standard=$standard' class='btn button'>view teacher</a></td><td><a href='viewdetailstudent.php?id=$id ' class='btn button'>view details</a></td></tr>";
                                }
                                
                                ?>
                            </tbody>
                            <?php
                        } else {?>
                            <div class="container gut">
        <div class="jumbotron">
            <h2 class="bole"> add students first!</h2>
            
            <h3 class="bol"><a href="add_script.php?standard=<?php echo $standard ?>">Click Here !</a>  to add student.</h3>
        </div>
    </div>
                 <?php       }
                        ?>
                        
                    </table>
                     <div class="row">
                    
                    <a  class="btn btn-block
button"><?php echo "total ".$i." students";
?></a>
        
        
        </div>
        <?php echo "<br/><br/><br/>";?>
                </div>
            </div>
                    </div><?php } 
                    
        if(isset($_GET['sort'])){
            $standard=$_GET['standard'];?>
     
<div class="row">
        <div class="col-xs-3">
        <a href="add_script.php?<?php echo "standard=".$standard?>"  class="btn btn-block
button"><?php echo "click here to add students to this class";?></a>
        </div>
        <div class="col-xs-3">
        <a href="view1.php?<?php echo "standard=".$standard. " & sort=1"?>"  class="btn btn-block
button"><?php echo "click here to sort students";?></a>
</div>
        <div class="col-xs-3">

                    <a href="view1.php"  class="btn btn-block
button"><?php echo "click here to choose another standard";?></a>
        
</div>
        <div class="col-xs-3">
                    <a href="index.php"  class="btn btn-block
button"><?php echo "click here to go back";?></a>
        </div>
        </div>
            <div class="container-fluid" id="content">
            <?php $standard=$_GET['standard']; ?>
            
                        <?php
                        echo "<br/><br/><br/>";
                        $name=array();
                        $query = "SELECT * FROM class.student where standard=$standard";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                                <?php
                                $i=0;
                                while ($row = mysqli_fetch_array($result)) { 
                                    $i+=1;
                                    array_push($name,$row['name']);
                                }
                                sort($name);
                               ?>
                                <div class="container-fluid" id="content">
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table">
                    <thead>
                                <tr>
                                    <th>Roll No</th>
                                    <th>Name</th>
                                    <th>mail</th>
                                    <th>update</th>
                                    <th>delete</th>
                                    <th>view teacher</th>
                                    <th>view details</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                        <?php 
                         echo "<h3>"."Students in standard ".$standard."<h3/>";
                        foreach($name as $nam){
                            $query = "SELECT * FROM class.student where name='$nam'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        $row = mysqli_fetch_array($result);
                        $id= $row["id"];
                        echo "<tr><td>"  . $row["rollno"] . "</td><td>" . $row["name"] . "</td><td> " . $row["email"] ."</td><td><a href='update_script-1.php?id=$id & standard=$standard' class='btn button'> update</a></td><td><a href='delete_script.php?id=$id & standard=$standard' class='btn button'>delete</a></td><td><a href='manages3.php?id=$id & standard=$standard' class='btn button'>view teacher</a></td><td><a href='viewdetailstudent.php?id=$id ' class='btn button'>view details</a></td></tr>";
                    }
                    
                    ?>
                </tbody>
                <?php
            } else {?>
                <div class="container gut">
        <div class="jumbotron">
            <h2 class="bole"> add students first!</h2>
            
            <h3 class="bol"><a href="add_script.php?<?php echo "standard= ".$standard ?>">Click Here !</a>  to add student.</h3>
        </div>
    </div>
             <?php }
            ?>
            
        </table>
         <div class="row">
        
        <a  class="btn btn-block
button"><?php echo "total ".$i." students";
?></a>


</div>
<?php echo "<br/><br/><br/>";?>
    </div>
</div>
        </div>

       <?php }      }  

       if (!isset($_GET['standard'])){             
                    ?>
                    <div class="row">
    <h1><?php echo  "hi "."select the standard which you want" ?></h1>
    </div>
   
   <div class="row gut">
  
   <?php for($i=1;$i<=6;$i++) {?>
    
    
    <div class="col-xs-2 "> 
    <a href="view1.php?<?php echo "standard=".$i?>" class="btn btn-block
button"><?php echo "standard ".$i;?></a>
</div>
    
   <?php }?></div><br/><br/>
   <div class="row gut">
  
   <?php for($i=7;$i<=12;$i++) {?>
    
    
    <div class="col-xs-2 "> 
    <a href="view1.php?<?php echo "standard=".$i?>" class="btn btn-block
button"><?php echo "standard ".$i;?></a>
</div>
    
   <?php }?></div><br/>
   <?php }
        include 'footer.php'; ?>
    </body>
</html>