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
	<title>Set Profile Picture</title>
	
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
<center>
	<h1 style="text-align:center; color:#e74c3c;">Make Your Profile Beautiful</h1>

	<form style="color:#1abc9c" action="propic.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="myfile"></input><br /><br />
	<input type="submit" value="Change Profile Picture"></input>
	</form>

</center>

</body>
</html>