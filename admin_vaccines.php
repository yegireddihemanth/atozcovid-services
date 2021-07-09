<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>vaccination Details</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>


   <table class="table table-hover" border="2">
    <tr>
      <th>cname</th>
      <th>center name</th>
      <th>center id</th>
      <th>EMAIL ID</th>
      <th>DATE OF vaccination</th>
      
      <th>Delete</th>
    </tr>

   <?php
   require('db.php');
  // $host = "localhost";
  //    $user = "root";
   //   $password = '';
     // $db_name = "atozcovidservices";
     // $con = mysqli_connect($host, $user, $password, $db_name);
     $sql="SELECT * FROM vaccinationregistrations";
     $res=mysqli_query($con,$sql);

      $count = mysqli_num_rows($res);
      if($count!=0)
      {
while ($a=mysqli_fetch_assoc($res)) {

  ?>
<tr>
<td><?php echo $a['cname']?></td>
<td><?php echo  $a['centername']?></td>
<td><?php echo  $a['centerid']?></td>
<td><?php echo $a['email']?></td>
<td><?php echo  $a['rdate']?></td>
<td> <a href="delete_vaccine.php?sno=<?php echo $a['sno'];?>">Delete</td>
</tr>
  <?php
}

      }

      ?>
   </table>
</body>
</html>
