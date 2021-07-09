<html>
<head>
<title>bedbookings</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<style>

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

</style>  
</head>
<body>
<?php
session_start();
require('db.php');
// $host = "localhost";
//    $user = "root";
 //   $password = '';
   // $db_name = "atozcovidservices";
   // $con = mysqli_connect($host, $user, $password, $db_name);
$con = mysqli_connect($host, $user, $password, $db_name);
$e=$_SESSION['email'];
$result=mysqli_query($con,"SELECT * from bedbookings where emailid='$e'");
$a=mysqli_fetch_assoc($result);
$row=mysqli_num_rows($result);

if($row>=1)
{
      ?>
  <body>
      <div class="header">
        <a href="#default" class="logo">  My bedbookings</a>
        <div class="header-right">
          <a class="active" href="index.php">Home</a>
          <a href="cancelbed.php">cancel bed</a>
          
        </div>
      </div>
  </body>
  <?php
        echo "       you have booked a bed in  ". $a['hname']."  hospital and type of bed is  ".$a['typeofbed']."";
      ?>

   <?php   /*  echo "click below button to cancel";
        
        <button type="submit" name="submit" placeholder="cancel" id="mysub">cancel</button>
        <script type="text/javascript">
        document.getElementById("mysub").onclick=myfun;
           function myfun() {
                document.write("you have successfully cancelled your bed");
            
            <?php
             $hn=$a['hname'];
        
                mysqli_query($con,"DELETE from bedbookings where emailid='$e'");
                
                if ($a['typeofbed']=="ventilator")
                {
                mysqli_query($con,"UPDATE hospitaldb set noofoxygenbeds=noofoxygenbeds+1 WHERE hname='$hn'");
                }
                else{
                        mysqli_query($con,"UPDATE hospitaldb set noofbeds=noofbeds+1 WHERE hname='$hn'");
                }
             */?>
<?php
}
else{
      // echo" <script>alert('you dont have any bookings');</script>"; 
      
    echo("<script>alert('you dont have any bookings');
    window.location.href = 'index.php';</script>"); 
      //header("Refresh:0;url: index.php");

}

?>

</html>