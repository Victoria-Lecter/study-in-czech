
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Studyinczech
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">



			<?php
        // Start the loop.
        while ( have_posts() ) : the_post();

				if ( in_category( 16 )) {
					// действия, если пост относится к категории Блог
					get_template_part( 'template-parts/content', 'blog' );
				}
				elseif ( in_category( 22 )) {
					// действия, если пост относится к категории Университеты
					get_template_part( 'template-parts/content', 'uni' );
				}
				elseif ( in_category( 29 )) {
					// действия, если пост относится к категории Общежития
					get_template_part( 'template-parts/content', 'dormitory' );
				}

				elseif ( in_category( 25 )) {
					// действия, если пост относится к категории Комплексные программы
					get_template_part( 'template-parts/content', 'program' );
				}

				else {
					// если никакие из предыдущих условий не выполнены.
				}

            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */


        // End the loop.
        endwhile;
        ?>

<?php

get_footer();
