$(function(){
	var ex = $('.ex1'); //Variavel para mudar ação
	$('.ev1').click(function() {
		$(this).css("background","#ccc");
		ex.text("Você Clicou!!");
	});
		$('.ev2').dblclick(function() {
		$(this).css("background","#ccc");
		ex.text("Você deu dois Cliques!!");
	});
		$('.ev3').focusin(function() {
		$(this).css("background","#ccc");
		ex.text("Você deu Foco!!");
	});
		$('.ev3').focusout(function() {
		$(this).css("background","#000");
		ex.text("Você tirou o foco!!");
	});
		$('.ev4').hover(function() {
		$(this).css("background","#ccc");
		ex.text("Você Passou o Mouse!!");
	});
		$('.ev5').mousedown(function() {
		$(this).css("background","#ccc");
		ex.text("Você Precionou o Botao!!");
	}).mouseup(function() {
		$(this).css("background","#000");
		ex.text("Você desprecionou !!");
	});
	var a = 0;
	$('.ev6').mouseenter(function() {
		a +=1;
		ex.text("Entradas do Mouse:"+a);
	}).mouseout(function(){
		ex.text("Saidas do Mouse");
	}); 
	var b = 0;
	$('.ev7').mouseover(function() {
		b +=1;
		ex.text("Mouse over:"+b);
	}).mouseleave(function() {
		b +=1;
		ex.text("Mouse Move:"+b);

		$('.ev8').mousemove(function(move) {
			var localx = move.pageX;
			var localy = move.pageY;

			ex.text("Movimento X:"+localx+" - Movimento Y:"+localy);



		});

			});

});