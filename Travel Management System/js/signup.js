
function usname()
{
    var uname=$('#username').val();

    var urltopass='username='+uname;
    $.ajax({

                type:'post',
                data:urltopass,
                url:'uname-check.php',
                success: function(responseText)
                {
                    if(responseText=='1')
                    {
                        $('#response').html('<img src="error.png" height="20px" width="20px"><span>  username Already exist </span>');
                         $('#submit').attr("disabled", true);  
                    }
                    else if(responseText=='0')
                    {
                         $('#response').html('');
                         $('#submit').attr("disabled", false);  
                    }
                }
        });
}



function signUp()
{
    var username=$('#username').val();
    var fname=$('#fname').val();
    var password=$("#password").val();
    var email=$("#email").val();

    // alert(username);
    // alert(password);
    // alert(fname);
    // alert(email);


      if(username !=null && password !="" && email !="" && fname!="")
        {
        var urltopass='username='+username+'&password='+password+'&email='+email+'&fname='+fname;
        $.ajax({

            type:'POST',
            url:'postSignin.php',
            data:urltopass,

            success: function(html)
            {
                $('#load').css('display','block');
                $('#form2').css('display','none');
                $('#box').css('display','none');
                $('#load').fadeOut('500',function(){
                     $('#finish').empty();
                    $('#load').css('display','none');
                    $('#load').html(html).show('slow');
                });
                
            }
        });
    }  
        else
          
             $('#finish').html('<img src="error.png" height="20px" width="20px"><span>  please fill all the BOX </span>');
}