<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/images/favicon.png">
	<title> <?php wp_title('|', true, 'right'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?v=1.01" type="text/css" media="all" async>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/main.css?v=1.01" type="text/css" media="all" async>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media.css?v=1.01" type="text/css" media="all" async>
	<script src="<?php echo get_template_directory_uri() ?>/jquery-3.1.0.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/jQueryRotateCompressed.2.2.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/script.js?v=1.01" async></script>
	<script src="<?php echo get_template_directory_uri() ?>/my.js?v=1.01" async></script>
</head>
<body>

	<?php get_header(); ?>
	<div class="header">
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
		<img class="header_slide1" src="<?php echo get_template_directory_uri() ?>/images/head_slider/1.jpg" async>
		<img class="header_slide2" src="<?php echo get_template_directory_uri() ?>/images/head_slider/2.jpg" async>
		<img class="header_slide3" src="<?php echo get_template_directory_uri() ?>/images/head_slider/3.jpg" async>
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
				<input type="text" name="lid_phone">
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
				<form method="get" action="<?php bloginfo( 'url' ); ?>#katalog">
				    <input type="text" name="s" id="s" onblur="if (this.value == '') {this.value = 'Введите название товара для поиска';}" onfocus="if (this.value == 'Введите название товара для поиска') {this.value = '';}" value="<?php echo $_GET['s']; ?>" class="searchfield">
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
			<?php if ( have_posts() ) : ?>
				<h3><?php printf( __( 'Результаты поиска для: %s'), '<span>' . get_search_query() . '</span>' ); ?></h3>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="katalog_item" id="post-<? the_id(); ?>">
						<a href="<?php the_permalink(); ?>"><div class="katalog_item_img" id="<?php echo $catname[0] ?>"><?php echo the_post_thumbnail('small'); ?><div class="pokr_img"></div></div></a>
						<a class="katalog_item_href" href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
						<div class="katalog_item_cena" id="<?php echo $catname[1] ?>">
							<span><?php echo (get_post_meta($post->ID, 'Цена', true)); ?> грн</span>
							<button class="katalog_item_button">Купить</button>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<h3>По запросу <?php echo $_GET['s']; ?> ничего не найдено. <br><a href="/#katalog">Вернуться назад</a></h3>	
			<?php endif; ?>		
		</div>
		<div class="clear"></div>
	</div>
	<div class="zvonok">
		<div  id="zakaz_form" class="zvonok_container">
			<h2>Хотите узнать весь ассортимент продукции сейчас?<br>Оставьте e-mail и получите прайс-лист.</h2>
			<form name="form_zvonok2" id="form_zvonok2" method="post" onsubmit="yaCounter43516969.reachGoal('zayavka');">
				<input type="text" name="lid_name">
				<input type="text" name="lid_mail">
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
		<button onclick="yaCounter43516969.reachGoal('knopka');">Оставить отзыв</button>
	</div>
	<div id="contacts" class="karta"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=gOSw_83qDLHG1l5pHFsaUC7CyH_eAsvp&amp;width=100%25&amp;height=650&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true" async></script></div>
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
<?php get_footer(); ?>