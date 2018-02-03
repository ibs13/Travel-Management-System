<!DOCTYPE html>
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
	
<html>
<head>
	<title>Find Your Route</title>
	<link rel="stylesheet" href="css/bootstape.css">
	<script src="js/ajax.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/route.css">

</head>
<body>

	<h1>Find Your Route</h1>

<div class="place">
	<h2>Dhaka To Cox's bazar</h2>
	<img src="img/bus.png" alt="bus" align="center" height="200" width="300">
	<p>Type: By Road</p>
	<p>Duration: Aprox. 8 Hours</p><br/>

	<a href="map/dhktocoxroad.php" target="_blank" class="btn btn-primary" role="button">Find Route</a>
</div>

<div class="place">
	<h2>Dhaka To Cox's bazar</h2>
	<img src="img/air.jpg" alt="air" align="center" height="200" width="300">
	<p>Type: By Air</p>
	<p>Duration: Aprox. Half An Hour</p><br/>
	<a href="map/dhktocox.php" target="_blank" class="btn btn-primary" role="button">Find Route</a>
</div>

<div class="place">
	<h2>Dhaka To Sundarban</h2>
	<img src="img/bus4.jpg" alt="air" align="center" height="200" width="300">
	<p>Type: By Road</p>
	<p>Duration: Aprox. 8 Hours</p><br/>
	<a href="map/sundarban.html" target="_blank" class="btn btn-primary" role="button">Find Route</a>
</div>

<div class="place">
	<h2>Dhaka To Sylhet</h2>
	<img src="img/bus2.jpg" alt="air" align="center" height="200" width="300">
	<p>Type: By Road</p>
	<p>Duration: Aprox. 6 Hours</p><br/>
	<a href="map/sylhetroad.html" target="_blank" class="btn btn-primary" role="button">Find Route</a>
</div>

<div class="place">
	<h2>Dhaka To Sylhet</h2>
	<img src="img/air2.jpg" alt="air" align="center" height="200" width="300">
	<p>Type: By Air</p>
	<p>Duration: Aprox. Half An Hour</p><br/>
	<a href="map/sylhetair.html" target="_blank" class="btn btn-primary" role="button">Find Route</a>
</div>

<div class="place">
	<h2>Dhaka To Bandarban</h2>
	<img src="img/bus3.jpg" alt="air" align="center" height="200" width="300">
	<p>Type: By Road</p>
	<p>Duration: Aprox. 10 Hours</p><br/>
	<a href="map/bandarban.html" target="_blank" class="btn btn-primary" role="button">Find Route</a>
</div>
<div class="place">
	<h2>Dhaka To St. Martin's</h2>
	<img src="img/stbus.jpg" alt="air" align="center" height="200" width="300">
	<p>Type: By Road</p>
	<p>Duration: Aprox. 14 Hours</p>
	<label>Note: First Dhaka To Teknaf then to St. Martin By Ship. </label>
	<a href="map/stmartin.html" target="_blank" class="btn btn-primary" role="button">Find Route</a>
</div>
<div class="place">
	<h2>Dhaka Kuakata</h2>
	<img src="img/launch.jpg" alt="air" align="center" height="200" width="300">
	<p>Type: By Launch</p>
	<p>Duration: Aprox. 10 Hours</p>
	<label>Note: First Dhaka To Barisal then to Kuakata By Bus.</label>
	<a href="map/kuakatalaunch.html" target="_blank" class="btn btn-primary" role="button">Find Route</a>
</div>
<div class="place">
	<h2>Dhaka To Kuakata</h2>
	<img src="img/bus5.jpg" alt="air" align="center" height="200" width="300">
	<p>Type: By Road</p>
	<p>Duration: Aprox. 8 Hours</p>
	<label>Note: First Dhaka To Barisal then to Kuakata By Bus.</label>
	<a href="map/kuakataroad.html" target="_blank" class="btn btn-primary" role="button">Find Route</a>
</div>
</body>
</html>