<?php
session_start();
$e=$_SESSION['email'];
require('db.php');
// $host = "localhost";
//    $user = "root";
 //   $password = '';
   // $db_name = "atozcovidservices";
   // $con = mysqli_connect($host, $user, $password, $db_name);

$uname=$_POST['uname'];
$spec=$_POST['spec'];
$doctor=$_POST['doctor'];
$appdate=$_POST['appdate'];
$apptime=$_POST['apptime'];
mysqli_query($con,"INSERT INTO appoints(pname,pmail,spec,doctor,appdate,apptime)
VALUES('$uname','$e','$spec','$doctor','$appdate','$apptime')");

echo("<script>alert('Hello $uname you booked an appointment with Dr$doctor on $appdate at $apptime');
window.location.href = 'index.php';</script>"); 
?>