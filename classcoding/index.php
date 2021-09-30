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
</head>
<body>
    <?php
    include 'header.php';
   ?>
    <div id="banner-image" class="container">
        <div id="banner-content">
                <h1>Learning is an Adventure!!!</h1>
                <p>The future belongs to those who believe in the beauty of life</p>
                <button  class="btn btn-danger btn-active"><a href="view1.php " id="utt">Student</button>
                <button  class="btn btn-danger btn-active"><a href="visit.php " id="utt">Teacher</a></button>
                <button   class="btn btn-danger btn-active "><a href="visit.php " id="utt">allocate</a></button>
                <button   class="btn btn-danger btn-active "><a href="manage.php " id="utt">manage</a></button>
        </div>

    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>
