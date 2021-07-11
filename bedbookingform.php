<?php
session_start();
$x=$_SESSION['email'];
if(isset($x))
{?>

<html>
     <title>bedbookings</title>

  </html>
<?php

$e=$_SESSION['email'];
require('db.php');
// $host = "localhost";
//    $user = "root";
 //   $password = '';
   // $db_name = "atozcovidservices";
   // $con = mysqli_connect($host, $user, $password, $db_name);
  $sql=mysqli_query($con,"SELECT emailid from bedbookings where emailid='$e'");
   $count=mysqli_num_rows($sql);
   if($count>=1)
   {
     
      echo" <script>alert('you already have bookings');window.location.href = 'index.php';</script>"; 
    
   }
     else{
       ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
 
    <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="icon">
    <meta charset="utf-8">
    <title>Bedbooking</title>
   <link rel="stylesheet" href=" "/>
  </head>
  <style>
   input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 10px solid #ccc;
  border-radius: 40px;
  box-sizing: border-box;
}
input[class=form-check-input]
{
  width: 100%;
  padding: 12px 20px; <!-- 12 20  8px 2px-->
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
}
button[type=submit] {
  width: 100%;
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
  border-radius: 30px;
  background-color: #3fbbc0 ;
  padding: 20px;
}
 
 h1{
  font-size: 35px;
   
  text-align: center;
}
 h2{
  font-size: 25px;
   
  text-align: center;
}
 }
  </style>
  
<body id="b1">
  <h1> BOOK A BED <H1>
    <H2> You can book a bed at your nearby hospital<h2>
 <form id="form" action = "book.php" method = "POST" >
   
       <div class="form-grouprow">
         <label>Patient Name</label><br>
           <input type="text" class="form-control" placeholder="Name" name="uname" required  >
       </div>
 
  <!--<div class="form-grouprow">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control"  placeholder="Email-id" name="email">
    </div>
  </div>
-->
<br>
  <div class="form-group" >
    
    <div class="row" >
     
      <legend class="col-form-label col-sm-2 pt-0"><b>Type of bed</b></legend> 
      <div class="col-sm-10" >
        <div class="form-check" >
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Ventilator Bed
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Normal Bed
          </label>
        </div>
</div>
      </div>
    </div>
  </div>
  <br>
  <div>
    <h>Choose a Hospital <h>
    <select class="" name="hospital">
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

while ($a=mysqli_fetch_assoc($res)) {
  echo '<option value=" '.$a['hid'].' " class="option">'.$a['hname'].'</option>';

}

 ?>
 </select>
</div>
<br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" value="save" name="save">Book Now</button>
    </div>
  </div>
</form>
  </body>
</html>

<?php
     }

     ?>
     <?php
      }
    
     else
     {
      header("location: login.php");
     }
     ?>
