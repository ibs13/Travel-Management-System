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
	<title> Destination</title>

	<link rel="stylesheet" href="css/bootstape.css">
	<script src="js/ajax.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/destination.css">

</head>
<body>
<div class="all">
	<div class="place col-sm-6">
		

		<h1 >Cox's Bazar</h1>
			<h3><b>Chittagong , Bangladesh.</b></h3>
			<img src="img/cox.jpg" alt="cox's bazar" >
				<p>Cox's Bazar is a town, a fishing port and district headquarters in Bangladesh. The beach in Cox's Bazar is an unbroken 125 km sandy sea beach with a gentle slope, one of the world's longest.<br/><br/> It is located 150 km south of the industrial port Chittagong. Cox's Bazar is also known by the name Panowa, whose literal translation means "yellow flower." Its other old name was "Palongkee".
				</p>
					
			<a href="coxs.php" class="btn btn-primary" role="button">Details</a>
				
	</div>


	<div class="place col-sm-6">

		<h1 >Sundarban</h1>
		  <h3><b>Khulna , Bangladesh.</b></h3>
		<img src="img/sundarban.jpg"  alt="cox's bazar" >
			<p>The Sundarbans is a natural region comprising southern Bangladesh and a small part in Eastern India. It is the largest single block of tidal halophytic mangrove forest in the world.The Sundarbans covers approximately 10,000 square kilometres (3,900 sq mi) most of which is in Bangladesh with the remainder in India.<br/> The Sundarbans is a UNESCO World Heritage Site.
			Sundarbans South, East and West are three protected forests in Bangladesh. </p>
			
			 <a href="sundarban.php" class="btn btn-primary" role="button">Details</a>

			
	</div>


	<div class="place col-sm-6">

		<h1>Sylhet</h1>
		<h3><b>Sylhet , Bangladesh.</b></h3>
		<img src="img/sylhet.jpg" alt="cox's bazar"  >
			<p >
				Sylhet is a major city that lies on the banks of Surma River in north-east Bangladesh. It is surrounded by tea estates, sub-tropical hills, rain forests and river valleys; the region is one of the leading tourist destinations in the country. The city has one of the highest literacy rates in the country.Many Sylhetis live abroad, particularly in London of the UK, where they form a prominent community.<br/><br/>
				Sylhet is a prominent Islamic spiritual centre and home to numerous Sufi shrines. Sylhet has a reputation as the Spiritual Capital of Bangladesh. It hosts the 14th century mausoleums of Shah Jalal and Shah Paran.</p>
				<a href="sylhet.php" class="btn btn-primary" role="button">Details</a>
	</div>

	<div class="place col-sm-6">
		<h1>Bandarban</h1>
		<h3><b>Chittagong , Bangladesh.</b></h3>
		<img src="img/bandarban.jpg"  alt="cox's bazar" >
			<p >
				Bandarban is a district in South-Eastern Bangladesh, and a part of the Chittagong Division. It is one of the three districts that make up the Chittagong Hill Tracts, the others being Rangamati District and Khagrachhari District.Bandarban is regarded as one of the most attractive travel destinations in Bangladesh.<br/><br/> Bandarban (meaning the dam of monkeys), or in Marma or Arakanese language as "Rwa-daw Mro" is also known as Arvumi or the Bohmong Circle (of the rest of the three hill districts Rangamati is the Chakma Circle, Raja Devasish Roy and Khagrachari is the Mong Circle.</p>
				<a href="bandarban.php" class="btn btn-primary" role="button">Details</a>
	</div>

	<div class="place col-sm-6">
	<h1>Kuakata</h1>
		<h3><b>Barishal , Bangladesh.</b></h3>
		<img src="img/kuakata.jpg" alt="cox's bazar" >
			<p >
				Kuakata is a town known for its panoramic sea beach. It is located in south-eastern Bangladesh, and is the number two tourist destination in the country. Kuakata beach is a sandy expanse 18 kilometres (11 mi) long and 3 kilometres (1.9 mi) wide.[3] From the beach one can have an unobstructed view of both sunrise and sunset over the Bay of Bengal.<br/><br/>In Kuaka You can visit Buddhist Temple where you can see the statue of Goutom Buddha and two wells of 200 years old. Local name of the well is Kua and Kata is a local name of digging a well; so was the name Kuakata.Fisherman village is another place where you can visit and watch the lifestyle of the Fisherman. If you are adventurous you may also go for fishing on the fishing boat if you can manage the local fishermen.
			</p>
			<a href="kuakata.php" class="btn btn-primary" role="button">Details</a>


	</div>

	<div class="place col-sm-6">
	<h1 >St. Martin's Island </h1>
		<h3><b>Teknaf , Bangladesh.</b></h3>
		<img src="img/saintmartin.jpg"  alt="cox's bazar">
			<p >
				St. Martin's Island is a small island (area only 8 km2) in the northeastern part of the Bay of Bengal, about 9 km south of the tip of the Cox's Bazar-Teknaf peninsula, and forming the southernmost part of Bangladesh. There is a small adjoining island that is separated at high tide, called Chera Dwip.<br/><br/> It is about 8 kilometres (5 miles) west of the northwest coast of Myanmar, at the mouth of the Naf River. The first settlement started just 250 years ago by some Arabian sailors who named the island 'Zajira'.<br/><br/> During British occupation the island was named St. Martin Island. During the First Anglo-Burmese War between the British and Burmese empires in 1824–1826, rival claims to the island were a major factor.
			</p>
			<a href="stmartin.php" class="btn btn-primary" role="button">Details</a>
	</div>
</div>
</body>
</html>