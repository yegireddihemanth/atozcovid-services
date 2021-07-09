<html>
<?php

session_start();
require('db.php');
// $host = "localhost";
//    $user = "root";
 //   $password = '';
   // $db_name = "atozcovidservices";
   // $con = mysqli_connect($host, $user, $password, $db_name);
$e=$_SESSION['email'];

                mysqli_query($con,"DELETE from appoints where pmail='$e'");
                 echo "<script>alert('you have cancelled your Appointment');</script>";
               header("Refresh:0; url=index.php");
               
             ?>
             </html>