<?php
$create_datetime = date("Y-m-d");
require('db.php');
// $host = "localhost";
//    $user = "root";
 //   $password = '';
   // $db_name = "atozcovidservices";
   // $con = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($con,"INSERT INTO bedbookings(uname,typeofbed,hname,emailid)
VALUES('prane','ventilater','hf','jju')");
   
   ?>