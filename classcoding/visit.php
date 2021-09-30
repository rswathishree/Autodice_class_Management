<?php
include 'common.php';
include 'check.php';
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
<?php if ((!isset($_GET['standard'])) and (!isset($_GET['subject']))) { 
   
    ?>
    
                    
        <div class="row">
                    
                    <div class="col-lg-3">
                    <a href="visit.php?std=1" class="btn btn-block
button"><?php echo "click here to view teachers standard wise";?></a>
<?php if (isset($_GET['std'])){?>
     <div class="row gut">
     
  <?php for($i=1;$i<=12;$i++) {?>
  
    
    <div class="col-xs-3 "> 
    <a href="visit.php?<?php echo "standard=".$i?>" class="btn btn-block
button"><?php echo "std ".$i;?></a>
</div>
    
   <?php }?> </div><?php } ?>
        </div>
        
                    <div class="col-lg-3">
                    <a href="visit.php?sub=2"  class="btn btn-block
 button"><?php echo "click here to view teachers departmentwise";?></a>
<?php if (isset($_GET['sub'])) { ?>
<div class="row gut">

<div class="col-xs-4"> 
    <a href="visit.php?subject=english" class="btn btn-block
button">english</a>
</div>
<div class="col-xs-4"> 

<a href="visit.php?subject=hindi" class="btn btn-block
button">hindi</a>
</div>
<div class="col-xs-4"> 

<a href="visit.php?subject=marathi" class="btn btn-block
button">marathi</a>
</div>
<div class="col-xs-4">

<a href="visit.php?subject=maths" class="btn btn-block
button">maths</a>
</div>
<div class="col-xs-4"> 

<a href="visit.php?subject=science" class="btn btn-block
button">science</a>
</div>
<div class="col-xs-4">

<a href="visit.php?subject=social studies" class="btn btn-block
button">social studies</a>
</div>
</div>
 
        <?php 
            }?>
        </div>
        
                    <div class="col-lg-3">
                    <a href="addt.php?add=1"  class="btn btn-block
button"><?php echo "click here to add teacher";?></a>
        </div>
        
                    <div class="col-lg-3">
                    <a href="index.php"  class="btn btn-block
button"><?php echo "click here to go back";?></a>
        </div>
        </div>
        
        
                
        <div class="container-fluid" id="content">
            <?php include 'header.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table">
    
                        
                        <?php
                        $query = "SELECT * FROM class.teacher";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        $i=0;
                        if (mysqli_num_rows($result) >= 1) {
                            echo "<h1>"."All Teachers"."</h1>";
                            ?>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>delete</th>
                                    <th>update</th>
                                    <th>allocate</th>
                                    <th>view handlings</th>
                                    <th>view details</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                while ($row = mysqli_fetch_array($result)) {
                                    $id= $row["id"];
                                    $tname=$row["name"];
                                    $i+=1;
                                    echo "<tr><td>" . $i . "</td><td>" . $row["name"] . "</td><td> " . $row["email"] ."</td><td><a href='delete_scriptt.php?id=$id' class='btn  button'> Delete</a></td><td><a href='update_scriptt.php?id=$id' class='btn button'> update</a></td><td><a href='allocate.php?all=1  &   id=$id & name=$tname' class='btn button'>allocate</a></td><td><a href='viewstandard.php?id=$id ' class='btn button'>view handling</a></td><td><a href='viewdetails.php?id=$id ' class='btn button'>view details</a></td></tr>";
                                }
                                
                                ?>
                            </tbody>
                            <?php 
                        } else {
                            ?>
                            <div class="container gut">
        <div class="jumbotron">
            <h2 class="bole"> add teachers first!</h2>
            
            <h3 class="bol"><a href="addt.php">Click Here !</a>  to add teacher.</h3>
        </div>
    </div>
                    <?php
                        }
                        ?>
                    </table>
                    

                    <div class="row">  
                    <?php echo "</br>"."</br>"."</br>" ?>
                    <a  class="btn btn-block
button"><?php echo "total ".$i." teacher";?></a>
    
        </div>
        <?php echo "<br/><br/><br/>";?>
        
                </div>
            </div>
        </div> <?php } ?>









