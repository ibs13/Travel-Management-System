
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
	<title>Tourism</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/bootstape.css">
	  <script src="js/ajax.js"></script>
	  <script src="js/bootstrap.js"></script>
	  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	
	
	<div id="slider">
	
		<p>LET US <br />SHOW YOU <br /> <b>BANGLADESH</b></p>
		<img src="img/slider.jpg" id="sliderImage">
	
	</div>

	<div class="something">
	
	<div class="container">
  <h2>Get Inspired</h2>

  <div class="row">
  <div class="col-md-4">
      <a href="coxs.php" class="thumbnail">
 		<h3>Enjoy Cycling</h3>
        <img src="img/cycling.jpg" alt="seafoodimg" style="width:500px;height:200px">
         <p>To get some cycling experience you must vist cox's bazar and Saint Martin's Island</p>
      </a>
    </div>
    <div class="col-md-4">
      <a href="sylhet.php" class="thumbnail">
      <h3>Walking and Hiking</h3>   
        <img src="img/walk.jpg" alt="walkimg" style="width:500px;height:200px">
         <p> For Amazing Walking and Hiking experiece you may vist the hill tracks of Sylhet and Bandarban</p> 
      </a>
    </div>
    <div class="col-md-4">
      <a href="bandarban.php" class="thumbnail">
       <h3>Experience Boating</h3>
        <img src="img/bandarban.jpg" alt="boatingimg" style="width:500px;height:200px">
        <p>You can find some beautiful Lakes in Bandarban and Sylhet Where You Can Experience Boating</p>
      </a>
    </div>
    <div class="col-md-4">
      <a href="kuakata.php" class="thumbnail">
 		<h3>Taste Sea Foods</h3>
        <img src="img/seafood.jpg" alt="seafoodimg" style="width:500px;height:200px">
        <p>Some Delicious Sea Foods That You Don't Want To Miss. You may vist To Kuakata and Coz's Bazar</p>
      </a>
    </div>
    <div class="col-md-4">
      <a href="sundarban.php" class="thumbnail">
 		<h3>Hunting Adventure</h3>
        
        <img src="img/hunting.jpg" alt="hunting" style="width:500px;height:200px">
        <p>For some Hunting Adventure you should not miss the Amazing Sundarbans</p>
      </a>
    </div>
    <div class="col-md-4">
      <a href="stmartin.php" class="thumbnail">
 		<h3>Explore Bay of Bangal</h3>
        <img src="img/saintmartin3.jpg" alt="bay of bangal" style="width:500px;height:200px">
        <p>You can explore the beauty of Bay of Bangal only if you pay a visit to Saint Martin's Island</p>
      </a>
    </div>

	
<h2>Feedback</h2>

    				   <div class="col-md-7" id="sim">
					     	<a href="opinion.php" class="btn btn-primary" role="button">Say Something About Us</a>
							
					 		<div class="container">
								  <h3 style="color:#e74c3c;">What People Thinks About Us ?</h3> 

			<?php
      require_once('db.php');

			$query = "SELECT name, email, opinion FROM user WHERE opinion IS NOT NULL ";
			$result =mysql_query($query);

			if ($result> 0) {
			     echo "<table><tr><th>Name</th><th>Opinion</th></tr>";
			     // output data of each row
			     while($row=mysql_fetch_array($result)) {
			         echo "<tr><td>" . $row["name"]. " " .'→'. "</td><td>" .'comments as '. " " .'→'. "" .' “ '. " " . $row["opinion"]. "" .'”'. "</td></tr>";
			     }
			    // echo "</table>";
			} else {
			     echo "0 results";
			}


?> 


					<!--       <div class="col-md-5">
						     
						      <p>Quick Links</p>

								<a href="coxs.php" style="font-size: 40px">Cox's Bazar</a>
								<a href="sylhet.php" style="font-size: 55px">Sylhet</a>
								<a href="kuakata.php" style="font-size: 30px">Kuakata</a>
								<a href="sundarban.php" style="font-size: 30px">Hiron</a>
								<a href="stmartin.php" style="font-size: 40px">St. Martin</a>
								<a href="sundarban.php" style="font-size: 55px">Sundarban</a>
								<a href="coxs.php" style="font-size: 40px">Laboni</a>
								<a href="sylhet.php" style="font-size: 40px">Lalakhal</a>
								<a href="bandarban.php" style="font-size: 55px">Boga Lake</a>

						    </div>
					-->

  </div>
</div>

</div>
</div>
</div>

</body>
</html>