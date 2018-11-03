<?php
/**
 * Template Name: Университеты
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
             class="uk-child-width-1-2 uk-grid-small">
             <?php
						 $query = new WP_Query('cat=22');
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
                  <h3>Государственный вуз <span class="uk-align-right">8 факультетов</span></h3>
                </div>
                <div class="shade-on-image"></div>
              </div>
              <div style="overflow: hidden; height: 150px">
                <div class="text"
                     style="overflow: hidden; height: 120px">
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
          <div class="uk-width-1-2">
            <div class="uk-width-2-3">
              <div class="problem">
                <h2>Не можете определиться
                с университетом?</h2>
                <p><a href="#">Напишите нам</a> и мы
                  поможем Вам выбрать
                  подходящую программу.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
	</div>
	</div>
</main>

<?php

get_footer();
