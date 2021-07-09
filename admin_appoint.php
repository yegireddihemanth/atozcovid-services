<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Doctor Appointment Details</title>
  </head>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <body>


   <table class="table table-hover" border="2">
    <tr>
      <th> patient name</th>
      <th>patient email</th>
      <th>spec</th>
      <th>Doctor</th>
      <th>appdate</th>
      <th>apptime</th>
      
      <th>Delete</th>
    </tr>

   <?php
   require('db.php');
   //$host = "localhost";
     // $user = "root";
      //$password = '';
      //$db_name = "atozcovidservices";
      //$con = mysqli_connect($host, $user, $password, $db_name);
     $sql="SELECT * FROM appoints";
     $res=mysqli_query($con,$sql);

      $count = mysqli_num_rows($res);
      if($count!=0)
      {
while ($a=mysqli_fetch_assoc($res)) {

?>
<tr>
<td><?php echo $a['pname'];?></td>
<td><?php echo $a['pmail'];?></td>
<td><?php echo $a['spec'];?></td>
<td><?php echo $a['doctor'];?></td>
<td><?php echo $a['appdate'];?></td>
<td><?php echo $a['apptime'];?></td>
<td><a href="delete_appoint.php?sno=<?php echo $a['sno'];?>">Delete</td>
</tr>
  <?php
}

      }

      ?>
   </table>
</body>
</html>
