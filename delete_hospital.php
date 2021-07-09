<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head></html>
<?php

//error_reporting(0);
require('db.php');
// $host = "localhost";
//    $user = "root";
 //   $password = '';
   // $db_name = "atozcovidservices";
   // $con = mysqli_connect($host, $user, $password, $db_name);
$snow=$_GET['hid'];

if(mysqli_query($con,"DELETE  from hospitaldb where hid=$snow")){

echo("<script>alert('deleted sucessfully');
window.location.href = 'edit_hospitals.php';</script>"); 
}

?> 