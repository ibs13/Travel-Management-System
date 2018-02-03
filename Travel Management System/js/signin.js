

function usname()
{
    var uname=$('#uname').val();

    var urltopass='username='+uname;

    $.ajax({

                type:'post',
                data:urltopass,
                url:'uname-check.php',
                success: function(responseText)
                {
                    if(responseText=='0')
                    {
                        $('#response').html('<img src="error.png" height="20px" width="20px"><span>  Username Invalid </span>');
                         $('#submit').attr("disabled", true);  
                    }
                    else if(responseText=='1')
                    {
                         $('#response').html('');
                         $('#submit').attr("disabled", false);  
                    }
                }
        });
}
	


	function signin()
	{
		var username=$('#uname').val();
		var password=$('#pass').val();

		// alert (username);
		// alert(password);
		
		
		if(username != "" && password != "")
		{
			var urltopass='username='+username+'&password='+password;

			$.ajax({

				type:'post',
				data:urltopass,
				url:'check.php',
				success: function(responseText)
				{
					if(responseText=='valid')
					{
						window.location='index.php';
					}
					else if(responseText=='invalid')
					{
						$('<p>wrong info</p>').appendTo('#result');
					}
						
				}
					});	
		}
		else
		 $('#result').html('<img src="error.png" height="20px" width="20px"><span>  please fill all the BOX </span>');

}