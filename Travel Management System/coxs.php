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
	<title> Cox's Bazar</title>
	<link rel="stylesheet" href="css/bootstape.css">
	<script src="js/ajax.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/place.css">
	<h1>Visit Cox's Bazar</h1>

				<script>
						function myFunction3() {
						 document.getElementById("LabBtn").innerHTML = "💕 Added To Favorites";
							}
				</script>

				<script>
					function myFunction1() {
					    document.getElementById("HimBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>

				<script>
					function myFunction2() {
					    document.getElementById("InanBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>

</head>
<body>

	<div class="place">

			<h2><u>Laboni Beach</u></h2>
			<img src="img/cox.jpg" height="200" width="auto" alt="cox's bazar" align="left">
			<img src="img/laboni.jpg" height="200" width="auto" alt="cox's bazar" align="right">
			<p>Laboni Beach is the main beach of Cox's Bazar. At here we can easily enjoy the scenic beauty of Bay of Bengal. Its a place for enjoyment, many people come here including the foreigners. The beach is well appreciated during sunsets and sunrise, where people can witness the sea as it changes its colors twice in a day.<br/><br/>Visitors can sunbathe, surf, jog, cycle, and swim. It is best for swimming and relaxation.Close to the beach, there are a lot of small shops selling souvenirs, locally made cigars and beauty products (sandal wood based), handmade clothes, bed sheets, dresses, shoes and beach accessories to the tourists.It is a nice place for our tourism. So, come and lets enjoy the beauty of Laboni Beach. Also <b>Kolatoli </b>and <b>Sugondha</b> beaches are very famous among the tourists. </p>
			<form method="post">
			<button name="submit1" class="btn btn-primary" role="button" id="LabBtn" onclick="myFunction3()">Add To favorite</button>
			
			</form>

  		<?php
					if(isset($_REQUEST['submit1']))
											{
										
												$wlist='Laboni Beach, Coxs Bazar';
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
			
			<a href="map/laboni.php" target="_Blank" class="btn btn-primary" role="button">Find in Maps</a>


	</div>

	<div class="place">

			<h2><u>Himchori Waterfall</u></h2>
			<img src="img/himchori.jpg" height="250" width="300" alt="cox's bazar" align="left">
			<img src="img/himchori2.jpg" height="250" width="auto" alt="cox's bazar" align="right">
				<P>Many attractions are for the tourists around Cox's Bazar. You can go Himchori to see it's Waterfall, this is famous for waterfall, though in the winter season it dwindles but during the rainy season it's really a fabulous and full waterfall can be enjoyed.
				</P>
				<p>The amazing waterfall of Himchari is a very rare scene to enjoy. The waterfall from the green hill is relatively extraordinary to look at. However, in the winter it dwindles whereas in the rainy season it is really wonderful and full waterfall could be enjoyed. The spot is ideal for picnic, shooting, relaxing and sunbathing.<br/> But whenever you have sunbathing locals can rush around you as Bangladeshis' are not used to see women in swim costume. Here you get beautiful hilltop resort centre where you can stay for relaxing and can hear the shore of the Bay of Bengal.
				Himchari National Park: 
				Park is a beautiful tropical rain forest (evergreen and semi-ever-green) around the South Asia. The park was established in 1980. This place is maintained, protected and secured by the government for the foreign tourists and the local visitors. The Park is not only attractive for the tourists it is also attractive for the biologist. 
				The park gets high forest, low forest and grasslands with a few trees. Around 58 species of trees, 4 species grasses, 15 species of shrubs, 19 climbers and 21 species of herbs altogether 117 plant species are available here. In the forest area there are at least twenty kinds of important herbs like Curculigorecurvata, Swintonia floribunda and Alpinianigra are available which most valuable plant are for the biologist. 
				<br/><b>Note: </b>You can reach Himchari only by the beach. So, ensure you are back to town before high tide rise in the evening. It is not wise to stay here after sunset.</p><br/>
				<form method="post">
			<button name="submit2" class="btn btn-primary" role="button" id="HimBtn" onclick="myFunction1()">Add To favorite</button>
			
			</form>
 		<?php
						if(isset($_REQUEST['submit2']))
					{
						$wlist='Himchori Waterfall , Coxs Bazar';
						$uname=$_SESSION['name'];
						
						
						
						$query="insert into watchlist (id,username,watchlist) values(null ,'$uname','$wlist')";

						$result=mysql_query($query);
						
						if($result)
							{
								
								
							}
							else
						echo "something went wrong !!";
					}
				
		?>

				
			<a href="map/himchori.html" target="_Blank" class="btn btn-primary" role="button">Find in Maps</a>

	</div>
<div class="place">

			<h2><u>Inani Beach</u></h2>
			<img src="img/inani2.jpg" height="200" width="300" alt="cox's bazar" align="left">
			<img src="img/inani.jpg" height="200" width="380" alt="cox's bazar" align="right">
			<p>Inani Beach is within Ukhia Thana, 35 km. to the south of Cox's Bazar.With green hills to the east, the golden beach of Inani casts a music spell on anyone stepping on to its fine golden sands. The clean blue waters of the Bay are ideal for swimming. 
			It is considered the world's longest and broadest beach: 180m at high tide and 300m at low tide.</p>
			<p>To get here, take a bus to Teknaf and get off at Court Bazar (30km), a tiny village 2km before Ukhia. From there, you can rickshaw or tempo west to the beach, 10 km away. If you're headed for the guesthouse, ask the rickshaw driver to let you off at the tiny village of Sonarpara. From there, walk south until you reach the guesthouse. Alternatively, hire a jeep from Cox's Bazar to take you directly to Inani using the scenic beach route. </p>
			<p><b>Note: </b>Every year numerous foreign and local tourists come here to spend their leisure in Inani Beach. However, it lacks several amenities that visitors can expect. It is wise to take a packed lunch and water with you when you visit the beach. But those people who have taken the time to explore the beach can testify that its beauty and cool breeze far outweighs anything it might be lacking in amenities. When visiting Inani Beach, ensure you have camera along to capture the amazing sight of the sun setting over the sea. </p>
			<form method="post">
			<button name="submit3" class="btn btn-primary" role="button" id="InanBtn" onclick="myFunction2()">Add To favorite</button>
			
			</form>

 		<?php
						if(isset($_REQUEST['submit3']))
					{
						$wlist='Inani Beach , Coxs Bazar';
						$uname=$_SESSION['name'];
						
						
						
						$query="insert into watchlist (id,username,watchlist) values(null ,'$uname','$wlist')";

						$result=mysql_query($query);
						
						if($result)
							{
								
								
							}
							else
						echo "something went wrong !!";
					}
				
		?>
				
			<a href="map/inani.html" target="_Blank" class="btn btn-primary" role="button">Find in Maps</a>

	</div>


</body>
</html>