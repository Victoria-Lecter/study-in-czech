<main class="officer-main">
  <div class="uk-container">
    <div class="uk-grid-small"
         uk-grid>
      <?php get_sidebar();?>
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
              <?php if( get_field('gallery_1') ): ?>

	               <img src="<?php the_field('gallery_1'); ?>" />

              <?php endif; ?>
            </div>
              <div class="galery_img">
                <?php if( get_field('gallery_2') ): ?>

  	               <img src="<?php the_field('gallery_2'); ?>" />

                <?php endif; ?>
            </div>
                <div class="galery_img">
                  <?php if( get_field('gallery_3') ): ?>

    	               <img src="<?php the_field('gallery_3'); ?>" />

                  <?php endif; ?>
            </div>
                  <div class="galery_img">
                    <?php if( get_field('gallery_4') ): ?>

      	               <img src="<?php the_field('gallery_4'); ?>" />

                    <?php endif; ?>
                    <a href="#">
                      <svg aria-hidden="true" data-prefix="far" data-icon="camera" class="svg-inline--fa fa-camera fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M342.7 144H464v288H48V144h121.3l24-64h125.5l23.9 64zM324.3 32h-131c-20 0-37.9 12.4-44.9 31.1L136 96H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48h-88l-14.3-38c-5.8-15.7-20.7-26-37.4-26zM256 408c-66.2 0-120-53.8-120-120s53.8-120 120-120 120 53.8 120 120-53.8 120-120 120zm0-192c-39.7 0-72 32.3-72 72s32.3 72 72 72 72-32.3 72-72-32.3-72-72-72z"></path></svg>
                      <br>
                      Все фотографии
                    </a>
                  </div>
                </div>
                <div class="text-information">
                  <p><?php the_content(); ?></p>
                  <!-- <h3 class="uk-margin-remove">Стоимость</h3>
                  <ul class="list uk-margin-remove">
                    <li>
                      <b>3 300 крон</b> или <b>122 €</b> за место в трехместном номере
                      <span class="uk-display-block"><i>+ однократный возвратный залог 3 300 крон или 122 €</i></span>
                    </li>
                    <li>
                      <b>3 300 крон</b> или <b>122 €</b> за место в трехместном номере
                      <span class="uk-display-block"><i>+ однократный возвратный залог 3 300 крон или 122 €</i></span>
                    </li>
                  </ul> -->

                </div>
                <div class="uk-text-right bottom-border-top">
                  <p>
                    <a href="#">Задать вопрос</a> или
                    <button class="uk-button button accent_button" type="button" name="button" uk-toggle="target: #registration">Заполнить анкету</button>
                  </p>
                </div>
              </div>
            </div>
            <div class="back-link uk-width-1-5">
              <a href="<?php echo get_page_link(107); ?>">
                  <svg aria-hidden="true" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                  <span>Назад</span>
                </a>
            </div>
          </div>
        </div>
      </div>
</main>
