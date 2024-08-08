$(window).on('load', function (){
	var angle = 0;
	setInterval(function(){
	      angle+=2;
	      $(".header_logo2").rotate(angle);
	      $(".footer_logo2").rotate(angle);
	},10);
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('.vverh').fadeIn();
		} 
		else {
		 	$('.vverh').fadeOut();
		}
	});
	$('.vverh').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});
	$(".zvonok_fix").click(function(){
		if($(window).width()>1020){
			$(".form").fadeOut(0);
			$(".form_zvonok1").fadeIn(0);
			$(".popup").fadeIn(500);
		}
	});	
	$(".zvonok_fix").mouseover(function(){
		if($(window).width()>1020){
			$(this).stop().animate({"width":"380px"},100);
		}
	});
	$(".zvonok_fix").mouseout(function(){
		if($(window).width()>1020){
			$(this).stop().animate({"width":"80px"},100);
		}
	});
})