
	<?php
	session_start();
    if(!isset($_SESSION['name']))
    {
        require_once('nav.php');
    }
    elseif (isset($_SESSION['name'])) {
    	
    	require_once('nav2.php');
    }

?>
<!DOCTYPE html>

<html>
<head>
	<title>Contact</title>
		<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/bootstape.css">
	  <script src="js/ajax.js"></script>
	  <script src="js/bootstrap.js"></script>
	  <link rel="stylesheet" type="text/css" href="css/index.css">
	  
	  <style type="text/css">
	  
			body{
				background: #373D46;
			}
	  
	  </style>

</head>
<body>


</center>


	<div class="container">
  <h2  style="color: green; margin-top: 60px;">MAKE WITH LOVE</h2>

  <div class="row">
  <div class="col-md-3">
      
    </div>


<div class="col-md-6">
      <a href="https://www.facebook.com/ibs12" target="_" class="thumbnail">
 		<h3>Ibrahim Sabbir</h3>
        <img src="img/ibs.jpg" alt="Ibrahim Sabbir Picture" style="width:500px;height:200px">
        
      </a>
    </div>

    <div class="col-md-3">
      
    </div>

</body>
</html>