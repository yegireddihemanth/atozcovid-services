<?php
session_start();

if(isset($_SESSION['email']))
{?>
<?php
$e=$_SESSION['email'];
require('db.php');
// $host = "localhost";
//    $user = "root";
 //   $password = '';
   // $db_name = "atozcovidservices";
   // $con = mysqli_connect($host, $user, $password, $db_name);
 // $con = mysqli_connect($host, $user, $password, $db_name);
   $result=mysqli_query($con,"SELECT username from  users where email='$e'");
   $a=mysqli_fetch_assoc($result);
   ?>
   <h2><center> <?php echo  nl2br("<p align='center'> <font color= #3fbbc0 size='40pt' >HELLO!\n". $a['username']."</font></p>"); ?></center> </h2>
 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   <meta charset="utf-8">
    <title>appointment booking</title>
      <link rel="stylesheet" href=" "/>

    <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="icon">
 
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
input[name=spec]
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 40px;
  box-sizing: border-box;
}
input[type=date]
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 40px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: dodgerblue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: 20px;
  border-radius: 40px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: blue;
}

div {
  border-radius: 25px;
  background-color: #3fbbc0 ;
  padding: 20px;
}
 
 h3{
  font-size: 25px;
  color: deepskyblue;
  text-align: center;
}
 h2{
  font-size: 15px;
  color: #3fbbc0;
   
  border: 10px solid lightblue ;
  border-radius: 20px;
  box-sizing: border-box;
  text-align: center;
}
</style>
 </head>
  <body id="b1">
 
  <h3>Book an online appointment with concerned doctor</h3>
 
<br>
 <form id="form" action = "mappo.php" method = "POST" >
       <div class="form-grouprow">
         <label >NAME</label><br>
           <input type="text" class="form-control" placeholder="Name" name="uname" required>
       </div>
       <br>
   
       <div class="col-md-4">
            <label for="spec">Specialization:</label>
          </div>
          <div class="col-md-8">
            <select name="spec" class="form-control" id="spec">
            <option value="" disabled selected>Select Specialization</option>
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
 
while ($a=mysqli_fetch_assoc($res)) {
    
  echo '<option value=" '.$a['spec'].' " class="option">'.$a['spec'].'</option>';

}
?>              
</select>
</div>
<br>
<div class="col-md-4">
            <label for="spec">Doctors:</label>
          </div>
          <div class="col-md-8">
    
 <select class="" name="doctor">
 <option value="" disabled selected>Select doctor</option>
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
 
while ($a=mysqli_fetch_assoc($res)) {
    
  echo '<option value=" '.$a['username'].' " class="option">'.$a['username'].'</option>';

}
?>
</select>
</div>
<br>
 

                  <div class="col-md-4"><label>Appointment Date</label></div>
                  <div class="col-md-8"><input type="date" class="form-control datepicker" name="appdate"></div><br> 

                  <div class="col-md-4"><label>Appointment Time</label></div>
                  <div class="col-md-8">
                    <!-- <input type="time" class="form-control" name="apptime"> -->
                    <select name="apptime" class="form-control" id="apptime" required="required">
                      <option value="" disabled selected>Select Time</option>
                      <option value="08:00:00">8:00 AM</option>
                      <option value="10:00:00">10:00 AM</option>
                      <option value="12:00:00">12:00 PM</option>
                      <option value="14:00:00">2:00 PM</option>
                      <option value="16:00:00">4:00 PM</option>
                    </select>

                  </div><br>

                  <div class="col-md-4">
                    <input type="submit" name="app-submit" value="MAKE APPOINTMENT" class="btn btn-primary" id="inputbtn">
                  </div>
                   
              </form>
            </div>
          </div>
        </div><br>
</div>
</form>
</html>
<?php
}
else
{
  header("location: login.php");

}
?>
