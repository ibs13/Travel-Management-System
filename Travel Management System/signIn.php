<?php
session_start();
 if(!isset($_SESSION['name']))
    {
        require_once('nav.php');
    }


if(isset($_SESSION['name']))
{	
	//if a user logged in then this page will redirect to his profile page
	header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign IN</title>

	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/bootstape.css">
	<link rel="stylesheet" href="css/signin.css">
	<script src="js/ajax.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="js/jQuery.js"></script>
    <script src="js/signin.js"></script>
    
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
	/* Fix alignment issue of label on extra small devices in Bootstrap 3.2 */
    .form-horizontal .control-label{
        padding-top: 7px;
    }
</style>
</head>
<body>
<center>
<div class="bs-example" style="width:500px; background:transparent;">
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <h1 style=" color:#B7112A;">LOGIN</h1>
            <label id="result"></label><br /> <br />


            <label for="inputEmail" class="control-label col-xs-2" style="margin-right:50px; "> USERNAME: </label>
            <div class="col-xs-10">
                <input type="text" class="form-control" id="uname" placeholder="UserName" onblur="usname() ;">
                <label id="response"></label>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2"style="margin-right:50px; ">PASSWORD: </label>
            <div class="col-xs-10">
                <input type="password" class="form-control" id="pass" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            
        </div>
        <div class="form-group">

            <div class="col-xs-10">
                <button type="button"  id="submit" onclick="signin();">LOGIN</button>
            </div>
        </div>
    </form>
	
			 
            
        </div>
    </form>
    

</div>
</center>

<div id="finish">
		
		<h4 style="color:#B7112A; text-align:center" >Don't Have Any Acoount <a style="color:#f1c40f";  href="signup.php">SIGN UP</a></h4>
	
    </div>
</body>
</html>                