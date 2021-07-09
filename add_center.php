<?php
//  $host = "localhost";
 // $user = "root";
  //$password = '';
 // $db_name = "atozcovidservices";
 
  $con=mysqli_connect('remotemysql.com','AJtedatBu3','ayYeXSJSOx','AJtedatBu3');
 // $con = mysqli_connect($host, $user, $password, $db_name);
  if(isset($_POST['name']))
  {
    $n=$_POST['name'];
    $noof=$_POST['noof'];
    $add=$_POST['add'];
    echo "$n";
    echo "$noof";
    echo "$add";
 if(   mysqli_query($con,"INSERT INTO vaccinationcenters(id,cname,noofvaccine,caddress)
VALUES(NULL,'$n','$noof','$add')"))
{
  
  echo("<script>alert('added sucessfully');
  window.location.href = 'edit_centers.php';</script>"); 
}
}
  
  ?>