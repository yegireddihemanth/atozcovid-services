<?php
require('db.php');
//  $host = "localhost";
  //$user = "root";
  //$password = '';
  //$db_name = "atozcovidservices";
  //$con = mysqli_connect($host, $user, $password, $db_name);
  if(isset($_POST['username']))
  {
    $n=$_POST['username'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $s=$_POST['spec'];
    $fe=$_POST['docFees'];
    echo "$n";
   if(mysqli_query($con,"INSERT INTO doctb(sno,username,pass,email,spec,docFees)
VALUES(NULL,'$n','$pass','$email','$s','$fe')"))
{
    echo("<script>alert('added sucessfully');
    window.location.href = 'edit_doctors.php';</script>"); 
  
}

}
  
  ?>
  