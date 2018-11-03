<?php
/**
 * Template Name: Партнеры
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
        <div class="uk-child-width-1-3 "
             uk-heigh-match
             uk-grid>
             <?php
             $query = new WP_Query('cat=35');
             // var_dump($query);
             // Цикл
             if( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();?>
          <div>
            <div class="partner-card bcg_white">
              <div class="image-wrap uk-flex">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
              </div>
                <div class="partner-card-bottom">
                  <h2 class="uk-inline-block"><?=get_the_title()?></h2>
                  <a class="uk-inline-block" href="<?php echo get_post_meta($post->ID, 'website', true); ?>"><?php echo get_post_meta($post->ID, 'website-name', true); ?></a>
                  <p><?=get_the_content()?></p>
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
              <div>
                <div class="side-right">
                  <h2>Хотите стать нашим
партнером?</h2>
                  <p><a href="">Напишите нам</a> и мы обсудим детали
                    нашего партнерства.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
</main>
<?php

get_footer();
