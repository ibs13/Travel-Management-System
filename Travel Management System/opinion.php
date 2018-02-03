<?php

//this part is for LOGIN MUST !!!!
	session_start();
    if(!isset($_SESSION['name']))
    {
        header("location:signIn.php");
    }
// this part for nav and session
     if(!isset($_SESSION['name']))
    {
        require_once('nav.php');
    }
    elseif (isset($_SESSION['name'])) {
    	
    	require_once('nav2.php');
    }
//end here
	
	require_once('db.php');
?>

<!DOCTYPE html>

<html>
<head>
	<title>User Opinion</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/bootstape.css">
	  <script src="js/ajax.js"></script>
	  <script src="js/bootstrap.js"></script>
	  <link rel="stylesheet" type="text/css" href="css/index.css">
	  
</head>
<body>

<div class="container">
		  <h2 style="margin-top: 60px;">Say Something</h2>

		  <div class="row">
		  <div class="col-md-12">
		  <form>
		  <textarea name="cmnt"></textarea>

		   <input class="btn btn-primary" role="button" type="submit" name="submit" value="Comment" />
			</form>	
		    </div>
  </div>


  <?php
						if(isset($_REQUEST['submit']))
					{
						$usercomment=$_REQUEST['cmnt'];
						
						$uname=$_SESSION['name'];
						
						$query="update user set opinion='$usercomment'  where uname='$uname'";

						$result=mysql_query($query);
						
						if($result)
							{
								echo "successfully completed!!";
								header('Location:index.php');
								
							}
							else
						echo "something went wrong !!";
					}
				
	?>
</body>
</html>