alert("asos");

function rakib()
{
var slider=document.getElementById("sliderImage");
slider.onclick = function(){
	alert("hello");
}
}


var sliderarray=["images/Slider.jpg","images/Slider1.jpg","images/Slider2.jpg","images/Slider3.jpg"];

var imageIndex=0;

function changeImage()
{
	slider.setAttribute("src",sliderarray[imageIndex]);
	imageIndex++;
	if(imageIndex>=sliderarray.length)
	{
		imageIndex=0;
	}
}

window.onload= function(){
setInterval(changeImage,2000);
rakib();
}