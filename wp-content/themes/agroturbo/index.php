<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/images/favicon.png">
	<title> <?php wp_title('|', true, 'right'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?v=1.01" type="text/css" media="all" async>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/main.css?v=1.01" type="text/css" media="all" async>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media.css?v=1.01" type="text/css" media="all" async>
</head>
<body>

	<?php get_header(); ?>
	<div class="header">
		<div class="mobile_head">
			<div class="knopka_menu">
				<div class="polosa"></div>
				<div class="polosa"></div>
				<div class="polosa"></div>
				<div class="polosa"></div>
			</div>
			<div class="knopka_poisk"><a href="#katalog"><img src="<?php echo get_template_directory_uri() ?>/images/poisk.png"></a></div>
		</div>
		<div class="header_container">
			<div class="head_menu">
				<ul>
					<li><a href="#main">Главная</a></li>
					<li><a href="#onas">О нас</a></li>
					<li><a href="#katalog">Каталог</a></li>
					<li><a href="#skladi">Склады</a></li>
					<li><a href="#statia">Статьи</a></li>
					<li><a href="#otzivi">Отзывы</a></li>
					<li><a href="#contacts">Контакты</a></li>
				</ul>
			</div>
			<div class="top_zagol1"><h1>“АГРО-ТУРБО” предлагает</h1></div>
			<div class="top_zagol2"><h1>Турбины</h1></div>
			<div class="mobile_text"><p>Для любых видов легковых и грузовых автомобилей, сельхоз техники и водного транспорта</p></div>
			<div class="top_scachat">
				<p>Вы можете задать вопрос<br>по нашей продукции, нажав на кнопку.</p>
				<div class="top_button" id="button1">Позвоните мне<img src="<?php echo get_template_directory_uri() ?>/images/top_strelka.png"></div>
			</div>
		</div>
		<div class="header_text">
			<h3>для любых видов легковых и грузовых автомобилей, сельхоз техники и водного транспорта</h3>
			<p>Основным направлением “Агро-турбо” является продажа турбин как отечественного, так и импортного производства для самых распространенных типов и видов транспорта, как в розницу, так и оптом. Мы можем предложить вам турбокомпрессоры для тракторов, комбайнов (как отечественных, так и импортных), легковых автомобилей, промтехники и турбоукладчиков. Всегда в наличии турбины ККК, Schwitzer, Garrett, IHI, Holset.</p>
		</div>
	</div>
	<div class="header_slider">
		<div class="header_slider_content">
			
		</div>
		<div class="slider_arrows">
			<div class="slide_arrow_left"><div class="slider_strelka_ris"></div></div>
			<div class="slide_arrow_right"><div class="slider_strelka_ris"></div></div>
		</div>
	</div>
	<div class="preim" id="onas">
		<h2>Наши преимущества</h2>
		<div class="preim_container">
			<div class="preim_item">
				<div class="item item1_1"></div>
				<div class="item2 item1_2"></div>
				<h3>Бесплатная доставка</h3>
				<p>Мы отвезём Вам товар в любую точку Украины</p>
			</div>
			<div class="preim_item">
				<div class="item item2_1"></div>
				<div class="item2 item2_2"></div>
				<h3>Новый товар</h3>
				<p>Всегда только новый товар, никакого б/у</p>
			</div>
			<div class="preim_item">
				<div class="item item3_1"></div>
				<div class="item2 item3_2"></div>
				<h3>Гарантия</h3>
				<p>Мы заменим или вернём Вам товар, если он у Вас не заработает</p>
			</div>
			<div class="preim_item">
				<div class="item item4_1"></div>
				<div class="item2 item4_2"></div>
				<h3>Оптовые продажи</h3>
				<p>Работаем как в розницу, так и оптом, для оптовых клиентов у нас специальные скидки</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="zvonok">
		<div  id="zakaz_form" class="zvonok_container">
			<h2>Хотите узнать более подробно?<br>Оставьте телефон и мы с Вами свяжемся</h2>
			<form name="form_zvonok1" id="form_zvonok1" method="post">
				<input type="text" name="lid_name">
				<p class="mob_pod_pole">имя</p>
				<input type="text" name="lid_phone">
				<p class="mob_pod_pole">телефон*</p>
				<input type="hidden" name="form_number" value="5">
				<input type="submit" value="Позвоните мне">
				<div class="clear"></div>
				<p class="pod_pole">имя</p>
				<p class="pod_pole">телефон*</p>
			</form>
			<p class="p_obz">Поля * обязательны для заполнения</p>
		</div>
	</div>
	<div class="tovary" id="katalog">
		<h2>Наши Товары</h2>
		<div class="tovar_search">
				<form method="get" class="form_search" action="<?php bloginfo( 'url' ); ?>#katalog">
				    <input type="text" name="s" id="s" onblur="if (this.value == '') {this.value = 'Введите название товара для поиска';}" onfocus="if (this.value == 'Введите название товара для поиска') {this.value = '';}" value="Введите название товара для поиска" class="searchfield" required>
				    <input type="submit" value="Поиск">
			      </form>
		</div>
		<div class="tovar_proizv">
			<div class="proizv_zag"><p>Производитель:</p></div>
			<div class="proizv_nazv">
				<?php
					$categories = get_categories(array(
						'orderby' => 'ID',
						'order' => 'ASC',
						'parent'  => 2
					));
					foreach( $categories as $category ){
						echo('<label><input class="checkbox" type="checkbox" name="'.$category->name.'"><span>'.$category->name.'</span><div id="cat_id">'.$category->cat_ID.'</div></label>');
					}
				?>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="proizv_polosa"></div>
		</div>
		<div class="kat_zag">Каталог</div>
		<div class="kat_menu">
			<ul>
				<?php
					$categories = get_categories(array(
						'orderby' => 'ID',
						'order' => 'ASC',
						'parent'  => 3
					));
					foreach( $categories as $category ){
						echo('<li>'.$category->name.'<div id="cat_id">'.$category->cat_ID.'</div></li>');
					}
				?>
			</ul>
		</div>
		<div class="katalog">
			<div class="katalog_content">
				<?php
					$args = array( 'posts_per_page' => 15, 'cat' => '-1, -35' );
					 $my_posts = get_posts($args); 
					 foreach( $my_posts as $post ): ?> <?php setup_postdata($post); ?>
					 	<?php 
					 		$category = get_the_category(); 
					 		if ( cat_is_ancestor_of(2, $category[0]->term_id) ){$catname[0] = $category[0]->term_id;}
					 		elseif( cat_is_ancestor_of(2, $category[1]->term_id) ){$catname[0] = $category[1]->term_id;}
					 		elseif( cat_is_ancestor_of(2, $category[2]->term_id) ){$catname[0] = $category[2]->term_id;}
					 		elseif( cat_is_ancestor_of(2, $category[3]->term_id) ){$catname[0] = $category[3]->term_id;}
					 		if ( cat_is_ancestor_of(3, $category[0]->term_id) ){$catname[1] = $category[0]->term_id;}
					 		elseif ( cat_is_ancestor_of(3, $category[1]->term_id) ){$catname[1] = $category[1]->term_id;}
					 		elseif ( cat_is_ancestor_of(3, $category[2]->term_id) ){$catname[1] = $category[2]->term_id;}
					 		elseif ( cat_is_ancestor_of(3, $category[3]->term_id) ){$catname[1] = $category[3]->term_id;}
					 	?>
						<div class="katalog_item" id="post-<? the_id(); ?>">
							<a href="<?php the_permalink(); ?>"><div class="katalog_item_img" id="<?php echo $catname[0] ?>"><?php echo the_post_thumbnail('post-thumbnail'); ?><div class="pokr_img"></div></div></a>
							<a class="katalog_item_href" href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
							<div class="katalog_item_cena" id="<?php echo $catname[1] ?>">
								<span><?php echo (get_post_meta($post->ID, 'Цена', true)); ?> грн</span>
								<button class="katalog_item_button">Купить</button>
							</div>
						</div>
					<?php endforeach;
					wp_reset_postdata();
				?>		
			</div>
			<div class="clear"></div>
			<button class="show_more">Показать ещё</button>
		</div>
		<div class="clear"></div>
	</div>
	<div class="zvonok">
		<div  id="zakaz_form" class="zvonok_container">
			<h2>Хотите узнать весь ассортимент продукции сейчас?<br>Оставьте e-mail и получите прайс-лист.</h2>
			<form name="form_zvonok2" id="form_zvonok2" method="post" onsubmit="yaCounter43516969.reachGoal('zayavka');">
				<input type="text" name="lid_name">
				<p class="mob_pod_pole">имя</p>
				<input type="text" name="lid_mail">
				<p class="mob_pod_pole">e-mail *</p>
				<input type="hidden" name="form_number" value="6">
				<input type="submit" value="Получить прайс лист">
				<div class="clear"></div>
				<p class="pod_pole">имя</p>
				<p class="pod_pole">e-mail*</p>
			</form>
			<p class="p_obz">Поля * обязательны для заполнения</p>
		</div>
	</div>
	<div class="skladi" id="skladi">
		<h2>Наши склады</h2>
		<div class="img_sklad sklad_left">
			<img src="<?php echo get_template_directory_uri() ?>/images/sklad1.jpg">
			<div class="podr"><p>Подробнее</p></div>
		</div>
		<div class="img_sklad sklad_right">
			<img src="<?php echo get_template_directory_uri() ?>/images/sklad2.jpg">
			<div class="podr"><p>Подробнее</p></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="statii" id="statii">
		<h2>Статьи</h2>
		<div class="clear"></div>
		<?php
			$args = array( 'posts_per_page' => 300, 'cat' => 35 );
			$my_posts = get_posts($args); 
			foreach( $my_posts as $post ): ?> <?php setup_postdata($post); 
		?>
		<div id="statia" class="statia">
			<h3><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
			<div class="statii_content"><?php the_content(); ?></div>
			<div class="ssil_podr"><a href="<?php the_permalink(); ?>">Прочитать подробнее</a></div>
		</div>
		<?php 
			endforeach;
			wp_reset_postdata();
		?>
		<div class="clear"></div>
	</div>
	<div class="otzivi" id="otzivi">
		<h2>Отзывы</h2>
		<div class="otziv">
			<img src="<?php echo get_template_directory_uri() ?>/images/otziv/alexandr.jpg">
			<h4>Александр</h4>
			<p>“Все пришло быстро. Турбиной пользуюсь около года и через год решил написать отзыв. Сбоев в работе никаких нет. Думаю, еще лет 10 прослужит.”</p>
			<div class="clear"></div>
		</div>
		<div class="otziv">
			<img src="<?php echo get_template_directory_uri() ?>/images/otziv/evgen.jpg">
			<h4>Евгений</h4>
			<p>“Продавец очень отзывчивый. Объяснил что и куда ставить, скинул обучающее видео. Вобщем, я поставил все - работает круто!”</p>
			<div class="clear"></div>
		</div>
		<div class="otziv">
			<img src="<?php echo get_template_directory_uri() ?>/images/otziv/viktor.jpg">
			<h4>Александр</h4>
			<p>“Я гонщик со стажем. Заказал турбину у данной компании и не разу об этом не пожалел. Сразу впечатлило качество. Работает все просто отлично!<br><br>В дальнейшем буду советовать знакомым.”</p>
			<div class="clear"></div>
		</div>
		<button>Оставить отзыв</button>
	</div>
	<div id="contacts" class="karta"><iframe data-aload src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2728.1657155416233!2d35.38175071585324!3d46.860111147237134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c2b200eb4d4ead%3A0x57ffeea926163ec0!2z0L_RgNC-0YHQvy4gNTAg0LvQtdGCINCf0L7QsdC10LTRiywgMzYvOCwg0JzQtdC70LjRgtC-0L_QvtC70YwsINCX0LDQv9C-0YDQvtC20YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDcyMzAw!5e0!3m2!1sru!2sua!4v1609150845986!5m2!1sru!2sua" width="100%" height="650" frameborder="0" style="border:0; display: none;" allowfullscreen=""></iframe></div>
	<div class="contacts">
		<div class="contacts_container">
			<p>Контактное лицо: Роман Викторович</p><br>
			<p>Украина, Запорожская область, Мелитополь<br>пр-т 50-Лет Победы 8, офис 77</p><br>
			<p><a href="tel:+380974267915">+38(097) 426-79-15</a> Роман<br><br><br>
			<p>agroturbo777@gmail.com</p><br><br><br>
			<p style="text-align:center"><span style="color:#11213e">если у вас остались вопросы,<br>вы можете задать их,<br>нажав на кнопку.</span></p>
			<button>Задать вопрос</button>
		</div>
	</div>
	<div class="clear"></div>
	<script src="<?php echo get_template_directory_uri() ?>/jquery-3.1.0.min.js"></script>
	<script type="text/javascript">
		$(window).on('load', function (){
			var slider_html="";
			if($(window).width()>1020){
				slider_html="<img class='header_slide1' src='<?php echo get_template_directory_uri() ?>/images/head_slider/1.jpg' async><img class='header_slide2' src='<?php echo get_template_directory_uri() ?>/images/head_slider/2.jpg' async><img class='header_slide3' src='<?php echo get_template_directory_uri() ?>/images/head_slider/3.jpg' async>";
			} else if($(window).width()>540){
				slider_html="<img class='header_slide1' src='<?php echo get_template_directory_uri() ?>/images/head_slider/1_1020.jpg' async><img class='header_slide2' src='<?php echo get_template_directory_uri() ?>/images/head_slider/2_1020.jpg' async><img class='header_slide3' src='<?php echo get_template_directory_uri() ?>/images/head_slider/3_1020.jpg' async>";
			} else {
				slider_html="<img class='header_slide1' src='<?php echo get_template_directory_uri() ?>/images/head_slider/1_540.jpg' async><img class='header_slide2' src='<?php echo get_template_directory_uri() ?>/images/head_slider/2_540.jpg' async><img class='header_slide3' src='<?php echo get_template_directory_uri() ?>/images/head_slider/3_540.jpg' async>";
			}
			$(".header_slider_content").html(slider_html);
		})
	</script>
	<script src="<?php echo get_template_directory_uri() ?>/jquery.touchSwipe.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/jQueryRotateCompressed.2.2.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/script.js?v=1.01"></script>
	<script src="<?php echo get_template_directory_uri() ?>/my.js?v=1.01"></script>
<?php get_footer(); ?>