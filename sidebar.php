<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Studyinczech
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="sidebar-left uk-width-1-5">
	<?php dynamic_sidebar( 'sidebar-left' ); ?>
	<div class="blog">
		<p><?php echo get_cat_name(26);?></p>
		<?php
		$query = new WP_Query('cat=26');
		// var_dump($query);
		// Цикл
		if( $query->have_posts() ) {
		 while ( $query->have_posts() ) {
			 $query->the_post();?>

		<p><a href="<?php echo get_the_permalink(); ?>"><?=get_the_title()?></a></p>
		<p>
			<?php echo getPostViews(get_the_ID()); ?>
		</p>
		<?php

	}
	} else {
		?>

	<span>Постов не найдено</span>
	<?php
	}

	/* Возвращаем оригинальные данные поста. Сбрасываем $post. */
	wp_reset_postdata();
	?>
	</div>
</aside>
