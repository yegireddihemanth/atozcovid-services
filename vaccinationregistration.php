
<?php
session_start();

if(isset($_SESSION['email']))
{?>
<html>
<body>
<style>
   input[type=text], select {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 40px;
  box-sizing: border-box;
}
input[type=date]
{
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 40px;
  box-sizing: border-box;
}
button[type=submit] {
  width: 80%;
  background-color:royalblue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: 20px;
  border-radius: 40px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: blue;
}

div {
  border-radius: 15px;
  background-color: #3fbbc0 ;
  padding: 20px;

}
 
 h1{
  
  font-size: 30px;
  background-color: powderblue;
  border-radius: 40px;
  box-sizing: border-box;
  text-align: center;
  
}
 h2{
  font-size: 30px;
  background-color: powderblue;
  border-radius: 40px;
  box-sizing: border-box;
  text-align: center;
}
</style>
  <form  method="POST">
    <h1>GET REGISTERED FOR VACCINATION<h1>
      <p1>Enter your details below<p1>
    <div>
  <label>Name</label>
  <input type="text" name="name" required>
</div>
  <br>
  <div>
    <label for="">Center</label>
    <select class="" name="center">
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

while ($a=mysqli_fetch_assoc($res)) {
  echo '<option value=" '.$a['id'].' " class="option">'.$a['cname'].'</option>';

}

 ?>
 </select>
 <br>
 <label for="">Date</label>

 <input type="date" name="dater" value="<?php echo date('Y-m-d'); ?>"></div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" value="save" name="save">Book Now</button>
    </div>
  </div>
</form>
</body>
</html>
<?php


  $e=$_SESSION['email'];
$result=mysqli_query($con,"SELECT * from vaccinationregistrations where email='$e'");
$row=mysqli_num_rows($result);

if($row>=1)
{ echo" <script>alert('you already registered for vaccination');window.location.href = 'index.php';</script>"; 
    
  
}
else{
  if (isset($_POST['name']))
   {
     
  $n=$_POST['name'];
              $e=$_SESSION['email'];
     $cid=$_POST['center'];
     $d=$_POST['dater'];
     
     require('db.php');
    // $host = "localhost";
    //    $user = "root";
     //   $password = '';
       // $db_name = "atozcovidservices";
       // $con = mysqli_connect($host, $user, $password, $db_name);
    $k=$_POST['name'];    
   $res=mysqli_query($con,"SELECT * FROM vaccinationcenters  WHERE id=$cid");
   $a=mysqli_fetch_assoc($res);
   if($a['noofvaccine']<=0)
   {
    echo("<script>alert('vaccine not available');
    window.location.href = 'index.php';</script>");  
   }
   else{
     mysqli_query($con,"UPDATE vaccinationcenters set noofvaccine=noofvaccine-1 WHERE id=$cid");
     $h=$a['cname'] ;
     mysqli_query($con,"INSERT INTO vaccinationregistrations(cname,email,centername,centerid,rdate)
             VALUES('$k','$e','$h',$cid,'$d')");
          /*   $to_email = "$e";
             $subject = "Your recent vaccination booking";
             $body = "Hi $n, you have registered for vaccination in $h center.please get vaccinated on or before $d.";
             $headers = "From: atozcovidservices";
             mail($to_email, $subject, $body, $headers);*/
      
    echo("<script>alert('you have registered for vaccination');
    window.location.href = 'index.php';</script>");     
   }
             
    }
  }
    ?>
    <?php
}
else
{
  

   header("location: login.php");


}
?>