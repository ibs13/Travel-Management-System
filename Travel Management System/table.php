<?php
session_start();
require_once('db.php');
	
$acc=$_POST['acc'];
$hotel=$_POST['hotel'];
$pack=$_POST['package'];
$member=$_POST['member'];


$query="SELECT price FROM accomodation WHERE hotel='$hotel'";
$res=mysql_query($query);

while ($row=mysql_fetch_array($res)) {
	
	$priceHotel= $row['price'];
}



$query2="SELECT guide FROM destination WHERE destination='$acc' ";
$res2=mysql_query($query2);
while ($row2=mysql_fetch_array($res2)) {

	$priceGuide=$row2['guide'];
}

$query3="SELECT days FROM package WHERE package='$pack'";

$res3=mysql_query($query3);
while ($row3=mysql_fetch_array($res3)) {

	$priceDay=$row3['days'];
}

$totalPrice=$priceDay*$member*($priceHotel+$priceGuide);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <<link rel="stylesheet" href="css/bootstape.css">
	<script src="js/ajax.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>

</body>
</html>

  <?php $name=strtoupper($_SESSION['name']); ?>
	<center><h1><?php echo WELCOME $name ; ?>WELCOME </h1> </center>	
	<div class="container" style="width: 100px;">

	     
  <table class="table table-hover">
    <thead>
      <tr>
        <th><h2>DASHBOARD</h2></th>
      
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="image.php">SEE YOUR VISITED PLACE</a></td>
       
      </tr>
      <tr>
        <td><a href="first-pic.php">UPLOAD PICTURE </a></td>
     
      </tr>
      <tr>
          <td><a href="signIn.php">PROFILE CHNAGE</a></td>
      </tr>
      <tr>
          <td><a href="signIn.php">LOG OUT</a></td>
      </tr>
    </tbody>
  </table>
</div>

?>