<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Hospitals</title>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  <body>

<h1>Delete Hospitals</h1>
   <table class="table table-hover" border="2">
    <tr>
      <th>Hospital name</th>
      <th>phone no</th>
      <th>address</th>
      <th>no of beds</th>
      <th>No of oxy beds</th>
         
      <th>Delete</th>
    </tr>

   <?php
    require('db.php');
    // $host = "localhost";
    //    $user = "root";
     //   $password = '';
       // $db_name = "atozcovidservices";
       // $con = mysqli_connect($host, $user, $password, $db_name);
      $sql="SELECT * FROM hospitaldb";
     $res=mysqli_query($con,$sql);

      $count = mysqli_num_rows($res);
      if($count!=0)
      {
while ($a=mysqli_fetch_assoc($res)) {

  ?>
<tr>
<td><?php echo $a['hname']; ?></td>
<td><?php echo $a['telephoneno']?></td>
<td><?php  echo $a['haddress']?></td>
<td><?php echo $a['noofbeds']?></td>
<td><?php echo $a['noofoxygenbeds']?></td>

<td> <a href="delete_hospital.php?hid= <?php echo $a['hid'];?>">Delete</td>
</tr>
  <?php
}

      }

      ?>
   </table>
   <h1>Add new Hospitals</h1>
   <form method="POST" action="add_hospital.php">
  <div class="form-group">
    <label for="formGroupExampleInput">Hospital name</label>
    <input type="text" name="hname" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">phone no</label>
    <input type="text" name="pno" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
 
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">address</label>
    <input type="text" name="add" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
 
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">noofbeds</label>
    <input type="text" name="nobeds" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
 
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">noof oxy beds</label>
    <input type="text" name="oxybeds" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
 
  </div>
  <input type="submit" value="Submit">

</form>
</body>
</html>
