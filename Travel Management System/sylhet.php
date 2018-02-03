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
	require_once('db.php');
?>
<html>
<head>
	<title> Sylhet</title>
	<link rel="stylesheet" href="css/bootstape.css">
	<script src="js/ajax.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/place.css">
	<h1>Visit Sylhet</h1>

				<script>
					function myFunction1() {
					    document.getElementById("lalBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>

				<script>
					function myFunction2() {
					    document.getElementById("BisBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>

				<script>
					function myFunction3() {
					    document.getElementById("MadBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>

				<script>
					function myFunction4() {
					    document.getElementById("SriBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>

				<script>
					function myFunction5() {
					    document.getElementById("HumBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>


</head>
<body>

<div class="place">

			<h2><u>Lalakhal (The blue Canal)</u></h2>
			<img src="img/lalakhal.jpg" height="200" width="auto" alt="cox's bazar" align="left">
			<img src="img/lalakhal2.jpg" height="200" width="400" alt="cox's bazar" align="right">
			<p>Lalakhal is a nice big river which is coming from India. This river is shared with India and Bangladesh. The origin of this river is in the Meghalaya state of India. This river carries huge amount of sediments and stones from the upstream to Bangladesh and local people lift those stone for business purpose.<br/>
			Journey to the Lalakhal through Shari river is really an wonderful experience. This is a remote place on the both side of the river.<br/> The river bank is not so high. Here you can watch the mountain range of Meghalaya from the boat journey. The more you forwarded to Lalakhal the water colour becomes greener. People washing their clothes and bathing in the green water are very much charming. One must be insisted to jump in the river for swimming.<br/>
			Water is green and clear which will sooth you up. The water is green all over but when you will go close to Indian boarder you will find blue water .Some area both color water means you can understand boarder. At the time of boat ride you can lots of activities by residents of both side of river.</p>
			<form method="post">
			<button name="submit1" class="btn btn-primary" role="button" id="lalBtn" onclick="myFunction1()">Add To favorite</button>
			</form>
  		<?php
						if(isset($_REQUEST['submit1']))
							{
						
								$wlist='Lalakhal, Sylhet';
								$uname=$_SESSION['name'];
							if(!isset($_SESSION['name']) && $uname==null)
							    {
							        header("location:signIn.php");
							 }
							else

						
						$query="insert into watchlist (id,username,watchlist) values(null ,'$uname','$wlist')";

						$result=mysql_query($query);
						
						if($result)
							{
								
							
							}
							else
						echo "something went wrong !!";
					}
				
		?>


	</div>

<div class="place">

			<h2><u>Bisnakandi</u></h2>
			<img src="img/bisanakandi2.jpg" height="200" width="auto" alt="cox's bazar" align="left">
			<img src="img/bisanakandi.jpg" height="200" width="400" alt="cox's bazar" align="right">
			<p>Bisnakandi is a village situated in Rustompur Union under Guainghat Upazilla. . Bisnakandi is actually a village of three thousand near this vista point.  This is where many layers of the Khasi mountain meet at a single point from both sides. Flowing from above is a high fall. Adding to its charm are dark clouds hugging the mountain in the rainy season.
			The hills in India loomed unexpectedly through the clouds like distant sentinels.<br/> And flowing underneath towards Bholaganj is a branch of the Piyain. Along the stream flowing from high up in the mountain come huge boulders that are deposited and mined in Bisnakandi.<br/> Bangladesh ended where the hills started, but the view was breathtaking.
			On a sunnier day it would have been a great place to frolic in the shallow water and play among the rocks.</p>
				
			<form method="post">
			<button name="submit2" class="btn btn-primary" role="button" id="BisBtn" onclick="myFunction2()">Add To favorite</button>
			</form>

  		<?php
						if(isset($_REQUEST['submit2']))
					{
						$wlist='Bisnakandi, Sylhet';
						$uname=$_SESSION['name'];
						
						
						
						$query=$query="insert into watchlist (id,username,watchlist) values(null ,'$uname','$wlist')";

						$result=mysql_query($query);
						
						if($result)
							{
								
							
							}
							else
						echo "something went wrong !!";
					}
				
		?>
	</div>


<div class="place">

			<h2><u>Madhabpur Lake</u></h2>
			<img src="img/madhabpur2.jpg" height="200" width="auto" alt="cox's bazar" align="left">
			<img src="img/madhabpur.jpg" height="200" width="auto" alt="cox's bazar" align="right">
			<p>Madhabpur lake is situated at Madhabpur tea estate in Kamalgonj upozilla of Moulovibazar district of Sylhet,Bangladesh.The place is just 8 km away from vanugach.Vanugachh is just 13 km away from srimongol and 24 km away from Srimangal.So,those who visit Srimongol or Moulovibazar,can easily visit the place.<br/>
			The lake is a great place at winter season cause all the migratory birds from cold countries get together in this lake and the scene becomes awesome.The lake was initially made due to the irrigation of the tea garden.The lake is sorrounded with dotted hills.<br/>
			Because the entry of the common people was restricted earlier,the infrastructure and other facility of the tourists was not upto the mark but now a days the upozilla administration is developing the infrastructure so this is possible that the destination is going to be one of the important tourist destination in the country.
			</p>

			<form method="post">
			<button name="submit3" class="btn btn-primary" role="button" id="MadBtn" onclick="myFunction3()">Add To favorite</button>
			</form>

  		<?php
						if(isset($_REQUEST['submit3']))
					{
						$wlist='Madhabpur Lake, Sylhet';
						$uname=$_SESSION['name'];
						
						
						
						$query=$query="insert into watchlist (id,username,watchlist) values(null ,'$uname','$wlist')";

						$result=mysql_query($query);
						
						if($result)
							{
								
							
							}
							else
						echo "something went wrong !!";
					}
				
		?>
	</div>

<div class="place">

			<h2><u>Srimangal City</u></h2>
			<img src="img/srimangal.jpg" height="200" width="auto" alt="cox's bazar" align="left">
			<img src="img/srimangal2.jpg" height="200" width="350" alt="cox's bazar" align="right">
			<p>If you need to get a place towards the Mother Nature, an area wherever tranquility along with quietness dominates and then Sreemangal will be the spot for a pay a visit to. Sreemangal is said to be the tea capital of Bangladesh. The gentle sloped hills here are very favorable for the tea production.<br/> Thus it is so called the land of two leaves and a bud. Famous Seven Layers Tea- Its locally called Nil-Kontho-Cha. Lawachara Rain Forest, here you can see the Largest Tea estates, Manipuri and Khasias tribal people. (Handicrafts and their living styles),</p>

			<form method="post">
			<button name="submit4" class="btn btn-primary" role="button" id="SriBtn" onclick="myFunction4()">Add To favorite</button>
			</form>

 		<?php
						if(isset($_REQUEST['submit4']))
					{
						$wlist='Srimangal City, Sylhet';
						$uname=$_SESSION['name'];
						
						
						
						$query=$query="insert into watchlist (id,username,watchlist) values(null ,'$uname','$wlist')";

						$result=mysql_query($query);
						
						if($result)
							{
								
							
							}
							else
						echo "something went wrong !!";
					}
				
		?>

	</div>

	<div class="place">

			<h2><u>HumHum Waterfall</u></h2>
			<img src="img/humhum.jpg" height="200" width="auto" alt="cox's bazar" align="left">
			<img src="img/humhum2.jpg" height="200" width="400" alt="cox's bazar" align="right">
			<p>Hamham Waterfall is one of the famous waterfall in Bangladesh .It is situated inside the Rajkandi Forest and located at Komolganj, Moulvibazar district in Sylhet, is a place of amazing beauty, You cannot  imagine how beautiful is this  waterfall is in the northeastern part of the country. 
			The beauty of this waterfall lies in its surrounding features. Anybody visiting this place can enjoy the whole route to the fall, but the final climax is in the waterfall itself.<br/><br/>
			You can enjoy various types of landscapes while walking through the Rajkhandi Reserve Forest, discovering some small hillocks. After walking about 30 minutes, you will have to get down in a natural fountain locally called chhara or nala, where you will have to walk through water. The height of this water may vary from ankle to thigh level.

			On the way to HamHam you may find people cutting bamboo in and around the fountain.<br/> Even if you don't meet them on route, you will come across the sign of bamboo extraction around the fountain. Be careful while walking through those to avoid leg injuries.

			Through the clear water you will be able to see stones at the bottom of the fountain which could be slippery. You have to be careful while walking and have a stick to support yourself.
			If you plan to see the waterfall, you should take precautionary measures.<br/> In rainy season the water way (jhiripath) can be dangerous. There is always the chance of a flash flood as Rajkhandi is a rainforest.
			Have a bamboo stick while walking to avoid slips and falls. Carry extra pair of clothes and be ready to walk barefoot. And always bring along mosquito repellent creams.
			You must have to go this place if you like adventures and trekking.</p>


			<form method="post">
			<button name="submit5" class="btn btn-primary" role="button" id="HumBtn" onclick="myFunction5()">Add To favorite</button>
			</form>

 		<?php
						if(isset($_REQUEST['submit5']))
					{
						$wlist='HumHum Waterfall, Sylhet';
						$uname=$_SESSION['name'];
						
						
						
						$query=$query="insert into watchlist (id,username,watchlist) values(null ,'$uname','$wlist')";

						$result=mysql_query($query);
						
						if($result)
							{
								
							
							}
							else
						echo "something went wrong !!";
					}
				
		?>


	</div>

</body>
</html>