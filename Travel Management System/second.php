	<?php
	session_start();
    if(!isset($_SESSION['name']))
    {
        header("location:signIn.php");
    }

	?>
<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD PICTURE</title>
	
	<style type="text/css">
		
		body{
			background: #373D46;
		}
		
		 input[type="submit"]{
			background:#00959F;
			padding:5px 15px; 
			border:1px solid #00959F ; 
			color:#FFFFFF;
			border-radius: 5px;
		}
		input[type="submit"]:hover{
			background:#B7112A;
			border:1px solid #B7112A; 
			cursor: pointer;
		}
		
	</style>
	
</head>
<body>

<?php 
	if(isset($_POST['val']))
		{ 

		$value=$_POST['val'];
		?>
		
		<h2 style="text-align:center; color:#e74c3c;">Choose desire file from Your PC</h2>
		
		<div style="text-align:center;">
		
		<form style="color:#1abc9c" action="upload.php" method="POST" enctype="multipart/form-data">
<?php 
	for($i=0;$i<$value;$i++)
	{
		echo '<input type="file" name="myfile[]"></input><br /><br />';
	}
		
		
?>
	

		
		<input type="submit" value="UPLOAD"></input>
	</form>
	
	</div>

	<?php } ?>
	
	
</body>
</html>