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
	<title> Bandarban</title>
	<link rel="stylesheet" href="css/bootstape.css">
	<script src="js/ajax.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/place.css">
	<h1>Visit Bandarban</h1>

				<script>
					function myFunction1() {
					    document.getElementById("BogaBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>

				<script>
					function myFunction2() {
					    document.getElementById("NilBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>

				<script>
					function myFunction3() {
					    document.getElementById("NilaBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>


</head>
<body>
<div class="place">

			<h2><u>Boga Lake</u></h2>
			<img src="img/bogalake.jpg" height="200" width="auto" alt="cox's bazar" align="left">
			<img src="img/bogalake2.jpg" height="200" width="auto" alt="cox's bazar" align="right">
			<p>Boga Lake is the most beautiful natural lake in Bangladesh. It is also known as Bagakain Lake or Baga Lake. Boga lake is 18 kilometer away from Ruma Sadar Upozilla in Bandarban. The area of this lake is about 15 acres. It is about 3000 feet above sea level. The color of water of this lake is blue and very nice.<br/> There are many mythological stories behind the creation of this lake. There are many tourists make their way to Boga lake every year, specially in the winter season. Small tribe community like Bawm, Khumi have localities besides the Boga lake.<br/> In the rainy season, it is quite difficult to stroll beside the boga lake. The road from Ruma to Boga lake is still under construction. There waiting lots of pleasure and delight for you at Boga lake. You will definitely be amazed looking at the big rocks lying in and out of the Boga lake. You can have a camp fire beside the lake, that will be unbelievable and mind-blowing memory in your life.</p>
			<form method="post">
			<button name="submit1" class="btn btn-primary" role="button" id="BogaBtn" onclick="myFunction1()">Add To favorite</button>
			</form>

 		<?php
					if(isset($_REQUEST['submit1']))
											{
										
												$wlist='Boga Lake , Bandarban';
												$uname=$_SESSION['name'];
											if(!isset($_SESSION['name']) && $uname==null)
											    {
											        header("location:signIn.php");
											 }
											else
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

			<h2><u>Nilgiri</u></h2>
			<img src="img/nilgiri.jpg" height="200" width="auto" alt="cox's bazar" align="left">
			<img src="img/nilgiri2.jpg" height="200" width="auto" alt="cox's bazar" align="right">
			<p>Nilgiri or Nil Giri is one of the tallest peaks and beautiful tourist spot in Bangladesh. It is about 3500 feet high and situated at Thanci Thana. It is about 46 km south of Bandarban on the Bandarban-Chimbuk-Thanchi road. Beside this spot you can see Mro villages. Their colorful culture and living style are surely an unexplored experience for the visitors.<br/> In rainy season here creates a spectacular scenery, the whole spot is covered with the blanket of clouds. You can enjoy a cloudy experience. Winter is waiting for you with it’s foggy gesture on the height. It is a nice place for campfire in that season.<br/> Most attractive time is the dawn. It is better if you chose to stay during 7-18 dates of a lunar month to enjoy the moonlit night. You can also enjoy the serpentine course of Sangu River. This is the most spectacular tourist spot in Bandarban and managed by Army brigade of Bandarban.</p>
			<form method="post">
			<button name="submit2" class="btn btn-primary" role="button" id="NilBtn" onclick="myFunction2()">Add To favorite</button>
			</form>


 		<?php
						if(isset($_REQUEST['submit2']))
					{
						$wlist='Nilgiri, Bandarban';
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

			<h2><u>Nilachal</u></h2>
			<img src="img/nilachal2.jpg" height="260" width="auto" alt="cox's bazar" align="left">
			<img src="img/nilachal.jpg" height="270" width="auto" alt="cox's bazar" align="right">
			<p>There is another beautiful place to see near Meghla is called Nilachal also maintained by district administration. it is known as tiger hill. The view of Nilachal is so spectacular for snapping.Nilachal is the nearest tourist spot from Bandarban.<br/> It is situated at Tigerpara. It is near about 2000 feet above of sea level and 5 kilometer away from the Bandarban town. From here visitor can see the total glance of Bandarban town and a vast landscape. In the rainy season visitor can be thrilled walking through the clouds.<br/> Visitor can watch a golden twilight in the evening and also enjoy an evergreen moonlight in the moonlit night. During the winter season, it is awesome at the foggy morning. On the way to Nilachal, visitor can see some tribe villages with their raw natural expression.</p>
			<form method="post">
			<button name="submit3" class="btn btn-primary" role="button" id="NilaBtn" onclick="myFunction3()">Add To favorite</button>
			</form>

 		<?php
						if(isset($_REQUEST['submit3']))
					{
						$wlist='Nilachal, Bandarban';
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