<?php
/**
 * Template Name: Личный кабинет студента
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Studyinczech
 */

get_header();
?>

<main class="officer-main">
  <div class="uk-container">
    <div class="uk-grid-small"
         uk-grid>
         <?php get_sidebar(); ?>
      <div class="uk-width-expand">
        <div class="bcg_white user-program uk-margin-bottom">
          <div class="uk-grid-small"
               uk-grid>
            <div class="uk-width-1-6 text-field">
              <p>Программа:</p>
              <p>Дата курсов:</p>
              <p>Стоимость:</p>
            </div>
            <div class="uk-width-5-6 field-value">
              <p>Брно — “Эксклюзив”</p>
              <p>15 сентября, 2016</p>
              <p>8 999 €</p>
            </div>
          </div>
        </div>
        <div class="bcg_white user-profile-plan">
          <ul>
            <li>Выбор программы обучения</li>
            <li class="active-point">Заполнение анкеты
              <ul>
                <li>Теперь Вам необходимо внимательно заполнить анкету, которая
                  впоследствии будет отправлена на рассмотрение в консульство.</li>
              </ul>
            </li>
            <li class="inactive">Подписать договор</li>
            <li class="inactive">Предоплата курсов</li>
          </ul>
        </div>
      </div>
      <div class="uk-width-medium">
        <div class="user-profile-right">
          <div class="bcg_white">
            <img class="avatar uk-float-left uk-border-circle"src="<?php echo get_template_directory_uri()?>/assets/img/user_logo.jpg" alt="">
            <div class="uk-float-right uk-align-left uk-margin-small-top">
              <p class="uk-text-bold">Яснев Данил</p>
              <p><span>Номер анкеты: 14204</span><span uk-tooltip="title: Hello World; pos: bottom" title="" aria-expanded="false">?</span></p>

            </div>
            <div class="uk-clearfix"></div>
          </div>
          <div class="problem">
            <h2>Возникли трудности с анкетой?</h2>
            <p><a href="/">Напишите нам</a> или <a href="/">закажите звонок</a> и
              мы проконсультируем по любому
              интересующему Вас вопросу в
              кратчайшие сроки.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>



<?php

get_footer();
