<?php
	session_start();
    if(!isset($_SESSION['name']))
    {
        header("location:signIn.php");
    }
    require_once('nav2.php');
?>

<?php

	require_once('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
		<script type="text/javascript" src="js/jQuery.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" href="css/bootstape.css">
	<script src="js/ajax.js"></script>
	<script src="js/bootstrap.js"></script>

	<script type="text/javascript" src="js/package2.js"></script>
	<link rel="stylesheet" type="text/css" href="css/packge.css">
</head>
<body>
<center>
<div class="sab">
<div id="finish">
<?php

	if(!isset($_POST['acc']))
	{
?>
	<div id="response3" class="div1">
		
		<h1 style="text-align:center;padding-top:25px;margin-bottom:25px;color:red;display:block;">Select Suitable Package</h1>
		
		<select style="color:#e74c3c;" id="destination" onchange="dest(this.value);">
		
		<option style="color:#1abc9c;" value="">-Select Destination-</option>	
		<?php
		
			$query="SELECT destination from destination";
			$result=mysql_query($query);

			while ($row=mysql_fetch_array($result)) { ?>

			<option style="color:#1abc9c;"><?php echo $row['destination']; ?></option> 
				
		
		<?php }}?>

		</select>
	</div>

	<div id="response">
		
		<?php

			if(isset($_POST['destination']))
			{
				$place=$_POST['destination'];
				$query2="SELECT hotel FROM accomodation WHERE place='$place'";
				$result2=mysql_query($query2);
		?>

		<h4 style="color:#1abc9c;">SELECT YOUR DESIREABLE HOTEL</h4>
		<select style="color:#e74c3c;" id="hotel" onchange="hotel(this.value)"; >
			<option style="color:#1abc9c;" value="">-Select Hotel-</option>

			<?php while ($row2=mysql_fetch_array($result2)) { ?>
			<option style="color:#1abc9c;"><?php echo $row2['hotel'];?></option>

			<?php } ?>

		</select>

		</div>

		
	<div id="response2">
		
		<?php

				$query3="SELECT package FROM package";
				$result3=mysql_query($query3);
		?>
		<h4 style="color:#1abc9c;;">SELECT YOUR PACKAGE</h4>
		<select style="color:#e74c3c;" id="package" onchange="package(this.value);">
			<option style="color:#1abc9c;" value="">-Select Package-</option>
			<?php while($row3=mysql_fetch_array($result3)){?>

			<option style="color:#1abc9c;"><?php echo $row3['package']; ?></option>

			<?php } ?>
		</select>

		<h4 style="color:#1abc9c;">HOW MANY MEMBERS</h4>
	<input type="text"  id="member" onkeyup="showHint(this.value)"></input>

	<button id="Get"  class="btn btn-primary" onclick="clickbtn() ;" >SHOW TOTAL COST</button>


</div>
	
	<?php } ?>



</div>

<div id="final">
<?php if(isset($_POST['acc'])) 
{
	$acc=$_POST['acc'];
$hotel=$_POST['hotel'];
$pack=$_POST['package'];
$member=$_POST['member'];


$query="SELECT price,hotel FROM accomodation WHERE hotel='$hotel'";
$res=mysql_query($query);

while ($row=mysql_fetch_array($res)) {
	
	$priceHotel= $row['price'];
	$hotelName=$row['hotel'];
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
<?php 
	$name=$_SESSION['name'];
?>
<center><h1><?php "WELCOME $name"?> </h1> 	
	<div class="container" style="width: 500px;">

	     
  <table class="table table-hover">
    <thead>
      <tr>
        <th><h2>DESCRIPTION</h2></th>
        <th><h2>PRICE</h2></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>ACCOMODATION</td>
        <td><?php echo $priceHotel; ?></td>
       
      </tr>
      <tr>
       	<td>GUIDE</td>
        <td><?php echo $priceGuide; ?></td>
       
      </tr>
      <tr>
          <td>LIVING DAYS</td>
        <td><?php echo $priceDay;?></td>
       
      </tr>
      <tr>
         <td>NUMBER OF MEMBER</td>
        <td><?php echo $member; ?></td>
       
      </tr>
      <tr>
         <td><h2>TOTAL COST</h2></td>
        <td><h2><?php echo $totalPrice; ?></h2></td>
       
      </tr>
    </tbody>
  </table>
  <?php
  

  $_SESSION['hotel']=$priceHotel;
  $_SESSION['guide']=$priceGuide;
  $_SESSION['member']=$member;
  $_SESSION['day']=$priceDay;
  $_SESSION['total']=$totalPrice;
  $_SESSION['hotelName']=$hotelName;
  

?>

  <form method="post" action="insert.php">

  	<input type="submit" value="ADD TO FAVOURITE"  class="btn btn-primary"></input>
  </form>
  </center>
</div>
</div>
<?php }?>
</div>
</center>
</body>
</html>