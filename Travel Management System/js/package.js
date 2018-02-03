    var retVAl1;
    var retVal2;
    var retVal3;
    var NameValue;

function getState(val) {
    
      retVAl1=val;
     
         $.ajax({

            type: 'POST',
            url: 'sample.php',
            data: {place: val},
            dataType:"Text" ,         
          success: function(data){
            $('#accom').html(data);
            
            }
         });
        
}

function place(val) {
       
        
      retVal2=val;
         $.ajax({

            type: 'POST',
            url: 'sample.php',
            data: {package: val},
            dataType:"Text" ,         
          success: function(data){
            $('#place').html(data);
            
            }
         });
        


}

function packval(val)
{
    retVal3=val;

}
  

function showHint(val)
{
    NameValue=val;

}
  


function clickbtn() {

 
  alert(retVAl1);
  alert(retVal2);
  alert (retVal3);
  alert (NameValue);

   var urltopass='acc='+retVAl1+'&hotel='+retVal2+'&package='+retVal3+'&member='+NameValue;
        $.ajax({

            type:'POST',
            url:'table.php',
            data:urltopass,

            success: function(html)
            {
                // $('#load').fadeOut('500',function(){
                //  $('#load').css('display','block');
                //    $('#load').html(html).show('slow');
                // });
                // if(html==3200)
                // {
                //      window.Location='table.php';
                // }
             alert(html);
            }
        });
 

}

