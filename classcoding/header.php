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
   .navbar-custom{
      background-color:darkred;
   }
   .navbar-brand{
      color:#FFFF99;
   }
</style>
<body>    


<div class="navbar navbar-custom navbar-fixed-top">
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="index.php">Class Management</a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav navbar-right">
 <?php
 ?>
 <li><a class="navbar-brand" href = "visit.php"><span class = "glyphicon glyphicon-education"></span> teacher </a></li>
 <li><a class="navbar-brand" href = "view1.php"><span class = "glyphicon glyphicon-user"></span>
Student</a></li>
 <li><a class="navbar-brand" href = "visit.php"><span class = "glyphicon glyphicon-link"></span> allocate</a></li>
 <li><a class="navbar-brand" href = "manage.php"><span class = "glyphicon glyphicon-cog"></span>manage</a></li>
 <?php ?>
 
    </ul>
    </div>
    </div>
   </div>
</body>
</html>