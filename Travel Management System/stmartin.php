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
	<title> St. Martin's Island</title>
	<link rel="stylesheet" href="css/bootstape.css">
	<script src="js/ajax.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/place.css">
	<h1>Visit St. Martin's Island</h1>

		<script>
					function myFunction1() {
					    document.getElementById("StBtn").innerHTML = "Added To Favorites";
					}
		</script>

</head>
<body>
<div class="place">

			<h2><u>St. Martin's Island</u></h2>

			<img src="img/saintmartin4.jpg" height="320" width="450" alt="cox's bazar" align="right">
			<img src="img/saintmartin3.jpg" height="320" width="450" alt="cox's bazar" align="left">
			<p>St. Martins Island is the most beautiful Coral Island where you will find live corals. Its only 30 km from Teknaf and you can go there by local motorboat, tourist boats, or sea truck.[Coral Beach at St. Martins Island]	
			This small coral island about 10km (6mi) southwest of the southern tip of the mainland is a tropical cliché, with beaches fringed with coconut palms and bountiful marine life.<br/> There’s nothing more strenuous to do here than soak up the rays, but it’s a clean and peaceful place without even a mosquito to disrupt your serenity.
			
			It’s possible to walk around the island in a day because it measures only 8 sq km (3 sq mi), shrinking to about 5 sq km (2 sq mi) during high tide.
			In this Island, you will find the beautiful Coral reef and long Coral beach and lots of coconut trees. The local name of the coconut is Narikel and the original name of this Island is Narikel Jinjira is derived from that. Accommodation in St. Martins Island is limited, so it is advisable to book accommodation before you plan to go to this Island.
			
			Overnight staying in St. Martins Island is really an exotic feeling where you will feel and listen the sound of Sea. If you are lucky enough then you can spend the exotic moonlit night at St. Martins Island. The beauty of Full moon in St. Martins Island cannot be expressed, if you are not there at that time.<br/><br/>

			<b style="font-size: 25px;">Cheera-dwip</b> is a part of St. Martins Island but divided during tides. You can go to Cheera-dwip by walking. About two and a half hours walk from St. Martins Island or you can go there also by local motorboat or tourist boat. In that Island you will find the Corals - living and dead all over the Island. A small bush is there which in the only green part of Cheera-dwip, enhancing the beauty of this island. People do not live in this Island, so advisable for the tourists to go there early and come back by afternoon.</p>

			
				<form method="post">
			<button name="submit1" class="btn btn-primary" role="button" id="StBtn" onclick="myFunction1()">Add To favorite</button>
			</form>

 		<?php
					if(isset($_REQUEST['submit1']))
											{
										
												$wlist='St. Martins Island , Coxs Bazar';
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