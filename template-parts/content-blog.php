
<?php setPostViews(get_the_ID()); ?>
<main class="officer-main">
<div class="uk-container">
  <div class="uk-grid-small"
       uk-grid>
       <?php get_sidebar(); ?>

    <div class="uk-width-3-5">
      <div class="blog-article bcg_white">
        <div class="uk-cover-container">
          <canvas width="" height="300"></canvas>
          <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" uk-cover>
          <div class="uk-overlay uk-position-bottom">
            <p class="uk-text-uppercase"><?php echo get_the_date(); ?><span class="uk-align-right "><?php echo getPostViews(get_the_ID()); ?></span></p>
          </div>
          <div class="shade-on-image"></div>
        </div>
        <div class="text-information">
          <h3><?php single_post_title(); ?></h3>
          <div class="text-block">
            <p><?php echo get_post_meta($post->ID, 'text-on-background-1', true); ?></p>
          </div>
          <p><?php the_content(); ?></p>
          <h3><?php echo get_post_meta($post->ID, 'blog-subtitle-1', true); ?></h3>
          <p><?php echo get_post_meta($post->ID, 'blog-paragraph-1', true); ?></p>
          <div class="uk-flex uk-flex-middle">
            <img style="float: left" src="<?php echo get_template_directory_uri()?>/assets/img/ICON1.png" alt="">
            <p style="clear: bottom; padding-left: 10px;"><?php echo get_post_meta($post->ID, 'blog-important-info-1', true); ?></p>
          </div>
          <div class="text-block">
            <p><?php echo get_post_meta($post->ID, 'text-on-background-2', true); ?></p>
          </div>
          <p><?php echo get_post_meta($post->ID, 'blog-paragraph-2', true); ?></p>
          <p><?php echo get_post_meta($post->ID, 'blog-paragraph-3', true); ?></p>
          <h3><?php echo get_post_meta($post->ID, 'blog-subtitle-2', true); ?></h3>
          <p><?php echo get_post_meta($post->ID, 'blog-paragraph-4', true); ?></p>
          <div class="uk-flex uk-flex-middle">
            <img style="float: left" src="<?php echo get_template_directory_uri()?>/assets/img/ICON1.png" alt="">
            <p style="clear: bottom; padding-left: 10px;"><?php echo get_post_meta($post->ID, 'blog-important-info-2', true); ?></p>
          </div>
          <p><?php echo get_post_meta($post->ID, 'blog-paragraph-5', true); ?></p>

        </div>
        <div class="uk-text-right bottom-border-top">
          <p>
            <a href="#">Задать вопрос</a> или
            <button class="uk-button button accent_button" type="button" name="button" uk-toggle="target: #registration">Заполнить анкету</button>
          </p>
        </div>
      </div>
    </div>
    <div class="back-link uk-width-1-5 uk-text-center">
      <a href="<?php echo get_page_link(2); ?>">
          <svg aria-hidden="true" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
          <span>Назад</span>
        </a>
    </div>
  </div>
</div>
</main>
