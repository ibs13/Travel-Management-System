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
	<title> Sundarban</title>
	<link rel="stylesheet" href="css/bootstape.css">
	<script src="js/ajax.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/place.css">
	<h1>Visit Sundarban</h1>
				
				<script>
					function myFunction1() {
					    document.getElementById("HirBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>

				<script>
					function myFunction2() {
					    document.getElementById("kalBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>

				<script>
					function myFunction3() {
					    document.getElementById("kotBtn").innerHTML = "💕 Added To Favorites";
					}
				</script>								

</head>
<body>
<div class="place">

			<h2><u>Hiron Point</u></h2>
			<img src="img/hironpoint.jpg" height="200" width="auto" alt="cox's bazar" align="left">
			<img src="img/hironpoint2.jpg" height="200" width="auto" alt="cox's bazar" align="right">
			<p>There is number of spot in sundarban. Hiron Point is one of the best tourist spot in Sunderban. Hiron point is called the world heritage state. Hiron Point is a graceful spot, great for spotting tigers and other spectacular and rare wildlife animals. Also known as Nilkamal, it is well-known for tiger, monkey, deer, crocodiles and many precious birds. Often they are looking out their.<br/><br/>

            This place attracts many tourists owing to its natural beauty and connate splendor. This is a place to have a look at the rare species of wild animals and birds, to be noted in the diary of bird watchers and wildlife enthusiasts.
 
            Every visitors can Enjoy their time by watching this beautiful sinary of the nature.</p>
           <form method="post">
			<button name="submit1" class="btn btn-primary" role="button" id="HirBtn" onclick="myFunction1()">Add To favorite</button>
			
			</form>
  		<?php
					if(isset($_REQUEST['submit1']))
											{
										
												$wlist='Hiron Point, Sundarban';
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

			<h2><u>Kalashdeep</u></h2>
			<img src="img/sundarban2.jpg" height="200" width="auto" alt="cox's bazar" align="left">
			<img src="img/sundarban.jpg" height="200" width="auto" alt="cox's bazar" align="right">
			<p>Kalashdweep is the seventh point on the tour of Sundarban National Park. Kalash Island, in South 24 Parganas, is a part of Sundarbans National Park that lies at the estuary of the River Matla. Being outside the Core area of Sundarbans, visitors with armed guards are permitted to get down on the beach.

            During the dry season, it is the breeding ground of the Olive Ridley Turtles that arrive in a large numbers on this beach for nesting.
            <br/><br/>
			It is also the home to many varieties of coastal birds and is specially a good place to spot uncommon waders. The Great Stone-curlew or Great Thick-knee (Esacus recurvirostris) is sighted on the beach.

			Access by boat to this wonderful beach is usually from the Forest Department’s Kalash Camp. A visit to Kalash Island combines the Sundarbans experience with bird-watching It is a well-kwon place for the visitors. </p>

			<form method="post">
			<button name="submit2" class="btn btn-primary" role="button" id="kalBtn" onclick="myFunction2()">Add To favorite</button>
			
			</form>
  		<?php
						if(isset($_REQUEST['submit2']))
					{
						$wlist='Kalashdeep, Sundarban';
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

			<h2><u>Kotka Beach</u></h2>
			<img src="img/tiger.jpg" height="200" width="auto" alt="cox's bazar" align="left">
			<img src="img/kotkabeach.jpg" height="200" width="auto" alt="cox's bazar" align="right">
			<p>Bangladesh is a wonderful Country in the world. Bangladesh has many tourist spot. All spot are very beautiful and well-known. Sundarban is one of them. It is more attarctive place for the Tourist. The largest mangrove forest in the World (140,000 ha). The World famous Royal Bengal Tiger’s homeland and about 400 tigers live in sundarban. About 30,000 wonderful spotted deer live in sundarban.<br/><br/> There are many Tourist Spot in Sundarban.It is one of Heritage sites in Sunderban. Katka a base for safaris, and well spot to see tigers and for bird-watching. Katka is well known for many rare and majestic wild animals. At Katka, one can see many precious wild animals right from tigers to deer and also varieties of birds and many kinds of monkeys. Here one can hear the natures’ music mixed with the wild fowls in the mornings and evenings.
			<br/><br/>
			For those interested in wildlife trekking, the vast expanse of grassy meadows running from Katka to Kachikhali (Tiger Point) is an ideal route. Don’t miss this place if you are an adventurous tourist.</p>
			<form method="post">
			<button name="submit3" class="btn btn-primary" role="button" id="kotBtn" onclick="myFunction3()">Add To favorite</button>
			
			</form>
  		<?php
						if(isset($_REQUEST['submit3']))
					{
						$wlist='Kotka Beach, Sundarban';
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