<?php if((isset($_GET['standard'])) & (!isset($_GET['subject']))) {?>   <div class="row">
                    <div class="col-lg-3">
                    <a href="visit.php?std=1" class="btn btn-block
 button"><?php echo "click here to view teachers standard wise";?></a>
<?php if (isset($_GET['std'])){?>
     <div class="row gut">
     <div class="thumbnail">
  <?php for($i=1;$i<=12;$i++) {?>
  
    
    <div class="col-xs-3 "> 
    <a href="visit.php?<?php echo "standard=".$i?>" class="btn btn-block
button"><?php echo "std ".$i;?></a>
</div>
    
   <?php }?> </div> </div><?php } ?>
        </div>
        
                    <div class="col-lg-3">
                    <a href="visit.php?sub=2"  class="btn btn-block
button"><?php echo "click here to view teachers departmentwise";?></a>
<?php if (isset($_GET['sub'])) { ?>
<div class="row gut">
<div class="thumbnail">
<div class="col-xs-4"> 
    <a href="visit.php?subject=english" class="btn btn-block
button">english</a>
</div>
<div class="col-xs-4"> 

<a href="visit.php?subject=hindi" class="btn btn-block
button">hindi</a>
</div>
<div class="col-xs-4"> 

<a href="visit.php?subject=marathi" class="btn btn-block
button">marathi</a>
</div>
<div class="col-xs-4">

<a href="visit.php?subject=maths" class="btn btn-block
button">maths</a>
</div>
<div class="col-xs-4"> 

<a href="visit.php?subject=science" class="btn btn-block
button">science</a>
</div>
<div class="col-xs-4">

<a href="visit.php?subject=social studies" class="btn btn-block
button">social studies</a>
</div>
</div>
 </div>
        <?php 
            }?>
        </div>
        
                    <div class="col-lg-3">
                    <a href="addt.php?add=1"  class="btn btn-block
button"><?php echo "click here to add teacher";?></a>
        </div>
        
                    <div class="col-lg-3">
                    <a href="index.php"  class="btn btn-block
button"><?php echo "click here to go back";?></a>
        </div>
        </div>
    <div class="container-fluid" id="content">
            <?php include 'header.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                <?php
                        $stnd=array();
                        $standard=$_GET['standard'];
                        $query = "SELECT * FROM subject INNER JOIN teacher on subject.teacherid=teacher.id where subject.standard='$standard'";
                        echo "<br/><br/><br/><br/><br/>";
                        echo "<h1>"."teacher for standard ".$standard."</h1>";
    
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        $i=0;
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                                <?php
                                
                                while ($row = mysqli_fetch_array($result)) { 
                                   
                                    array_push($stnd,$row["id"]);
                                }
                                $stnd=array_unique($stnd,SORT_REGULAR);
                                ?>
                    <table class="table">
    
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>mail</th>
                                    <th>delete</th>
                                    <th>update</th>
                                    <th>allocate</th>
                                    <th>view handlings</th>
                                    <th>view details</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 foreach($stnd as $tsd){
                                $query = "SELECT * FROM subject INNER JOIN teacher on subject.teacherid=teacher.id where subject.standard='$standard' and teacher.id='$tsd'";
    
                                $result = mysqli_query($con, $query)or die($mysqli_error($con));
                               
                                $row = mysqli_fetch_array($result);
                                $i+=1;
                                    $id= $row["id"];
                                    $tname=$row["name"];
                                    echo "<tr><td>" . $i . "</td><td>" . $row["name"] . "</td><td> " . $row["email"] ."</td><td><a href='delete_scriptt.php?id=$id' class='btn button'> Delete</a></td><td><a href='update_scriptt.php?id=$id' class='btn button'> update</a></td><td><a href='allocate.php?all=1  &   id=$id & name=$tname' class='btn button'>allocate</a></td><td><a href='viewstandard.php?id=$id ' class='btn button'>view handling</a></td><td><a href='viewdetails.php?id=$id ' class='btn button'>view details</a></td></tr>";
                                }
                                
                                ?>
                            </tbody>
                            <?php
                        } else {
                            ?>
                            <div class="container gut">
        <div class="jumbotron">
            <h2 class="bole"> add teachers first!</h2>
            
            <h3 class="bol"><a href="addt.php">Click Here !</a>  to add teacher.</h3>
        </div>
    </div>
                    <?php
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                     


                 <div class="row">
                     
                    
                    <a  class="btn btn-block
button"><?php echo "total ".$i." teachers handling standard ".$standard;?></a>
    </div>
    <?php echo "<br/><br/><br/>";?>
        </div>
        
                
            </div>
        </div> <?php } ?>










