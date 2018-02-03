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
	
			
			for($i = 0; $i < count($temp); $i++){

				move_uploaded_file($temp[$i], "uploads/".$name[$i]);

				$filePath[$i]="uploads/".$name[$i];

				
			
				
				$user=$_SESSION['name'];	


				$query="INSERT INTO picture (name,fpath,type,user) VALUES ('$name[$i]','$filePath[$i]','$type[$i]','$user')";

				$rs=mysql_query($query);

				
				if($rs)
				{
					echo "<br />upload complete";	
					header("location:image.php");
				}
				else
					echo "upload not complete ". mysql_error();

				
			}




?>