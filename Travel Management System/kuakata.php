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
	<title> Kuakata</title>
	<link rel="stylesheet" href="css/bootstape.css">
	<script src="js/ajax.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/place.css">
	<h1>Visit Kuakata</h1>

				<script>
					function myFunction1() {
					    document.getElementById("KuaBtn").innerHTML = "Added To Favorites";
					}
				</script>
	
</head>
<body>
<div class="place">

			<h2><u>Kuakata</u></h2>


			<img src="img/kuakata.jpg" height="320" width="550" alt="cox's bazar" align="left">
			<img src="img/kuakata2.jpg" height="320" width="400" alt="cox's bazar" align="right">
			<p>a scenic sea beach on the south of Bangladesh. The most important attraction of the beach is that one can see both sunrise and sunset from some of its locations. Situated 320 km from dhaka and 70 km from the patuakhali district headquarters, Kuakata is part of the Latachapli union of kalapara upazila.<br/> The best way to reach Kuakata from Dhaka is to first travel to barisal/Patuakhali by road, water, or air, and then to take the bus or boat/launch for the destination. The Bangladesh Road Transport Corporation introduced a direct bus service from Dhaka to Kuakata via Barisal/Patuakhali.<br/>

			The name Kuakata originated from the word kua, which means a well dug for drinking water. It is believed that the early rakhain settlers found it difficult to get fresh drinking water in the place and they had to dig (kata) wells (kuas) to solve the problem. The beach at Kuakata is 18km long and 3km wide.This sandy beach slopes into the bay of bengal.<br/> Other attractions at Kuakata include blue sky, huge expanse of water, the evergreen forest in surrounding areas, rows of coconut trees, boats of many different kinds and their colourful sails, and surfing waves. Kuakata is also a sanctuary for migratory winter birds.</p>

				<form method="post">

						<button name="submit1" class="btn btn-primary" role="button" id="KuaBtn" onclick="myFunction1()">Add To favorite</button>
						</form>

					 		<?php
										if(isset($_REQUEST['submit1']))
											{
										
												$wlist='Kuakata, Patuakhali';
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

</body>
</html>