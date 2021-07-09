<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit doctors</title>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  <body>

<h1>Delete doctor</h1>
   <table class="table table-hover" border="2">
    <tr>
      <th>Username</th>
      <th>specilization</th>
      <th>Fees</th>
      <th>EMAIL ID</th>
      
      <th>Delete</th>
    </tr>

   <?php
   require('db.php');
   // $host = "localhost";
   //    $user = "root";
    //   $password = '';
      // $db_name = "atozcovidservices";
      // $con = mysqli_connect($host, $user, $password, $db_name);
      $sql="SELECT * FROM doctb";
     $res=mysqli_query($con,$sql);

      $count = mysqli_num_rows($res);
      if($count!=0)
      {
while ($a=mysqli_fetch_assoc($res)) {

  ?>
<tr>
<td><?php echo $a['username']; ?></td>
<td><?php echo $a['spec']?></td>
<td><?php  echo $a['docFees']?></td>
<td><?php echo $a['email']?></td>

<td> <a href="delete_doctor.php?sno= <?php echo $a['sno'];?>">Delete</td>
</tr>
  <?php
}

      }

      ?>
   </table>
   <h1>Add new doctors</h1>
   <form method="POST" action="add_doctor.php">
  <div class="form-group">
    <label for="formGroupExampleInput">Username</label>
    <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">password</label>
    <input type="text" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
 
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">specilization</label>
    <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
 
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">Fees</label>
    <input type="text" name="spec" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
 
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">Emailid</label>
    <input type="text" name= "docFees" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
 
  </div>
  <input type="submit" value="Submit">

</form>
</body>
</html>
