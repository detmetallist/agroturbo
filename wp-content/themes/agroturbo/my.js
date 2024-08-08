$(window).on('load', function (){
	$('a[href^="#"]').click(function () { 
	     elementClick = $(this).attr("href");
	     destination = $(elementClick).offset().top;
	       $('body').animate( { scrollTop: destination }, 1100 );
	     return false;
    });
	var cat_cat = '0';
	var cat_name = '0';
	var offset=0;
	var videl = 0;
	var check=0;
	var slider_img = 1;
	var img_width = 0;
	var img_margin = 0;
	var img_div_width = $(".katalog_item_img").width();
	var cat_kol=$(".proizv_nazv label").length;
	setInterval(function(){
	    if(slider_img==1){slider_img = 2}
		else if(slider_img==2){slider_img = 3}
		else{slider_img = 1}
		slide_zamena();
	},5000);
	var img_kol = $(".katalog_item_img").length;
	for(var i=0; i<img_kol; i++){
		img_width = $(".katalog_item_img img").eq(i).width();
		img_margin = (img_div_width-img_width)/2;
		$(".katalog_item_img img").eq(i).css("margin-left",img_margin+"px");
	}	
	$('.katalog_item_img').mouseover(function(){
		$(this).children('.pokr_img').stop().fadeIn(300);
	});
	$('.katalog_item_img').mouseout(function(){
		$(this).children('.pokr_img').stop().fadeOut(300);
	});
	$('.img_sklad').mouseover(function(){
		$(this).children('.podr').stop().fadeIn(300);
	});
	$('.img_sklad').mouseout(function(){
		$(this).children('.podr').stop().fadeOut(300);
	});
	$('.preim_item').mouseover(function(){
		if($(window).width()>1020){
			$(this).children('p').stop().fadeIn(500);
			$(this).children('.item2').stop().fadeIn(500);
			$(this).children('.item').stop().fadeOut(500);
		}
	});	
	$('.preim_item').mouseleave(function(){
		if($(window).width()>1020){
			$(this).children('p').stop().fadeOut(500);
			$(this).children('.item2').stop().fadeOut(500);
			$(this).children('.item').stop().fadeIn(500);
		}
	});	
	$('.popup_over').click(function(){
		$('.popup').fadeOut(500);
	});
	$('.popup_close').click(function(){
		$('.popup').fadeOut(500);
	});
	$('.tovar_k').click(function(){
		$('.tovar_k').removeClass('active');
		$(this).addClass('active');
		var it_index = $( ".tovar_k" ).index( this );
		if(it_index==0){
			$('.tovar_text_opis').delay(500).fadeIn(500);
			$('.tovar_text_har').fadeOut(500);
			$('.tovar_text_info').fadeOut(500);
		}
		else if(it_index==1){
			$('.tovar_text_opis').fadeOut(500);
			$('.tovar_text_har').delay(500).fadeIn(500);
			$('.tovar_text_info').fadeOut(500);
		}
		else{
			$('.tovar_text_opis').fadeOut(500);
			$('.tovar_text_har').fadeOut(500);
			$('.tovar_text_info').delay(500).fadeIn(500);
		}
	});
	$(".proizv_nazv label .checkbox").click(function(){
		$(".kat_menu li").removeClass('kat_li_active');
		cat_name='';
		for(i=0; i<cat_kol; i++){
			if($(".proizv_nazv label").eq(i).children(".checkbox").prop("checked")){
				if(cat_name!=''){ cat_name+=','; }
				cat_name+=$(".proizv_nazv label").eq(i).children("#cat_id").html();
			}
		}
		$.ajax({
			type: "POST",
			url: "/ajax-cat.php",
			cache: false,
			data: {
				cat_id: cat_name
			},
			success: function (data) {
				$(".katalog_content").html(data);
				var kol_items=$(".katalog_content .katalog_item").length;
				if(kol_items<15){
					$(".katalog .show_more").fadeOut(0);
				} else {
					$(".katalog .show_more").fadeIn(0);
				}
			}
		});
	});
	$(".kat_menu li").click(function(){
		$(".kat_menu li").removeClass('kat_li_active');
		$(this).addClass('kat_li_active');
		$('.proizv_nazv label .checkbox').prop("checked", false);
		check=0;
		cat_name=$(this).children("#cat_id").html();
		$.ajax({
			type: "POST",
			url: "/ajax-cat.php",
			cache: false,
			data: {
				cat_id: cat_name
			},
			success: function (data) {
				$(".katalog_content").html(data);
				var kol_items=$(".katalog_content .katalog_item").length;
				if(kol_items<15){
					$(".katalog .show_more").fadeOut(0);
				} else {
					$(".katalog .show_more").fadeIn(0);
				}
			}
		});
	});

	$(".katalog .show_more").click(function(){
		offset+=15;
		$.ajax({
			type: "POST",
			url: "/ajax-cat.php",
			cache: false,
			data: {
				cat_id: cat_name,
				offset: offset
			},
			success: function (data) {
				var katalog_html=$(".katalog_content").html()+data;
				$(".katalog_content").html(katalog_html);
				var kol_items=$(".katalog_content .katalog_item").length;
				if(kol_items<15+offset){
					$(".katalog .show_more").fadeOut(0);
				} else {
					$(".katalog .show_more").fadeIn(0);
				}
			}
		});
	});

	$(".slider_strelka_ris").mouseover(function(){
		$(this).stop().animate({'background-color':'#51a951'},300);
	});
	$(".slider_strelka_ris").mouseleave(function(){
		$(this).stop().animate({'background-color':'rgba(0,0,0,0.6)'},300);
	});
	$(".header_slider").mouseover(function(){
		$(".slide_arrow_left").stop().animate({'left':'10px'},300);
		$(".slide_arrow_right").stop().animate({'right':'10px'},300);
		$(".slider_arrows").stop().fadeIn(300);
	});
	$(".header_slider").mouseleave(function(){
		$(".slide_arrow_left").stop().animate({'left':'-80px'},300);
		$(".slide_arrow_right").stop().animate({'right':'-80px'},300);
		$(".slider_arrows").stop().fadeOut(300);
	});
	$(".slide_arrow_left").click(function(){
		if(slider_img==1){slider_img = 3}
		else if(slider_img==2){slider_img = 1}
		else{slider_img = 2}
		slide_zamena();
	});
	$(".slide_arrow_right").click(function(){
		if(slider_img==1){slider_img = 2}
		else if(slider_img==2){slider_img = 3}
		else{slider_img = 1}
		slide_zamena();
	});	
	function slide_zamena(){
		if(slider_img==1){
			$(".header_slide1").fadeIn(300);
			$(".header_slide2").fadeOut(300);
			$(".header_slide3").fadeOut(300);
		}
		else if(slider_img==2){
			$(".header_slide1").fadeOut(300);
			$(".header_slide2").fadeIn(300);
			$(".header_slide3").fadeOut(300);
		}
		else{
			$(".header_slide1").fadeOut(300);
			$(".header_slide2").fadeOut(300);
			$(".header_slide3").fadeIn(300);
		}
	}
	$("#button1").click(function(){
		form_reset();
		$(".form_zvonok1").fadeIn(0);
		$(".popup").fadeIn(500);
	});
	$(".katalog_item_button").click(function(){
		form_reset();
		$(".form_zakaz").fadeIn(0);
		$(".popup").fadeIn(500);
		var tov_name=$(this).parent().parent().children(".katalog_item_href").html();
		var tov_cena=$(this).parent().children("span").html();
		$("#form_zakaz input[name='nazv']").val(tov_name);
		$("#form_zakaz input[name='cena']").val(tov_cena);
	});
	$(".otzivi button").click(function(){
		form_reset();
		$(".form_otziv").fadeIn(0);
		$(".popup").fadeIn(500);
	});
	$(".contacts button").click(function(){
		form_reset();
		$(".form_vopros").fadeIn(0);
		$(".popup").fadeIn(500);
	});
	function form_reset(){
		$(".form_zvonok1").fadeOut(0);
		$(".form_zakaz").fadeOut(0);
		$(".form_otziv").fadeOut(0);
		$(".form_vopros").fadeOut(0);
		$(".form_thanks").fadeOut(0);
	};
	$("#zakaz_form form").submit(function(){
		if($(this).children("input[name='lid_mail']").exists()){
			if($(this).children("input[name='lid_mail']").val()==""){
				$(this).children("input[name='lid_mail']").css('background-color','yellow');
				$(this).children("input[name='lid_mail']").attr('placeholder','Заполните поле');
			}
			else{
				$(".popup").fadeIn(500);
				var th = $(this);
				$.ajax({
					type: "POST",
					url: "/send.php", //Change
					data: th.serialize()
				}).done(function() {
					form_reset();
					$(".form_thanks").fadeIn(300);
					setTimeout(function() {
						$(".popup").fadeOut();
						th.trigger("reset");
					}, 5000);
				});
			}
		}
		if($(this).children("input[name='lid_phone']").exists()){
			if($(this).children("input[name='lid_phone']").val()==""){
				$(this).children("input[name='lid_phone']").css('background-color','yellow');
				$(this).children("input[name='lid_phone']").attr('placeholder','Заполните поле');
			}
			else{
				$(".popup").fadeIn(500);
				var th = $(this);
				$.ajax({
					type: "POST",
					url: "/send.php", //Change
					data: th.serialize()
				}).done(function() {
					form_reset();
					$(".form_thanks").fadeIn(300);
					setTimeout(function() {
						$(".popup").fadeOut();
						th.trigger("reset");
					}, 5000);
				});
			}
		}
		return false;
	});
	let counter = 0;
	$(window).scroll(function() {
		var scroll = $(window).scrollTop() + $(window).height();
		var map_offset = $(".karta").offset().top
		 
		if (scroll > map_offset && counter == 0) {
		    $('.karta iframe').fadeIn(0);
		}
	})

	jQuery.fn.exists = function() {
   		return $(this).length;
	}
})