<?php
/**
 * Template Name: Ответы на частые вопросы
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
        $query = new WP_Query('cat=33');
        // var_dump($query);
        // Цикл
        if( $query->have_posts() ) {
         while ( $query->have_posts() ) {
           $query->the_post();?>
        <div class="answers">
          <div class="toggle-block">
            <div class="toggle-top">
              <h2><?=get_the_title()?> <span class="uk-align-right" uk-icon="chevron-down"></span></h2>
            </div>
            <div class="toggle-content"
                 style="display: none;">
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
      </div>
      <div class="uk-width-1-5">
        <div class="side-right">
          <h2>Не нашли нужный ответ
на свой вопрос?</h2>
          <p><a href="">Напишите нам</a> или <a href="">закажите
            звонок</a> и мы проконсультируем
            по любому интересующему Вас
            вопросу в кратчайшие сроки</p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php

get_footer();
