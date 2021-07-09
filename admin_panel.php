<html>
<head>
<title>Admin panel</title>
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
<?php
session_start();
if (isset($_SESSION['email'])) {
  ?>
 <body>
      <div class="header">
        <a href="#default" class="logo">Admin panel</a>
        <div class="header-right">
          <a class="active" href="">Home</a>
          <a href="admin_vaccines.php">vaccination Registrations</a>
          <a href="admin_bookings.php">Bed Bookings</a>
          <a href="admin_appoint.php">Doctor Appointments</a>
          <a href="edit_doctors.php">Edit Doctors</a>
          <a href="edit_centers.php">Edit centers</a>
          <a href="edit_hospitals.php">Edit Hospitals</a>
          <a href="logout.php">logout</a>
          
          
        </div>
      </div>
  </body>
 <?php
}
else{
  echo("please login");
}
?>


</html>