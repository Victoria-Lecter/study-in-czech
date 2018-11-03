<?php
/**
 * Template Name: Проживание
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
<div class="uk-width-4-5 officer-middle">
  <div uk-grid>

    <div class="uk-width-1-3 uk-padding-remove uk-flex-inline accomodation">
      <button class="btn_transparent" type="button" name="button">Брно</button>
      <button class="btn_transparent active" type="button" name="button">Прага</button>
      <button class="btn_transparent" type="button" name="button">Другие</button>
    </div>
    <div class="uk-width-1-1 uk-padding-remove dormitory-block">
      <div uk-grid
           class="uk-grid-medium uk-child-width-1-2">
           <?php
           $query = new WP_Query('cat=29');
           // var_dump($query);
           // Цикл
           if( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();?>
        <div>
          <div class="uk-visible-toggle bcg_white">
            <h2 class="uk-text-bold"><?=get_the_title()?></h2>
            <div class="uk-position-relative uk-light"
                 uk-slideshow>

              <ul class="uk-slideshow-items">
                <li><img src="<?php echo the_post_thumbnail_url(); ?>" alt="" uk-cover></li>
                <li>
									<?php if( get_field('gallery_1') ): ?>

			               <img uk-cover src="<?php the_field('gallery_1'); ?>" />

		              <?php endif; ?>
                </li>
                <li>
									<?php if( get_field('gallery_2') ): ?>

			               <img uk-cover src="<?php the_field('gallery_2'); ?>" />

		              <?php endif; ?>
                </li>
                <li>
									<?php if( get_field('gallery_3') ): ?>

			               <img uk-cover src="<?php the_field('gallery_3'); ?>" />

		              <?php endif; ?>
                </li>
                <li>
									<?php if( get_field('gallery_4') ): ?>

			               <img uk-cover src="<?php the_field('gallery_4'); ?>" />

		              <?php endif; ?>
                </li>
              </ul>

              <div class=" dotnav-wrap uk-position-bottom-center uk-position-small">
                <ul class="uk-hidden-hover uk-dotnav uk-flex-between uk-flex-center">
                  <li class="uk-width-expand"
                      uk-slideshow-item="0"><a href="#">Item 1</a></li>
                  <li class="uk-width-expand"
                      uk-slideshow-item="1"><a href="#">Item 2</a></li>
                  <li class="uk-width-expand"
                      uk-slideshow-item="2"><a href="#">Item 3</a></li>
                  <li class="uk-width-expand"
                      uk-slideshow-item="3"><a href="#">Item 2</a></li>
                  <li class="uk-width-expand"
                      uk-slideshow-item="4"><a href="#">Item 3</a></li>
                </ul>
              </div>

            </div>

            <ul class="list">
              <li>hddh</li>
            </ul>
            <div class="dormitory-block-bottom">
              <div class="price uk-align-left">
                <p class="uk-text-bold"><?php echo get_post_meta($post->ID, 'price-copy', true); ?></p>
                <p><?php echo get_post_meta($post->ID, 'price-info-copy', true); ?></p>
              </div>
              <!-- <button class="btn_transparent uk-align-right" type="button" name="button">Подробнее</button> -->
							<a class="uk-button uk-button-default uk-align-right uk-link-reset" href="<?php echo get_the_permalink(); ?>">Подробнее</a>
              <div style="clear: both;">
              </div>
            </div>
          </div>
        </div>
        <?php

      }
    } else {
      // Постов не найдено
    }
    /* Возвращаем оригинальные данные поста. Сбрасываем $post. */
    wp_reset_postdata();
    ?>
        <!-- <div>
          <div class="uk-visible-toggle bcg_white">
            <h2>Общежитие <span class="uk-text-bold">“Young Space”</span></h2>
            <div class="uk-position-relative uk-light"
                 uk-slideshow>

              <ul class="uk-slideshow-items">
                <li><img src="img/dormitory.jpg" alt="" uk-cover></li>
                <li><img src="img/bed.jpg" alt="" uk-cover></li>
                <li><img src="img/prague.jpg" alt="" uk-cover></li>
                <li><img src="img/dormitory.jpg" alt="" uk-cover></li>
                <li><img src="img/bed.jpg" alt="" uk-cover></li>
              </ul>

              <div class=" dotnav-wrap uk-position-bottom-center uk-position-small">
                <ul class="uk-hidden-hover uk-dotnav uk-flex-between uk-flex-center">
                  <li class="uk-width-expand"
                      uk-slideshow-item="0"><a href="#">Item 1</a></li>
                  <li class="uk-width-expand"
                      uk-slideshow-item="1"><a href="#">Item 2</a></li>
                  <li class="uk-width-expand"
                      uk-slideshow-item="2"><a href="#">Item 3</a></li>
                  <li class="uk-width-expand"
                      uk-slideshow-item="3"><a href="#">Item 2</a></li>
                  <li class="uk-width-expand"
                      uk-slideshow-item="4"><a href="#">Item 3</a></li>
                </ul>
              </div>

            </div>

            <ul class="list">
              <li>Высокоскоростной Wi-FI</li>
              <li>Прачечная с сушкой (1 стирка — <b>60 крон</b> или <b>2 €</b>)</li>
              <li>Тренажерный зал с акклиматизацией</li>
              <li>Летняя террасса для отдыха</li>
            </ul>
            <div class="dormitory-block-bottom">
              <div class="price uk-align-left">
                <p>от <span class="uk-text-bold">122 €</span> или <span class="uk-text-bold">3 300 крон</span></p>
                <p>*в месяц</p>
              </div>
              <button class="btn_transparent uk-align-right" type="button" name="button">Подробнее</button>
              <div style="clear: both;">
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>
</div>
</div>
</main>
<?php

get_footer();
