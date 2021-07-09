<?php

//error_reporting(0);
require('db.php');
// $host = "localhost";
//    $user = "root";
 //   $password = '';
   // $db_name = "atozcovidservices";
   // $con = mysqli_connect($host, $user, $password, $db_name);
$snow=$_GET['sno'];
if(mysqli_query($con,"DELETE  from vaccinationregistrations where sno=$snow"))
{
    echo 'yes';
}
else
echo "no";

?> 