$('.site_logo').attr('src', 'images/bipo-logo.png');


jQuery(document).scroll(function(){
    if(jQuery(this).scrollTop() >= 30)
    {   
      
      jQuery('.site_logo').attr('src', 'images/bipo-logo-new-blue.png');
      jQuery('.dropbtn').removeClass("dropbtn").addClass("scroll");
  	 
    } else {
       
      jQuery('.site_logo').attr('src', 'images/bipo-logo.png');
      jQuery('.dropbtn').removeClass("scroll").addClass("dropbtn");

    }
});





