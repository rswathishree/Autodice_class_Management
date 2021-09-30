
<?php include 'common.php';
?><!DOCTYPE html>
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
<body>
    <?php
    include 'header.php';
   if((!isset($_GET['std'])) && (!isset($_GET['sub'])) ){ ?>
    <div id="banner-image" class="container">
        <div id="banner-content">
                <h1>Learning is an Adventure!!!</h1>
                <p>The future belongs to those who believe in the beauty of life</p>
                <button  class="btn btn-danger btn-active"><a href="manage.php?std=0" id="utt">Manage Class</button>
                <button  class="btn btn-danger btn-active"><a href="manage.php?sub=1 " id="utt">Manage Department</a></button>
                
                
        </div>

   </div><?php }?>
   
   <?php if(isset($_GET['std'])) { ?>
    <div class="container-fluid" id="content">
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                <br/>
                    <table class="table ">
                    <thead>
                                <tr>
                                    
                                    <th>subject</th>
                                    <th>No of teachers</th>
                                </tr>
                            </thead>
                            <tbody>
                            
     <?php
    
      for($i=1;$i<13;$i++){ 
    $query = "SELECT * FROM class.student where student.standard=$i";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    echo  "<tr><td>" . "standard-".$i . "</td><td> " . mysqli_num_rows($result) . "</td></tr>";}?>
    </tbody>
    </table>
    <div class="row">
    <div class="container gut">
            <h2 class="bole">You have successfully managed!</h2>
            <h3 class="lill"><a href="manage.php">Click Here !</a>  to go back.</h3>
        
    
</div>
   
    </div>
</div>
</div>
</div><br/>


    <?php }?>
    <?php if(isset($_GET['sub'])) { ?>
    <div class="container-fluid" id="content">
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table ">
                    <thead>
                                <tr>
                                    
                                    <th>subject</th>
                                    <th>No of teachers</th>
                                </tr>
                            </thead>
                            <tbody>
     <?php 
      $subject=array('english','hindi','marathi','maths','science','social studies',);
      foreach($subject as $sb){
          $stnd=array();
                        $query = "SELECT * FROM subject INNER JOIN teacher on subject.teacherid=teacher.id where subject.subject='$sb'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));

                        if (mysqli_num_rows($result) >= 1) {
                          ?>
                          <?php
                            while ($row = mysqli_fetch_array($result)) { 
                                
                                array_push($stnd,$row["id"]);
                            }
                            $stnd=array_unique($stnd,SORT_REGULAR);
                            echo  "<tr><td>" .$sb . "</td><td> " . count($stnd) . "</td></tr>";;
      }}
     ?>
    </tbody>
    </table>
    <div class="row">
    <div class="container gut">
            <h2 class="bole">You have successfully managed!</h2>
            <h3 class="lill"><a href="manage.php">Click Here !</a>  to go back.</h3>
        
    
</div>
   
    </div>
    
</div>
</div>
</div><br/>


    <?php }
    include 'footer.php';
    ?>
</body>
</html>