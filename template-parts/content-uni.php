<main class="officer-main">
  <div class="uk-container">
    <div class="uk-grid">
      <?php get_sidebar(); ?>
      <div class="uk-width-3-5">
        <div class="bcg_white">
          <div class="uk-cover-container uk-inline bcg-for-overlay">
            <canvas width="800" height="300"></canvas>
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" uk-cover>
            <div class="uk-position-bottom uk-overlay uk-text-center uk-padding-remove-bottom">
              <h2><?php single_post_title(); ?></h2>
            </div>
            <div class="shade-on-image"></div>
          </div>
          <div class="image-line uk-child-width-1-5">
            <div class="galery_img">
              <?php if( get_field('img-gallery-1') ): ?>

	               <img src="<?php the_field('img-gallery-1'); ?>" />

              <?php endif; ?>
            </div>
              <div class="galery_img">
                <?php if( get_field('img-gallery-2') ): ?>

  	               <img src="<?php the_field('img-gallery-2'); ?>" />

                <?php endif; ?>
            </div>
                <div class="galery_img">
                  <?php if( get_field('img-gallery-3') ): ?>

    	               <img src="<?php the_field('img-gallery-3'); ?>" />

                  <?php endif; ?>
            </div>
                  <div class="galery_img">
                    <?php if( get_field('img-gallery-4') ): ?>

      	               <img src="<?php the_field('img-gallery-4'); ?>" />

                    <?php endif; ?>
                    <a href="#">
                      <svg aria-hidden="true" data-prefix="far" data-icon="camera" class="svg-inline--fa fa-camera fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M342.7 144H464v288H48V144h121.3l24-64h125.5l23.9 64zM324.3 32h-131c-20 0-37.9 12.4-44.9 31.1L136 96H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48h-88l-14.3-38c-5.8-15.7-20.7-26-37.4-26zM256 408c-66.2 0-120-53.8-120-120s53.8-120 120-120 120 53.8 120 120-53.8 120-120 120zm0-192c-39.7 0-72 32.3-72 72s32.3 72 72 72 72-32.3 72-72-32.3-72-72-72z"></path></svg>
                      <br>
                      Все фотографии
                    </a>
                  </div>
                </div>
            <div class="text-information">
              <h3>Общая информация</h3>
              <div>
                <div class="uk-align-left">
                  <?php if( get_field('side-image') ): ?>

                     <img class="uk-align-right" src="<?php the_field('side-image'); ?>" />

                  <?php endif; ?>
                  <p></p>
                  <p><?php the_content(); ?></p>
                </div>
                <div style="clear: both;">
                </div>
              </div>
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p class="info">
                <img class="icon" src="<?php echo get_template_directory_uri()?>/assets/img/ICON1.png" alt="">
                Обучение в данном университете бесплатное!</p>
                <div class="text-block">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="uk-cover-container">
                  <canvas width="100%" height="200px"></canvas>
                  <?php if( get_field('bcg-image-subtitle') ): ?>

                     <img uk-cover src="<?php the_field('bcg-image-subtitle'); ?>" />

                  <?php endif; ?>
                  <div class="gradient"></div>
                  <div class="uk-overlay uk-position-center uk-light">
                    <h2>Факультеты и специальности</h2>
                  </div>
                </div>
                <div>
                  <ul class="list columns">
                    <li><b>Факультет предпринимательства</b>
                      <ul class="list list2">
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                      </ul>
                    </li>
                    <li><b>Факультет электротехники и
коммуникационных технологий</b>
                      <ul class="list list2">
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Английский язык в области электротехники
                          и компьютерных наук</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                      </ul>
                    </li>
                    <li><b>Факультет предпринимательства</b>
                      <ul class="list list2">
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                      </ul>
                    </li>
                    <li><b>Факультет электротехники и
коммуникационных технологий</b>
                      <ul class="list list2">
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                        <li>Экономика и менеджмент</li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </div>
            <div class="uk-text-right bottom-border-top">
              <p>
                <a href="#">Задать вопрос</a> или
                <button class="button accent_button" type="button" name="button">Заполнить анкету</button>
              </p>
            </div>
          </div>
        </div>
        <div class="back-link uk-width-1-5 uk-text-center">
          <a href="<?php echo get_page_link(54); ?>">
              <svg aria-hidden="true" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
              <span>Назад</span>
            </a>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>
