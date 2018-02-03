<?php

require_once('db.php');
$uname=$_POST['username'];


$query="SELECT count(*) from user where uname='$uname'";
$result=mysql_query($query);

$resultSet = mysql_result($result, 0);


echo $resultSet;
	
?>