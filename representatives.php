<?php
/**
 * Template Name: Представители
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
      <div class="uk-width-3-5">
        <?php
        $query = new WP_Query('cat=30');
        // var_dump($query);
        // Цикл
        if( $query->have_posts() ) {
         while ( $query->have_posts() ) {
           $query->the_post();?>
        <div class="representative bcg_white">
          <div class="representative-top">
            <h2><b><?=get_the_title()?></b><img class="uk-align-right" src="<?php echo the_post_thumbnail_url(); ?>" alt=""></h2>
          </div>
          <div class="representative-bottom">
            <div class="uk-grid-small"
                 uk-grid>
              <div class="uk-width-1-6">
                <p>Адрес:</p>
              </div>
              <div class="uk-width-5-6">
                <p><?php echo get_post_meta($post->ID, 'adress', true); ?></p>
                <a href="<?php echo get_post_meta($post->ID, 'show-on-map', true); ?>">Посмотреть на карте</a>
              </div>
              <div class="uk-width-1-6">
                <p>Телефон:</p>
              </div>
              <div class="uk-width-5-6">
                <p><?php echo get_post_meta($post->ID, 'name', true); ?></p>
                <p><?php echo get_post_meta($post->ID, 'phone-1', true); ?></p>
                <p><?php echo get_post_meta($post->ID, 'phone-2', true); ?></p>
                <p><?php echo get_post_meta($post->ID, 'phone-3', true); ?></p>
              </div>
              <div class="uk-width-1-6">
                <p>E-mail:</p>
              </div>
              <div class="uk-width-5-6">
                <p><?php echo get_post_meta($post->ID, 'e-mail', true); ?></p>
              </div>
              <div class="uk-width-1-6">
                <p><?php echo get_post_meta($post->ID, 'web-site', true); ?></p>
              </div>
              <div class="uk-width-5-6">
                <a href=""><?php echo get_post_meta($post->ID, 'web-site-link', true); ?></a>
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
      </div>
      <div class="uk-width-1-5">
        <div class="side-right">
          <h2>Хотите стать нашим
представителем?</h2>
          <p><a href="#">Напишите нам</a> и мы обсудим детали
            нашего сотрудничества.
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php

get_footer();
