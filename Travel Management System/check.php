<?php 
	require_once('db.php');
	session_start();

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$uname=$_POST['username'];
		$pass=$_POST['password'];

		$query="SELECT count(*) FROM user WHERE uname='$uname' AND password='$pass'";
		$result=mysql_query($query) or die(mysql_error());

		$resultSet = mysql_result($result, 0);

		

		if($resultSet == 1)
		{
			echo 'valid';
			// header("Location: home.php");
			//here user successfully login.
			$_SESSION['name']=$uname;
		}
		else
			echo 'invalid';

	}

?>