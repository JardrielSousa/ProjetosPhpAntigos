$(function(){
      $(window).scroll(function(){
        var topo = $(window).scrollTop();
        if (topo>20){
          $('img').fadeOut('1000');
        }else{
          $('img').fadeIn('1000');
        }
      });
    });

$(document).ready(function(){
	$('img').hide
	.daley('1000')
	.fadeOut("slow");
});

alart("funciona!!");