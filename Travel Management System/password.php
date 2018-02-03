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
	<title>Change Password</title>
	
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
		
		a{
			text-align:center; 
			text-decoration:none; 
			font-size:15px; 
			color:#FFFFFF;
			display: block;
			margin: 0 auto;
			margin-top:20px;
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

	<h1 style="text-align:center; color:#e74c3c;">Change Your Password</h1>
	
	<div style="text-align:center;">
		
		<form method="post" action="password.php">
			<input type="password" name= "pass"></input>
			<input type="submit" value="Change Password"></input>

		</form>
	
	</div>

<?php
	
	require_once('db.php');
		
			if(isset($_POST['pass']))
			{	

				$user=$_SESSION['name'];

				$pass=$_POST['pass'];	

				$query2="UPDATE user
						SET password='$pass'
						WHERE uname='$user' ";

				$rs=mysql_query($query2);
				if($rs)
				{
					echo "<p style='text-align:center; color:#1abc9c;'>password change</p>";
				}
				else 
					echo "error".mysql_error();
			}


?>
		
		<a href="dashboard.php">
			<button>DASHBOARD</button>
		</a>
		
</body>
</html>