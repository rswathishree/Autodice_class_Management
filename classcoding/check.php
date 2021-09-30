<?php
function check($teacherid,$standard,$subject){
    

$con=mysqli_connect("localhost","root","","class")or die (mysqli_error($con));



$user_registration_query="SELECT * FROM class.subject WHERE teacherid='$teacherid' AND standard ='$standard' and
subject='$subject'";
$user_registration_result=mysqli_query($con,$user_registration_query)
or die(mysqli_error($con)) ;

$total_rows_fetched=mysqli_num_rows($user_registration_result);
if($total_rows_fetched>=1){
    return 1;
}
else{
    return 0;
}
    }




?>