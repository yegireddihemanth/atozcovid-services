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
$result=mysqli_query($con,"SELECT * from vaccinationregistrations where email='$e'");
$a=mysqli_fetch_assoc($result);
$row=mysqli_num_rows($result);
             $hn=$a['centerid'];
        
                mysqli_query($con,"DELETE from vaccinationregistrations where email='$e'");
                
               
                mysqli_query($con,"UPDATE vaccinationcenters set noofvaccine=noofvaccine+1 WHERE id=$hn");
                echo "<script>alert('you have cancelled your vaccine registration');</script>";
               header("Refresh:0; url=index.php");
               
             ?>
             </html>