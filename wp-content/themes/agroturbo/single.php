<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/images/favicon.png">
	<title> <?php wp_title('|', true, 'right'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?v=1.01" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style_single.css?v=1.01" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media.css?v=1.01" type="text/css" media="all">
</head>
<body>
	<?php 
		get_header();
		global $more;
		while ( have_posts() ) : the_post();
		$cat = get_the_category();
	?>
	<div class="tovar_container">
		<?php if( $cat[0]->cat_ID!=35 ): ?>
		<div class="gallery_short">
			<div class="gallery_image"></div>
			<div class="gallery_miniatures">
				<div class="miniatures_left"><div class="miniatures_bg"></div></div>
				<?php	echo do_shortcode('[gallery size=thumbnail link=file exclude='.get_post_thumbnail_id().']'); ?>

				<div class="miniatures_right"><div class="miniatures_bg"></div></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="gallery_zag">
			<h1><?php wp_title(' ', true, 'right'); ?></h1>
			<?php $more = 0; the_content(); ?>
			<div class="price">Цена: <span><?php echo (get_post_meta($post->ID, 'Цена', true)); ?></span> грн</div>
			<button>Купить</button>
		</div>
		<div class="clear"></div>
		<?php 
			endif;
		?>		
		<div class="content">
			<?php	
				$more = 1;
				the_content();
				endwhile;
			 ?>
			 <?php if( $cat[0]->cat_ID!=35 ): ?>
			 	<p><strong>Информация для заказа: </strong><?php echo (get_post_meta($post->ID, 'Информация для заказа', true)); ?></p>
			 <?php endif;	?>	
		 </div>
	 </div>
	<script src="<?php echo get_template_directory_uri() ?>/jquery-3.1.0.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/jquery.touchSwipe.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/jQueryRotateCompressed.2.2.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/script.js?v=1.01"></script>
	<script src="<?php echo get_template_directory_uri() ?>/single.js?v=1.01"></script>
<?php get_footer(); ?>