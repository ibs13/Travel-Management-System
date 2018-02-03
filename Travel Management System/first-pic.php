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
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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
	<h1 style="text-align:center; color:#e74c3c;">Upload a file here</h1>
	<h3 style="text-align:center; color:#1abc9c"><?php echo "how many picture you want to uplaod??"; ?></h3>

	<form style="text-align:center;" action="second.php" method="POST">
		<input type="text" name="val"></input>
		<input id="sub" type="submit" value="Confirm"></input>
	</form>

</body>
</html>