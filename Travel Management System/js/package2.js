var val1;
var val2;
var val3;
var val4;


function dest(val)
{	
	val1=val;

	$.ajax({

            type: 'POST',
            url: 'package.php',
            data: {destination: val},
            dataType:"Text" ,         
          success: function(data){
          	$('#response3').remove();
            $('#response').html(data);
            //$('#destination').attr('disabled', true);
            
            }
	});

}

function hotel(val)
{	
	val2=val;

}

function package(val)
{
	val3=val;
}

function showHint(val)
{
	val4=val;
}


function clickbtn() {

 
  // alert(val1);
  // alert(val2);
  // alert (val3);
  // alert (val4);
 $('#destination').remove();
            
   var urltopass='acc='+val1+'&hotel='+val2+'&package='+val3+'&member='+val4;
        $.ajax({

            url:'package.php',
            type:'POST',
            data:urltopass,

            success: function(data)
            {	
           	  $('#response3').remove();
              $('#response').remove();
              $('#response2').remove();
              $('#final').html(data);
             // window.location.href = "table.php";
          	
            }
        });
 

}
