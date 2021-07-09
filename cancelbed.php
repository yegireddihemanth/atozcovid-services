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
$result=mysqli_query($con,"SELECT * from bedbookings where emailid='$e'");
$a=mysqli_fetch_assoc($result);
$row=mysqli_num_rows($result);
             $hn=$a['hname'];
        
                mysqli_query($con,"DELETE from bedbookings where emailid='$e'");
                
                if ($a['typeofbed']=="ventilator")
                {
                mysqli_query($con,"UPDATE hospitaldb set noofoxygenbeds=noofoxygenbeds+1 WHERE hname='$hn'");
                echo "<script>alert('you have cancelled your bed');</script>";
                header("Refresh:0; url=index.php");
                }
                else{
                        mysqli_query($con,"UPDATE hospitaldb set noofbeds=noofbeds+1 WHERE hname='$hn'");
                        echo "<script>alert('you have cancelled your bed');</script>";
                       header("Refresh:0;url=index.php");
                }
             ?>
             </html>