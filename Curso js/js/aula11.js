/*$(function(){
	var nav = $('.menu');
	$(window).scroll(function() {
		
		if($(this).scrollTop()>173){
			nav.addClass("menu-fixo");
		}else{
			nav.removeClass("menu-fixo");
		}
	});
});*/
$(window).scroll(function(){
					var nav = $(".menu");
					var topo = $(window).scrollTop();
					if(topo>100){
						nav.addClass('.menu-fixo');
					}else{
						nav.removeClass('.menu-fixo');
					}

				});
			

