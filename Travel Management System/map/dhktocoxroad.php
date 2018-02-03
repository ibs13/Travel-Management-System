<!DOCTYPE html>
<html>
<head>
<title>Cox's Bazar road</title>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var Dhaka=new google.maps.LatLng(23.71549,90.42677);
var comilla=new google.maps.LatLng(23.43310,91.17644);
var feni=new google.maps.LatLng(23.01411,91.39617);
var chittagong=new google.maps.LatLng(22.36638,91.83322);
var satkania=new google.maps.LatLng(22.09762,92.08556);
var Cox=new google.maps.LatLng(21.43946,92.00773);


function initialize()
{
var mapProp = {
  center:chittagong,
  zoom:8,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var myTrip=[Dhaka,comilla,feni,chittagong,satkania,Cox];
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
