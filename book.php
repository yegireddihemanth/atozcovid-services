<html>
<body>   
<?php
if(isset($_POST['uname']))
{
session_start();
$e=$_SESSION['email'];
require('db.php');
// $host = "localhost";
//    $user = "root";
 //   $password = '';
   // $db_name = "atozcovidservices";
   // $con = mysqli_connect($host, $user, $password, $db_name);

$uname=$_POST['uname'];
$r=$_POST['gridRadios'];
$sel=$_POST['hospital'];
$create_datetime = date("Y-m-d H:i:s");
$p=$sel;
$gridRadios=$_POST['gridRadios'];
$res=mysqli_query($con,"SELECT * FROM hospitaldb  WHERE hid=$p");
$a=mysqli_fetch_assoc($res);

if($gridRadios=="option1")// oxygen bed..
{
    if($a['noofoxygenbeds']>0){
    
mysqli_query($con,"UPDATE hospitaldb set noofoxygenbeds=noofoxygenbeds-1 WHERE hid=$p");
  
$h=$a['hname'] ;
mysqli_query($con,"INSERT INTO bedbookings(uname,typeofbed,hname,emailid)
VALUES('$uname','ventilator','$h','$e')");

/*$to_email = "$e";
$subject = "Your recent bed  booking";
$body = "Hi, you have booked a ventilator bed in $h hospital.please admit in hospital within 2 days from the date of booking.";
$headers = "From: atozcovidservices";
mail($to_email, $subject, $body, $headers);*/
echo "<script>alert('hello you have successfully booked a ventilator bed in  $h hospital ');</script>";

header("Refresh:0; url= index.php");
    }
    else{
        echo "beds not available";
    }

}
else//Normal bed..
{
    if($a['noofbeds']>0){
mysqli_query($con,"UPDATE hospitaldb set noofbeds=noofbeds-1 WHERE hid=$p");

$res=mysqli_query($con,"SELECT * FROM hospitaldb  WHERE hid=$p");
$a=mysqli_fetch_assoc($res);
$h=$a['hname'] ;
$e=$_SESSION['email'];
mysqli_query($con,"INSERT INTO bedbookings(uname,typeofbed,hname,emailid)
VALUES('$uname','normal','$h','$e')");

$to_email = "$e";
$subject = "Your recent bed  booking";
$body = "Hi, you have booked a ventilator bed in $h hospital.please admit in hospital within 2 days from the date of booking.";
$headers = "From: atozcovidservices";
mail($to_email, $subject, $body, $headers);



echo "<script>alert('hello you have successfully booked a normal bed in  $h hospital');</script>";

header("Refresh:0; url= index.php");

    }
    else
    {
        echo " beds are not avilable";
    }
}
 }
?>
</body>
</html>

<?php /*
$to_email = "chandansusanth7@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: sender email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
*/

?>