<html>
	<title>Tour Me</title>
	<body>
		<center>
			<form method = "post">
			<input type="submit" name="Packages" value="Select Package" />
			<input type="submit" name="Recommended" value="Recommended"/>
			<input type="submit" name="pplChoice" value="People's Choice"/>
			<input type="submit" name="info" value="Package Details"/>
			<br/><br/>
			</form>
		<center/>
	
	</body>
	
	<?php
	 		if (isset($_REQUEST['Packages']))
			 {
	 			header('Location:selectpackage.php');
			 }
			 if (isset($_REQUEST['profile']))
			 {
	 			header('Location:page1.php');
			 }
			 if (isset($_REQUEST['logout']))
			 {
	 			header('Location:index.php');
			 }
		?>	
	
</html>