
<?php
/**
 * Template Name: Комплексные программы
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
        <div class="uk-width-1-5 uk-padding-remove uk-flex-inline accomodation">
          <button class="btn_transparent active" type="button" name="button"><?php echo get_cat_name(27);?></button>
          <button class="btn_transparent" type="button" name="button"><?php echo get_cat_name(28);?></button>
        </div>
        <div class="uk-width-1-1 uk-grid-small"
             uk-grid>
             <?php
             $query = new WP_Query('cat=25');
             // var_dump($query);
             // Цикл
             if( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();?>
          <div class="uk-width-1-2">
            <div class="complex-program">
              <h2><b><?=get_the_title()?></b></h2>
              <p><?=get_the_content()?></p>
              <div class="three-columns">
                <div class="uk-grid-small uk-child-width-1-3"
                     uk-grid>
                     <div>
                       <p><?php echo get_post_meta($post->ID, 'servis-1', true); ?></p>
                     </div>
                     <div>
                       <p><?php echo get_post_meta($post->ID, 'servis-2', true); ?></p>
                     </div>
                     <div>
                       <p><?php echo get_post_meta($post->ID, 'servis-3', true); ?></p>
                     </div>
                </div>
              </div>
              <div class="price"
                   uk-grid>
                <div class="uk-width-1-2">
                  <p><b><?php echo get_post_meta($post->ID, 'price', true); ?></b><span class="uk-display-block"><?php echo get_post_meta($post->ID, 'price-info', true); ?></span></p>
                </div>
                <div class="uk-width-1-2">
                  <!-- <a class="uk-button uk-button-secondary uk-align-right" href="">Подробнее</a> -->
                  <a class="uk-button uk-button-primary uk-align-right uk-link-reset" href="<?php echo get_the_permalink(); ?>">Подробнее</a>
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
          <!-- <div class="uk-width-1-2">
            <div class="complex-program">
              <h2> Программа — <b>«Университет Экономики»</b></h2>
              <p>Годовой подготовительный курс чешского языка
                предназначен для желающих учиться на одном из шести
                факультетов ВШЕ в Праге. Концепция и содержание
                программы разработаны с учетом требований
                вступительных экзаменов в VŠE в Праге (на бакалаврские и
                магистерские программы).</p>

              <div class="three-columns">

                <div class="uk-grid-small uk-child-width-1-3"
                     uk-grid>
                  <div>
                    <p>560 часов<span class="uk-display-block">чешского языка</span></p>
                  </div>

                  <div class="inactive">
                    <p>500 часов<span class="uk-display-block">чешского языка</span></p>
                    <div uk-drop="pos: left-center">Эта услуга доступна только
                      в программе — <a href="#">"Эксклюзив"</a>
                    </div>
                  </div>
                  <div class="inactive">
                    <p>500 часов<span class="uk-display-block">чешского языка</span></p>
                    <div uk-drop="pos: left-center">Эта услуга доступна только
                      в программе — <a href="#">"Эксклюзив"</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price"
                   uk-grid>
                <div class="uk-width-1-2">
                  <p>Стоимость: от <b>4 299 €</b> <span class="uk-display-block">*возможна оплата частями</span></p>
                </div>
                <div class="uk-width-1-2">
                  <button class="btn-white-blue uk-align-right" type="button" name="button">Подробнее</button>
                </div>
              </div>
            </div>
          </div>
          <div class="uk-width-1-2">
            <div class="complex-program uk-margin-remove-top">
              <h2> Программа — <b>«Университет Экономики»</b></h2>
              <p>Годовой подготовительный курс чешского языка
                предназначен для желающих учиться на одном из шести
                факультетов ВШЕ в Праге. Концепция и содержание
                программы разработаны с учетом требований
                вступительных экзаменов в VŠE в Праге (на бакалаврские и
                магистерские программы).</p>
              <div class="three-columns">
                <div class="uk-grid-small uk-child-width-1-3"
                     uk-grid>
                  <div>
                    <p>560 часов<span class="uk-display-block">чешского языка</span></p>
                  </div>
                  <div class="inactive">
                    <p>500 часов<span class="uk-display-block">чешского языка</span></p>
                    <div uk-drop="pos: left-center">Эта услуга доступна только
                      в программе — <a href="#">"Эксклюзив"</a>
                    </div>
                  </div>
                  <div class="inactive">
                    <p>500 часов<span class="uk-display-block">чешского языка</span></p>
                    <div uk-drop="pos: left-center">Эта услуга доступна только
                      в программе — <a href="#">"Эксклюзив"</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price uk-margin-remove-top"
                   uk-grid>
                <div class="uk-width-1-2">
                  <p>Стоимость: от <b>4 299 €</b> <span class="uk-display-block">*оплата частями невозможна</span></p>
                </div>
                <div class="uk-width-1-2">
                  <button class="btn-white-blue uk-align-right" type="button" name="button">Подробнее</button>
                </div>
              </div>
            </div>
          </div> -->
          <div class="uk-width-1-2">
            <div class="uk-width-2-3">
              <div class="problem">
                <h2>Не можете определиться
                с программой?</h2>
                <p class="uk-width-2-3"><a href="#">Напишите нам</a> и мы
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
