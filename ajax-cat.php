<?php
	include('wp-load.php');
	$cat_id='-1,-35';
	if($_POST['cat_id']!=''&&$_POST['cat_id']!='0'){
		$cat_id.=','.$_POST['cat_id'];
	}
	if(!empty($_POST['offset'])){
		$offset=$_POST['offset'];
	} else {
		$offset='0';
	}
	$args = array( 'posts_per_page' => 15, 'cat' => $cat_id, 'offset' => $offset );
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