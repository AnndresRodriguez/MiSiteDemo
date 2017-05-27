$(document).ready(function() {

	
      if ($(window).width() < 360) { 

      	$(".ctnimg").fadeIn(100);;
		    $("img").fadeIn(800);
	      $(".ctninputs").fadeIn(100);

      }else{


        $(".ctnimg").fadeIn(1000);
		    $("img").fadeIn(2000);
	      $(".ctninputs").fadeIn(500);
      }

   

	
});