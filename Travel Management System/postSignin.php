<?php 
	require_once('db.php');

	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['fname']))
	{

		$username=mysql_real_escape_string($_POST['username']);
		$password=mysql_real_escape_string($_POST['password']);
		$email=$_POST['email'];
        $name=$_POST['fname'];

		$query="INSERT INTO user (name,email, uname, password) VALUES('$name','$email','$username','$password')";
		$result=mysql_query($query);
		if($result)
		{
			echo "<h2> Your Registration is Succesfully Complete</h2>";
			header("location:signIn.php");
		}		
		else
			echo "<h1>Please Give Username unique</h1>";
	}
	
	
?>