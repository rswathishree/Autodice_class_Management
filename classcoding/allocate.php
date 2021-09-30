<?php
if ((!isset($_GET['id'])) and (!isset($_GET['stand'])) ){
    header('location: index.php');
   }
include 'common.php';
include 'check.php';
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
<div class="container-fluid" id="content">
          
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">

<?php if (isset($_GET['all'])){
                        $id=$_GET['id'];
                        $ttname=$_GET['name']?>

                                    
                    <?php echo "<h1 id='allocate'>"."allocate standard for  ". $ttname."</h1>";?>
                    <div class="row gut">
                                        
                                   <?php for($o=1;$o<=6;$o++) {
                                        ?>
                                       
                                        <div class="col-xs-2 "> 
                                        <a href="allocate.php?<?php echo "stand=".$o." & teacherid=".$id?>" class="btn btn-block
                                    button"><?php echo "std ".$o;?></a>
                                    </div>
                                       <?php } echo "<br/><br/><br/>"?> 
                                       <?php for($o=7;$o<=12;$o++) {
                                        ?>
                                       
                                        <div class="col-xs-2 "> 
                                        <a href="allocate.php?<?php echo "stand=".$o." & teacherid=".$id?>" class="btn btn-block
                                    button"><?php echo "std ".$o;?></a>
                                    </div>
                                       <?php } ?> </div>
                                    <?php }

                    if ((isset($_GET['teacherid'])) & (isset($_GET['stand'])) )  {
                        $teacherid=$_GET['teacherid'];
                        $standard=$_GET['stand']; 
                        echo "<h1 id='allocates'>"."allocate subject"."</h1>" ?>
                        <div class="row gut">
    
    <div class="col-xs-4 "> 
        
    <?php 
    $subject="english";
    if(check($teacherid,$standard,$subject)){ ?>
         <a href="#" class="btn btn-block btn-success" disabled>english</a>
    <?php }
    else{
    ?>

    <a href="allocate3.php?subject=english &<?php echo " standard=".$standard." & teacherid=".$teacherid?>" class="btn btn-block
    button">english</a><?php } ?>
</div>
    
    <div class="col-xs-4 "> 
    <?php 
    $subject='hindi';
    if(check($teacherid,$standard,$subject)){ ?>
        <a href="#" class="btn btn-block btn-success" disabled>hindi</a>
    <?php }
    else{
    ?>
    <a href="allocate3.php?subject=hindi &<?php echo " standard=".$standard." & teacherid=".$teacherid?>" class="btn btn-block
    button">hindi</a><?php } ?>
</div>
    
    <div class="col-xs-4 "> 
    <?php
    $subject='marathi';
    if(check($teacherid,$standard,$subject)){ ?>
        <a href="#" class="btn btn-block btn-success" disabled>marathi</a>
    <?php }
    else{
    ?>
    <a href="allocate3.php?subject=marathi &<?php echo " standard=".$standard." & teacherid=".$teacherid?>" class="btn btn-block
    button">marathi</a><?php } ?>
</div>
    
    <div class="col-xs-4 ">
    <?php
    $subject='maths';
    if(check($teacherid,$standard,$subject)){ ?>
        <a href="#" class="btn btn-block btn-success" disabled>maths</a>
    <?php }
    else{
    ?> 
    <a href="allocate3.php?subject=maths &<?php echo " standard=".$standard." & teacherid=".$teacherid?>" class="btn btn-block
    button">maths</a><?php } ?>
</div>
    
    <div class="col-xs-4 "> 
    <?php
    $subject='science';
    if(check($teacherid,$standard,$subject)){ ?>
        <a href="#" class="btn btn-block btn-success" disabled>science</a>
    <?php }
    else{
    ?>
    <a href="allocate3.php?subject=science &<?php echo " standard=".$standard." & teacherid=".$teacherid?>" class="btn btn-block
    button">science</a><?php } ?>
</div>
    
    <div class="col-xs-4">
    <?php 
    $subject='social studies';
    if(check($teacherid,$standard,$subject)){ ?>
        <a href="#" class="btn btn-block btn-success" disabled>social studies</a>
    <?php }
    else{
    ?> 
    <a href="allocate3.php?subject=social studies &<?php echo " standard=".$standard." & teacherid=".$teacherid?>" class="btn btn-block
    button">social studies</a><?php } ?>
    </div>
   </div>

                    <?php }   ?> <div class="container gut">
        
            <h3 class="lill"><a href="visit.php">Click Here !</a>  to go back.</h3>
        
    </div>  </div></div></div>    
                    
        <?php     include("footer.php"); ?>
    </body>
</html>