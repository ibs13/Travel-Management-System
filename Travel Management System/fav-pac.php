<?php 
  session_start();
  require_once('db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>FAVOURITE PACKAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstape.css">
  <script src="js/ajax.js"></script>
  <script src="js/bootstrap.js"></script>
  
  <style type="text/css">
		
		body{
			background: #373D46;
		}
		
		a{
			text-align:center; 
			text-decoration:none; 
			font-size:15px; 
			color:#FFFFFF;
			display: block;
			margin: 0 auto;
		}
		
		button{
			background:#00959F;
			padding:10px 15px; 
			border:1px solid #00959F ; 
			color:#FFFFFF;
			border-radius: 5px;
		}
		
		button:hover{
			background:#B7112A;
			border:1px solid #B7112A; 
			cursor: pointer;
		}
	</style>
</head>
<body>
  <div class="container">
  <h2 style="text-align:center; color:#e74c3c;">YOUR DESIREABLE PACKAGES</h2>
         
  <table class="table table-hover">
    <thead>
      <tr style="color:#1abc9c">
        <th><center><h5>Hotel Name</h5></center></th>
        <th><center><h5>Accomodation Cost</h5></center></th>
        <th><center><h5>Guide Cost</h5></center></th>
        <th><center><h5>Living Cost</h5></center></th>
        <th><center><h5>Member</h5></center></th>
        <th><center><h5>Total Cost</h5></center></th>
      </tr>
    </thead>
    <tbody style="color:#1abc9c">

        <?php
          $name=$_SESSION['name'];
          $que="SELECT * from favourite where uname='$name'";

          $res=mysql_query($que);

          while ($row=mysql_fetch_array($res)) {
              $n1=$row['hotelName'];
              $n2=$row['accomodation'];
              $n3=$row['guide'];
              $n4=$row['living'];
              $n5=$row['nom'];
              $n6=$row['price'];
              echo " <tr> 
                  <td> <center>$n1 </center></td>
                  <td> <center>$n2 </center></td>
                  <td> <center>$n3 </center></td>
                  <td> <center>$n4 </center></td>
                  <td> <center>$n5 </center></td>
                  <td> <center>$n6 </center></td>
                   </tr>
                   ";
          }?>
         
    
    </tbody>
  </table>
</div>
	<a href="dashboard.php">
		<button>DASHBOARD</button>
	</a>

</body>
</html>