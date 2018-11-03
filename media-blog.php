<?php
/**
 * Template Name: Страница блога
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Studyinczech
 */

get_header();
?>


<main class="officer-main">
	<div class="uk-container">
		<div class="uk-grid">
			<?php get_sidebar(); ?>

			<div class="uk-width-4-5">
				<div uk-grid
						 class="uk-child-width-1-3 uk-grid-small blog-page">
						 <?php
						 $query = new WP_Query('cat=16');
						 // var_dump($query);
						 // Цикл
						 if( $query->have_posts() ) {
						 	while ( $query->have_posts() ) {
								$query->the_post();?>

					<div>
						<a href="<?php echo get_the_permalink(); ?>" class="uk-link-reset">
						<div class="card uk-card uk-card-hover">
							<h2><?=get_the_title()?></h2>
							<div class="uk-cover-container">
								<canvas width="" height=""></canvas>
								<img src="<?php echo the_post_thumbnail_url(); ?>" alt="" uk-cover>
								<div class="uk-overlay uk-position-bottom uk-light">
									<p class="uk-text-uppercase"><?php echo get_the_date(); ?><span class="uk-align-right"><?php echo getPostViews(get_the_ID()); ?></span></p>
								</div>
								<div class="shade-on-image"></div>
							</div>
							<div style="overflow: hidden; height: 175px">

								<div class="text"
										 style="overflow: hidden; height: 140px">
									<p><?=get_the_content()?></p>
									<div class="fade"></div>
								</div>
							</div>
						</div>
					</a>
					</div>
					<?php

				}
			} else {
				// Постов не найдено
			}
			/* Возвращаем оригинальные данные поста. Сбрасываем $post. */
			wp_reset_postdata();
			?>
				</div>
			</div>
		</div>
	</div>
	</div>
</main>

<?php

get_footer();
