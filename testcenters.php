<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test center Details</title>
  </head>
  <body>
  <style>
table {
  width:100%;
}
table, th, td {
  border: 5px solid white;
  border-collapse: separate;
}
th, td {
  padding: 15px;
  text-align: center;
}
#t01 tr:nth-child(even) {
  background-color: #9ee8e ;
}
#t01 tr:nth-child(odd) {
 background-color: #9ee8e ;
}
#t01 th {
  background-color: #3fbbc0;
  color: white;
}
#t01 tr{
  background-color: WhiteSmoke;
  font-family:'Courier New'; 
  color: black;
}
.cta {
  background: #3fbbc0;
  
  text-align: center;
 
  color: #fff;
  background-size: cover;
  padding: 60px 0;
  border-radius: 1000px;
  transition: 0.5s;
  margin-top: 10px;
  border: 30px solid #fff;
}

.cta h3 {
  font-size: 40px;
  font-weight: 700;
}
.cta h1 {
  font-size: 30px;
  font-weight: 500;
  text-align: center;
}
.cta .cta-btn {
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 35px;
  border-radius: 25px;
  transition: 0.5s;
  margin-top: 10px;
  border: 2px solid #fff;
  color: #fff;
}

.cta .cta-btn:hover {
  background: #fff;
  color: #3fbbc0;
}
</style>
<section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
       
        <div class="center">
          <h3>Test center Details</h3>
          <H1>All details of the Test centers that are collaborated with us are shown below</h1>
          <p></p>
        </div>

      </div>
    </section>

 
    
   <table id="t01" >
    <tr>
      
      <th>SNO</th>
      <th>center name</th>
      <th>Address</th>
      <th>Timings</th>
    </tr>

   <?php
    require('db.php');
    // $host = "localhost";
    //    $user = "root";
     //   $password = '';
       // $db_name = "atozcovidservices";
       // $con = mysqli_connect($host, $user, $password, $db_name);
      $sql="SELECT * FROM testcenters";
     $res=mysqli_query($con,$sql);

      $count = mysqli_num_rows($res);
      if($count!=0)
      {
while ($a=mysqli_fetch_assoc($res)) {

  echo "
<tr>
<td>".$a['sno']."</td>
<td>".$a['cname']."</td>
<td>".$a['cadd']."</td>
<td>".$a['timings']."</td>

</tr>
  ";
}

      }

      ?>
   </table>
</body>
</html>
