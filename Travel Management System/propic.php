	<?php
	session_start();
    if(!isset($_SESSION['name']))
    {
        header("location:signIn.php");
    }

	?>
<?php
	
	require_once('db.php');
	//properties of the file
	$name= $_FILES['myfile']['name'];
	$type= $_FILES['myfile']['type'];
	$size=$_FILES['myfile']['size'];
	$temp=$_FILES['myfile']['tmp_name'];
	$error=$_FILES['myfile']['error'];
	
		

				move_uploaded_file($temp, "uploads/".$name);

				$filePath="uploads/".$name;

				
			
			
				$user=$_SESSION['name'];	


				$query="UPDATE user
						SET pic='$filePath'
						WHERE uname='$user' ";

				$rs=mysql_query($query);

				
				if($rs)
				{
					echo "<br />upload complete";	
					header("location:dashboard.php");
				}
				else
					echo "upload not complete ". mysql_error();




?>