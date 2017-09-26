
$(document).ready(function(){
 
  $(".get_toh,.navbar a, footer a[href='#myPage']").on('click', function(event) {

  
  if (this.hash !== "") {

   
    event.preventDefault();

   
    var hash = this.hash;

  
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
 
      window.location.hash = hash;
      });
    } 
  });
  
  $(window).scroll(function(){
    $(".slideanim").each(function(){
            var pos=$(this).offset().top;
            var winTop=$(window).scrollTop();
            if(pos<winTop+600){
                $(this).addClass("slide");
                
            }
        });
        $(".slideanim1").each(function(){
            var pos=$(this).offset().top;
            var winTop=$(window).scrollTop();
            if(pos<winTop+600){
                $(this).addClass("rasi_div_img1");
                
            }
        });
        
        
         
  });
  
 


  
  $('#contact_cutton').click(function(){
        
        var uname=$('#name').val();
        var uemail=$('#email').val();
        var umsg=$('#comments').val();
        if(uname!="" && umsg!="" && uemail!=""){
            
            
        $.post('./save.php',{uname:uname,uemail:uemail,umsg:umsg},function(data){
            alert(data);   
        });
          
        }     
  });
  
   

})



