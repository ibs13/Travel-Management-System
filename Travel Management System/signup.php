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
<title>Sign UP</title>

	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/bootstape.css">
	<link rel="stylesheet" href="css/signin.css">
	<script src="js/ajax.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="js/jQuery.js"></script>
    <script src="js/signup.js"></script>
	
    
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
        <div id="load"></div>
        <div id="box"></div>  
        <div class="bs-example" style="width: 300px;">

            <form class="form-horizontal" method="post" id="form2">
        
        <div class="form-group" >

             <h2 style=" color:#B7112A;">SIGN UP</h2><br /> <br />

             <p id="finish"></p>

            <label for="inputName" class="control-label col-xs-2" style="margin-right: 30px;">NAME:</label>
            <div class="col-xs-10" id="line">

                <input type="text" class="form-control" id="fname" placeholder="Full Name" onblur="first();">
            </div>
        </div>

        <div class="form-group">
           
            <label for="inputName" class="control-label col-xs-2" style="margin-right: 30px;">USERNAME:</label>
            <div class="col-xs-10" id="line1">
                <input type="text" class="form-control" id="username" placeholder="UserName" onblur="usname();">
                <label id="response">
                
                </label>
            </div>
        </div>

        <div class="form-group" >
            <label for="inputPassword" class="control-label col-xs-2" style="margin-right: 30px;">PASSWORD:</label>
            <div class="col-xs-10" id="line2">
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
        </div>

         <div class="form-group" >
            <label for="inputEmail" class="control-label col-xs-2" style="margin-right: 30px;">EMAIL</label>
            <div class="col-xs-10" id="line3">
                <input type="email" class="form-control" id="email" placeholder="email">
            </div>
        </div>
        <div class="form-group" id="result">
            
        </div>
        <div class="form-group">
            <div class="col-xs-10">
                <button type="button" id="submit" onclick="signUp()">SUBMIT</button>
            </div>
        </div>
    </form>
</div>
    </center>
</body>
</html>                