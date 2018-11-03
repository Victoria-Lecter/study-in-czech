<?php
/**
 * Template Name: Контакты
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
        <div class="about-us uk-grid-medium uk-child-width-1-3"
             uk-grid
             uk-height-match>
          <div class="uk-width-2-3">
            <div class="google-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.089732574224!2d16.553917665372133!3d49.180379537378236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471295d90cc34d99%3A0x7e587a10910e95f0!2sHOTEL+-+FOR+DOGS%2C+CATS+AND+OTHER+ANIMALS!5e0!3m2!1sen!2scz!4v1536852182879" width="100%" height="316" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="">
            <div class="contacts bcg_white">
              <p>Адрес:<span class="uk-display-block">Brno, Rašinova 103/2, 602 00</span></p>
              <p>Адрес:<span class="uk-display-block">Brno, Rašinova 103/2, 602 00</span></p>
              <p>Адрес:<span class="uk-display-block">Brno, Rašinova 103/2, 602 00</span></p>
              <p>Адрес:<span class="uk-display-block">Brno, Rašinova 103/2, 602 00</span></p>
            </div>
          </div>
          <?php
          $query = new WP_Query('cat=34');
          // var_dump($query);
          // Цикл
          if( $query->have_posts() ) {
           while ( $query->have_posts() ) {
             $query->the_post();?>
          <div class="">
            <div class="officer-card bcg_white">
              <img class="uk-border-circle" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
              <p><?=get_the_title()?></p>
              <p><?=get_the_content()?></p>
              <a href="#"><?php echo get_post_meta($post->ID, 'telephone', true); ?></a>
              <a class="uk-display-block" href="#"><?php echo get_post_meta($post->ID, 'email', true); ?></a>
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
        </div>
      </div>
    </div>
  </div>
</main>
<?php

get_footer();