<?php if (isset($_GET['subject'])) { ?> 
    <div class="row">
                    <div class="col-lg-3">
                    <a href="visit.php?std=1" class="btn btn-block
button"><?php echo "click here to view teachers standard wise";?></a>
<?php if (isset($_GET['std'])){?>
     <div class="row gut">
     <div class="thumbnail">
  <?php for($i=1;$i<=12;$i++) {?>
  
    
    <div class="col-xs-3 "> 
    <a href="visit.php?<?php echo "standard=".$i?>" class="btn btn-block
button"><?php echo "std ".$i;?></a>
</div>
    
   <?php }?> </div> </div><?php } ?>
        </div>
        
                    <div class="col-lg-3">
                    <a href="visit.php?sub=2"  class="btn btn-block
button"><?php echo "click here to view teachers departmentwise";?></a>
<?php if (isset($_GET['sub'])) { ?>
<div class="row gut">
<div class="thumbnail">
<div class="col-xs-4"> 
    <a href="visit.php?subject=english" class="btn btn-block
button">english</a>
</div>
<div class="col-xs-4"> 

<a href="visit.php?subject=hindi" class="btn btn-block
button">hindi</a>
</div>
<div class="col-xs-4"> 

<a href="visit.php?subject=marathi" class="btn btn-block
button">marathi</a>
</div>
<div class="col-xs-4">

<a href="visit.php?subject=maths" class="btn btn-block
button">maths</a>
</div>
<div class="col-xs-4"> 

<a href="visit.php?subject=science" class="btn btn-block
button">science</a>
</div>
<div class="col-xs-4">

<a href="visit.php?subject=social studies" class="btn btn-block
button">social studies</a>
</div>
</div>
 </div>
        <?php 
            }?>
        </div>
        
                    <div class="col-lg-3">
                    <a href="addt.php?add=1"  class="btn btn-block
button"><?php echo "click here to add teacher";?></a>
        </div>
        
                    <div class="col-lg-3">
                    <a href="index.php"  class="btn btn-block
button"><?php echo "click here to go back";?></a>
        </div>
        </div>
    
            <?php include 'header.php'; ?>
            <div class="container-fluid" id="content">
                <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
            
    
                       
                        <?php
                        $subject=$_GET['subject'];
                       
                        $i=0;
                        $stnd=array();
                        $query = "SELECT * FROM subject INNER JOIN teacher on subject.teacherid=teacher.id where subject.subject='$subject'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));

                        if (mysqli_num_rows($result) >= 1) {
                          ?>
                          <?php
                            echo "<br/><br/><br/><br/><br/>";
                            while ($row = mysqli_fetch_array($result)) { 
                                
                                array_push($stnd,$row["id"]);
                            }
                            $stnd=array_unique($stnd,SORT_REGULAR);
                            echo "<h1>"."Teachers handling ".$subject." subject"."</h1>";?>
                
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>mail</th>
                                    <th>delete</th>
                                    <th>update</th>
                                    <th>allocate</th>
                                    <th>view handlings</th>
                                    <th>view details</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                

<?php foreach($stnd as $tsd){

    $queryy = "SELECT * FROM subject INNER JOIN teacher on subject.teacherid=teacher.id where subject.subject='$subject' and teacher.id='$tsd' " ;
$result = mysqli_query($con, $queryy)or die($mysqli_error($con));
                                $row = mysqli_fetch_array($result);
                                $id= $row["id"];
                                $tname=$row["name"];
                                $i+=1;    
                                echo "<tr><td>"  . $i . "</td><td>" . $row["name"] . "</td><td> " . $row["email"] ."</td><td><a href='delete_scriptt.php?id=$id' class='btn button'> Delete</a></td><td><a href='update_scriptt.php?id=$id' class='btn button'> update</a></td><td><a href='allocate.php?all=1  &   id=$id & name=$tname' class='btn button'>allocate</a></td><td><a href='viewstandard.php?id=$id ' class='btn button'>view handling</a></td><td><a href='viewdetails.php?id=$id ' class='btn button'>view details</a></td></tr>";
                           }
                                
                                ?>
                            </tbody>
                            <?php
                        } else {
                            ?>
                            <div class="container gut">
        <div class="jumbotron">
            <h2 class="bole"> add teachers first!</h2>
            
            <h3 class="bol"><a href="addt.php">Click Here !</a>  to add teacher.</h3>
        </div>
    </div>
                    <?php    }
                        ?>
                        
                    </table> 
                    <div class="row">
                    <div class="thumbnail">
                    <a  class="btn btn-block
button"><?php echo "total ".$i." teachers in ".$subject ." department";?></a>
        
        </div>
        <?php echo "<br/><br/><br/>";?>
        </div>
        
                </div>
            </div>
        </div> <?php } ?>       
        <?php     include("footer.php"); ?>
    </body>
</html>