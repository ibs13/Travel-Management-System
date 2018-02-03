<head>
	<title>Visited Place</title>
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

	<div class="hhh">
	
		<h1 style="text-align:center; color:#e74c3c;">Your Visited Place</h1>
	
	</div>


<?php 
	session_start();
	$name=$_SESSION['name'];
	
	require_once('db.php');

	$query="SELECT * FROM picture WHERE user='$name' ";

	$res=mysql_query($query);

	while($row=mysql_fetch_array($res))
	{
?>
	

	<p style="text-align:center;">	
		<img src="<?php echo $row['fpath'] ; ?>" height="300" width="600" >
	</p>
	<?php
	}
	?>
	
	<a href="dashboard.php">
		<button>DASHBOARD</button>
	</a>
	

