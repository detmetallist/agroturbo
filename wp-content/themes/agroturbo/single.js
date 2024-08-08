$(document).ready(function(){
	var miniatures_width=$(".miniatures_cont").width()/3-4;
	var img_kol = $(".gallery_miniatures ul li").length;
	var li_width=$(".gallery_miniatures ul li").width();
	var this_num=0;
	var ul_width=img_kol*(li_width+5);
	if($(window).width()<670){ miniatures_size(); }
	$(window).resize(function(){
		setTimeout(miniatures_size,1000);
	})
	function miniatures_size(){
		miniatures_width=$(".miniatures_cont").width()/3-4;
		var image_height=$(".gallery_image").width()/1.333;
		$(".gallery_image").height(image_height);
		$(".miniatures_cont ul li").width(miniatures_width);
		li_width=$(".gallery_miniatures ul li").width();
		ul_width=img_kol*(li_width+5);
	}
	var img_href=$(".gallery_miniatures ul li a").eq(0).attr('href');
	$(".gallery_image").css('background-image','url('+img_href+')');
	var mini_margin = 0;
	$(".gallery_miniatures ul").width(ul_width);
	$(".miniatures_right").click(function(){
		miniatures_right();
	});
	$(".miniatures_left").click(function(){
		miniatures_left();
	});	
	$(".miniatures_cont").swipe( {
	    swipeLeft:miniatures_right,
	    swipeRight:miniatures_left,
	    excludedElements: "label, button, input, select, textarea, .noSwipe",
	    threshold:3
	});
	function miniatures_left(){
		if(mini_margin>0){
			mini_margin-=li_width+5;
			$(".gallery_miniatures ul").animate({'margin-left':'-'+mini_margin+'px'},300);
		}
	}
	function miniatures_right(){
		if(mini_margin<=ul_width-($(".miniatures_cont").width()+miniatures_width/2)){
			mini_margin+=li_width+5;
			$(".gallery_miniatures ul").animate({'margin-left':'-'+mini_margin+'px'},300);
		}
	}
	$(".gallery_image").swipe( {
	    swipeLeft:slide_right,
	    swipeRight:slide_left,
	    excludedElements: "label, button, input, select, textarea, .noSwipe",
	    threshold:3
	});
	function slide_left(){
		if(this_num>0){
			this_num--;
			img_href=$(".gallery_miniatures ul li a").eq(this_num).attr('href');
			$(".gallery_image").css('background-image','url('+img_href+')');
			if(this_num>1){
				miniatures_left();
			}
		}
	}
	function slide_right(){
		if(this_num<img_kol-1){
			this_num++;
			img_href=$(".gallery_miniatures ul li a").eq(this_num).attr('href');
			$(".gallery_image").css('background-image','url('+img_href+')');
			if(this_num<img_kol-2){
				miniatures_right();
			}
		}
	}
	$(".gallery_miniatures ul li a").click(function(){
		img_href=$(this).attr('href');
		$(".gallery_image").css('background-image','url('+img_href+')');
		this_num=$(".gallery_miniatures ul li a").index(this);
		return false;
	});
	$(".gallery_zag button").click(function(){
		$(".form").fadeOut(0);
		$(".form_zakaz").fadeIn(0);
		$(".popup").fadeIn(500);
		var tov_name=$(".gallery_zag h1").html();
		var tov_cena=$(".price span").html();
		$("input[name='nazv']").val(tov_name);
		$("input[name='cena']").val(tov_cena);
	});
	$('.popup_over').click(function(){
		$('.popup').fadeOut(500);
	});
	$('.popup .popup_close').click(function(){
		$('.popup').fadeOut(500);
	});
	var header_height=$(".header_top").height();
	var footer_height=$(".footer").height()+parseInt($(".footer").css("padding-top"))+parseInt($(".footer").css("padding-bottom"));
	var tovar_container_height=$(".tovar_container").height();
	var bodyheight=tovar_container_height+header_height+footer_height;
	if(bodyheight<window.innerHeight){
		$(".footer").addClass("footer_fixed");
	}
	$("form").submit(function(){
		if($(this).children("input[name='lid_phone']").exists()){
			if($(this).children("input[name='lid_phone']").val()==""){
				$(this).children("input[name='lid_phone']").css('background-color','yellow');
				$(this).children("input[name='lid_phone']").attr('placeholder','Заполните поле');
			}
			else{
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
	jQuery.fn.exists = function() {
   		return $(this).length;
	}	
});