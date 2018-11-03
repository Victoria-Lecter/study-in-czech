<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php get_header();?>
<main>
	<div class="uk-section-default">
		<div class="uk-section uk-background-cover uk-position-relative"
				 style="background-image: url(<?=carbon_get_theme_option( 'banner_image' ); ?>)" uk-parallax="bgy: +130">
			<div class="uk-container uk-inline uk-position-z-index">
				<h1 class="uk-text-uppercase" uk-parallax="y: 50; easing: 2; opacity: 1,0"><?=carbon_get_theme_option( 'banner_heading' ); ?></h1>
				<p uk-parallax="y: 50; easing: 1.5; opacity: 1,0"><?=carbon_get_theme_option( 'banner_text' ); ?></p>
			</div>
			<div class="uk-overlay-primary uk-position-cover"></div>
		</div>
	</div>
	<section class="main_offer">
		<div class="uk-container">
			<div class="uk-grid uk-grid-small uk-child-width-1-3@m uk-child-width-1-2@s">
				<div>
					<div class="first_cell uk-card uk-card-body uk-margin-bottom">
						<h2 class="uk-card-title"><?php echo get_cat_name(23);?></h2>
						<p><?php echo category_description(23); ?></p>
					</div>
				</div>



				<?php
				$query = new WP_Query('cat=23');
				// var_dump($query);
				// Цикл
				if( $query->have_posts() ) {
				 while ( $query->have_posts() ) {
					 $query->the_post();?>
				<div>
					<div class="uk-card uk-card-default uk-grid-collapse uk-margin-bottom">
						<div class="uk-card-body">
							<h3 class="uk-card-title"><?=get_the_title()?>
								<img class="uk-float-right" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
							</h3>
							<p><?=get_the_content()?></p>
							<button>Узнать больше
							<svg aria-hidden="true" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
							</button>
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
		</div>
	</section>



  <section class="main_plan">
    <div class="uk-container">
      <div class="vl"></div>
      <h2>КАК ВСЕ БУДЕТ
    <span>ПРОИСХОДИТЬ?</span></h2>
      <div class="plan_row plan_left">
        <div class="plan_circle">1</div>
        <div class="plan_block">

          <h3>ВЫБОР ПРОГРАММЫ</h3>
          <p>Вам необходимо выбрать программу, которая
            будет отвечать Вашим требованиям и
            финансовым возможностям. Затем, Вы подаете
            заявку и заполняете анкету, выбрав одну из
            наших программ.</p>
        </div>

      </div>
      <div class="clear"></div>
      <div class="plan_row plan_right">
        <div class="plan_circle">2</div>
        <div class="plan_block">

          <h3>ПОДПИСАНИЕ ДОГОВОРА</h3>
          <p>После того, как Вы отправили нам заявку
            с выбранной образовательной программой с
            Вами связывается наш сотрудник, который
            расскажет о дальнейших совместных
            действиях и отправит Вам договор для подписания.</p>
        </div>

      </div>
      <div class="clear"></div>
      <div class="plan_row plan_left">
        <div class="plan_circle">3</div>
        <div class="plan_block">

          <h3>ОФОРМЛЕНИЕ ВИЗЫ</h3>
          <p>Далее мы собираем Вам все необходимые
            документы для получения визы, записываем
            Вас на языковые курсы и бронируем место в
            общежитии. Так же мы высылаем Вам пакет
            документов и начинаем подготовку к
            собеседованию в чешском посольстве.</p>
        </div>

      </div>
      <div class="clear"></div>
      <div class="plan_row plan_right">
        <div class="plan_circle">4</div>
        <div class="plan_block">

          <h3>ПРИЕЗД В ЧЕХИЮ</h3>
          <p>По приезду в Чехию Вас встречает наш сотрудник,
            который организует Вам трансфер в место
            пребывания. По приезду мы расселяем участников
            наших программ по выбранным общежитиям и
            квартирам. </p>
        </div>

      </div>
      <div class="clear"></div>
      <div class="plan_row plan_left">
        <div class="plan_circle">5</div>
        <div class="plan_block">

          <h3>ОБУЧЕНИЕ НА КУРСАХ</h3>
          <p>Далее мы собираем Вам все необходимые
            документы для получения визы, записываем
            Вас на языковые курсы и бронируем место в
            общежитии. Так же мы высылаем Вам пакет
            документов и начинаем подготовку к
            собеседованию в чешском посольстве.</p>
        </div>

      </div>
      <div class="clear"></div>
      <div class="plan_row plan_right">
        <div class="plan_circle">6</div>
        <div class="plan_block">

          <h3>ПОСТУПЛЕНИЕ В ВУЗ</h3>
          <p>После прохождения процедуры нострификации,
            наши специалисты по образованию предоставят
            Вам всю необходимую информацию о процедуре
            поступления на выбранную Вами специальность,
            посоветуют ВУЗы, помогут заполнить заявления
            и отправить все необходимые для поступления
            документы.</p>
        </div>

      </div>
      <div class="clear"></div>
      <button class="button" uk-toggle="target: #registration"><a href="/">Заполнить анкету</a></button>
    </div>
  </section>

  <section class="mediateka">
    <div class="uk-container">
      <h2><?php echo get_cat_name(24);?></h2>
      <div class="uk-grid uk-grid-medium">
        <div class="uk-width-1-2"><button class="uk-align-right media_button">Фото</button></div>
        <div class="uk-width-1-2"><button class="media_button">Видео</button></div>
      </div>
      <div class="uk-grid uk-grid-medium">
				<?php
				$query = new WP_Query('cat=24');
				// var_dump($query);
				// Цикл
				if( $query->have_posts() ) {
				 while ( $query->have_posts() ) {
					 $query->the_post();?>
        <div class="uk-width-1-4">
          <a class="media_wrap uk-transition-toggle uk-inline-clip" href="/">
          <img class="media_image uk-transition-scale-up uk-transition-opaque" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
					<div class="shade-on-image"></div>
          <span><b><?=get_the_title()?></b></span></a></a>
        </div>
				<?php

			}
		} else {
			// Постов не найдено
		}
		/* Возвращаем оригинальные данные поста. Сбрасываем $post. */
		wp_reset_postdata();
		?>
        <!-- <div class="uk-width-1-4">
          <a href="/"><img class="media_image" src="<?php echo get_template_directory_uri()?>/assets/img/prague.jpg" alt=""></a>
        </div> -->
      </div>
  </section>
  <section class="question">
    <div class="uk-container">
      <h2>Хотите задать вопрос?</h2>
      <div class="uk-grid uk-grid-large">
        <div class="uk-width-1-2">
          <form class="uk-align-right question_left"
                action="">
            <span>Ваше имя</span><br>
            <input type="text" name="name" value=""><br>
            <span>Телефон</span><br>
            <input type="text" name="mobile" value=""><br>
            <button class="button accent_button" type="submit" name="call">Заказать звонок</button>
          </form>
        </div>
        <div class="uk-width-1-2">
          <div class="question_right">
            <p>Заполните форму заявки и мы перезвоним
              вам ближайшие 10 минут.</p>
            <p>Если вы стесняетесь или же по любой
              другой причине не можете разговаривать —
              <a href="">напишите нам на почту</a> или в <a href="">Skype</a>.</p>
							<p>Примечание
								<svg class="svg" aria-hidden="true" data-prefix="fas" data-icon="lock" class="svg-inline--fa fa-lock fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path></svg>
							</p>
            <p>Ваши данные в полной безопасности.
              Мы не передаем их третьим лицам.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="map">
      <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.089732574224!2d16.553917665372133!3d49.180379537378236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471295d90cc34d99%3A0x7e587a10910e95f0!2sHOTEL+-+FOR+DOGS%2C+CATS+AND+OTHER+ANIMALS!5e0!3m2!1sen!2scz!4v1536852182879" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
  </section>
</main>

<div class="main-page">
	<?php get_footer();?>
</div>
