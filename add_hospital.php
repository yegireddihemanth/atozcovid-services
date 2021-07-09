<?php
require('db.php');
  //$host = "localhost";
  //$user = "root";
  //$password = '';
  //$db_name = "atozcovidservices";
  //$con = mysqli_connect($host, $user, $password, $db_name);
  if(isset($_POST['hname']))
  {
    $n=$_POST['hname'];
    $pno=$_POST['pno'];
    $noofbeds=$_POST['nobeds'];
    $add=$_POST['add'];
    $oxy=$_POST['oxybeds'];
    
   if(mysqli_query($con,"INSERT INTO hospitaldb(hid,hname,telephoneno,haddress,noofbeds,noofoxygenbeds)
VALUES(NULL,'$n','$pno','$add','$noofbeds','$oxy')"))
{
    echo("<script>alert('added sucessfully');
    window.location.href = 'edit_hospitals.php';</script>"); 
  
}

}
  
  ?>
  