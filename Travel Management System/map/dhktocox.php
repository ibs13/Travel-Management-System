<!DOCTYPE html>
<html>
<head>
<title>Cox's Bazar Air Route</title>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var Dhaka=new google.maps.LatLng(23.84630,90.40236);
var Cox=new google.maps.LatLng(21.44972,91.96472);


function initialize()
{
var mapProp = {
  center:Cox,
  zoom:7,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var myTrip=[Dhaka,Cox];
var flightPath=new google.maps.Polyline({
  path:myTrip,
  strokeColor:"Green",
  strokeOpacity:0.8,
  strokeWeight:5
  });

flightPath.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style=" width:100%;height:650px;"></div>
</body>
</html>
