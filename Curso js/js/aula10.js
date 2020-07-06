$(function(){
	var ex = $('.ex1');
	var ex2 = $('.ex3');
	var button = $('.button');

	button.click(function(){
		$('.ex1').fadeOut("slow");
	}).dblclick(function(){
		ex.fadeIn("slow");//Some e aparece -- FadeToggle
	});
	button.click(function(){
		$('.ex2').fadeTo(3000,0.3,function(){
			$('.ex3').fadeTo("slow",0.5);
		}); //Transpatencia
	})

	});
