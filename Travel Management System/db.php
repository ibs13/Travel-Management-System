<?php

	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die("database connection error");
	}	
	
	$db=mysql_select_db("travel",$con);
	if(!$db)
	{
		die("database error ");
	}


?>