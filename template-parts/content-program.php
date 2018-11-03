<main class="officer-main">
  <div class="uk-container">
    <div class="uk-grid-small"
         uk-grid>
      <?php get_sidebar(); ?>
      <div class="uk-width-3-5">
        <div class="program">
          <div class="program-top">
            <h3><?php single_post_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
          <div class="three-columns">
            <div class="uk-child-width-1-3 uk-grid-small"
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
          <div class="uk-cover-container program-third">
            <canvas width="100%" height="200px"></canvas>
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" uk-cover>
            <div class="gradient"></div>
            <div class="uk-overlay uk-position-center uk-light">
              <h3>Что входит в программу?</h3>
            </div>
          </div>
          <div class="program-fourth">
            <ul class="uk-flex-center"
                uk-tab>
              <li class="uk-active"><a href=""><b>До</b> приезда в Чехию</a></li>
              <li><a href=""><b>После</b> приезда в Чехию</a></li>
              <li><a href="">Дополнительные услуги</a></li>
            </ul>
            <ul class="list program-include">
              <li>Подготовка всех необходимых документов для получения визы</li>
              <li>Подготовка всех необходимых документов для получения визы</li>
              <li>Подготовка всех необходимых документов для получения визы</li>
              <li>Подготовка всех необходимых документов для получения визы</li>
              <li>Подготовка всех необходимых документов для получения визы</li>
              <li>Подготовка всех необходимых документов для получения визы</li>
            </ul>
            <h3><img src="<?php echo get_template_directory_uri()?>/assets/img/ICON.png" alt="">Что не входит в программу?</h3>
            <ul class="list program-not-include">
              <li>Консульский сбор в посольстве или консульстве Чешской Республике</li>
              <li>Консульский сбор в посольстве или консульстве Чешской Республике</li>
              <li>Консульский сбор в посольстве или консульстве Чешской Республике</li>
            </ul>
          </div>
          <div class="program-fifth">
            <div class="price uk-align-left">
              <p><?php echo get_post_meta($post->ID, 'price', true); ?></p>
              <p><?php echo get_post_meta($post->ID, 'price-info', true); ?></p>
            </div>
            <button class="uk-button button uk-align-right" type="button" name="button" uk-toggle="target: #registration">Заполнить анкету</button>
            <div style="clear: both;"></div>
          </div>

        </div>
      </div>
      <div class="back-link uk-width-1-5 uk-text-center">
        <a href="<?php echo get_page_link(87); ?>">
            <svg aria-hidden="true" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            <span>Назад</span>
          </a>
      </div>
    </div>
  </div>
  </div>
</main>
