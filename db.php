<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
 //   $con = mysqli_connect("localhost","root","","atozcovidservices");
    // Check connection
    $con=mysqli_connect('remotemysql.com','AJtedatBu3','ayYeXSJSOx','AJtedatBu3');
    if (mysqli_connect_errno()){
        #neekendu ra
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
