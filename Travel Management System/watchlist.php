<?php 
  session_start();
  require_once('db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>WatchList</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstape.css">
  <script src="js/ajax.js"></script>
  <script src="js/bootstrap.js"></script>
  
  <style type="text/css">
		
		body{
			background: #373D46;
		}
		
		a{
			text-align:center; 
			text-decoration:none; 
			font-size:15px; 
			color:#FFFFFF;
			display: block;
			margin: 0 auto;
		}
		
		button{
			background:#00959F;
			padding:10px 15px; 
			border:1px solid #00959F ; 
			color:#FFFFFF;
			border-radius: 5px;
		}
		
		button:hover{
			background:#B7112A;
			border:1px solid #B7112A; 
			cursor: pointer;
		}
	</style>
  
</head>
<body>
  <div class="container">
  <h2 style="text-align:center; color:#e74c3c;">YOUR DESIREABLE PLACES</h2>
         
  <table class="table table-hover">
    <thead>
      <tr>
        <th style="color:#1abc9c"><center><h2>Destination</h2></center></th>
      </tr>
    </thead>
    <tbody>

        <?php
          $name=$_SESSION['name'];
          $que="SELECT watchlist from watchlist where username='$name'";

          $res=mysql_query($que);

          while ($row=mysql_fetch_array($res)) {
             
              $n=$row['watchlist'];
              echo " <tr> 
                  <td style='color:#1abc9c'> <center>'$n' </center></td>
                   </tr>
                   ";
          }?>
         
    
    </tbody>
  </table>
</div>
  
	<a href="dashboard.php">
		<button>DASHBOARD</button>
	</a>

</body>
</html>