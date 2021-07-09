<?php
include("admin_bookings.php");
//error_reporting(0);
require('db.php');
// $host = "localhost";
//    $user = "root";
 //   $password = '';
   // $db_name = "atozcovidservices";
   // $con = mysqli_connect($host, $user, $password, $db_name);
$snow=$_GET['sno'];
$data=mysqli_query($con,"DELETE  from bedbookings where sno=$snow");

?> 