<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit centers</title>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  <body>

<h1>Delete center</h1>
   <table class="table table-hover" border="2">
    <tr>
      <th>center name</th>
      <th>no of vaccine</th>
      <th>caddress</th>     
      <th>Delete</th>
    </tr>

   <?php
     require('db.php');
     // $host = "localhost";
     //    $user = "root";
      //   $password = '';
        // $db_name = "atozcovidservices";
        // $con = mysqli_connect($host, $user, $password, $db_name);
      $sql="SELECT * FROM vaccinationcenters";
     $res=mysqli_query($con,$sql);

      $count = mysqli_num_rows($res);
      if($count!=0)
      {
while ($a=mysqli_fetch_assoc($res)) {

  ?>
<tr>
<td><?php echo $a['cname']; ?></td>
<td><?php echo $a['noofvaccine']?></td>
<td><?php  echo $a['caddress']?></td>


<td> <a href="delete_center.php?id= <?php echo $a['id'];?>">Delete</td>
</tr>
  <?php
}

      }

      ?>
   </table>
   <h1>Add new centers</h1>
   <form  method="POST" action="add_center.php">
  <div class="form-group" >
    <label for="formGroupExampleInput">center name</label>
    <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Example input" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">no of vaccine</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="noof" placeholder="Another input" required>
 
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">caddress</label>
    <input type="text" name="add" class="form-control" id="formGroupExampleInput2" placeholder="Another input" required>
 
  </div>
  
  <input type="submit" value="Submit">

</form>
  
</body>
</html>
