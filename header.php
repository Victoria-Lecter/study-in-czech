<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Studyinczech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header>
		<div class="header_top">
			<div class="uk-container">
				<div class="uk-grid uk-grid-small">
					<div class="uk-width-1-5@s uk-width-1-4">
						<a class="logo-header" href="/">
 							<img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" alt="">
							<?php
							the_custom_logo();
							?>
 						</a>
					</div>

					<div class="uk-width-3-4 uk-hidden@s">
						<button href="#offcanvas-slide" class="uk-align-right hamburger" uk-toggle>
							<svg aria-hidden="true" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
						</button>

						<div id="offcanvas-slide"
						     uk-offcanvas="flip: true">
							<div class="uk-offcanvas-bar">
								<ul class="uk-nav uk-nav-default">
									<li class="uk-active"><a href="#">Active</a></li>
									<li><a href="#">Item</a></li>
									<li class="uk-nav-header">Header</li>
									<li><a href="#">Item</a></li>
									<li><a href="#">Item</a></li>
									<li class="uk-nav-divider"></li>
									<li><a href="#">Item</a></li>
								</ul>

							</div>
						</div>
					</div>

					<div class="uk-width-3-5@s uk-visible@s">
						<?php study_primary_menu();?>
					</div>
					<div class="uk-width-1-5@s uk-visible@s">
						<div class="uk-grid uk-grid-small header_top_a">
							<div class="uk-width-1-5">
								<a class="tooltip" href="<?php echo get_page_link(241); ?>">
								<span class="tooltiptext uk-box-shadow-small">Ответы на частые вопросы</span>
								<svg class="uk-margin-small-top" aria-hidden="true" data-prefix="far" data-icon="comment-alt-exclamation" class="svg-inline--fa fa-comment-alt-exclamation fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 256c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zM448 0H64C28.7 0 0 28.7 0 64v288c0 35.3 28.7 64 64 64h96v84c0 7.1 5.8 12 12 12 2.4 0 4.9-.7 7.1-2.4L304 416h144c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64zm16 352c0 8.8-7.2 16-16 16H288l-12.8 9.6L208 428v-60H64c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16h384c8.8 0 16 7.2 16 16v288zM284.7 96h-57.4c-10 0-17.6 9.1-15.7 18.9l18 96c1.4 7.6 8 13.1 15.7 13.1h21.4c7.7 0 14.3-5.5 15.7-13.1l18-96c1.9-9.8-5.7-18.9-15.7-18.9z"></path></svg>
							</a>
							</div>
							<div class="uk-width-4-5"><button class="button accent_button" uk-toggle="target: #registration"><a href="/">Заполнить анкету</a></button></div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_bottom uk-visible@s">
			<div class="uk-container">
				<div class="uk-grid">
					<div class="uk-width-1-3">
						<div class="uk-grid contact_info_top">
							<div>
								<svg aria-hidden="true" data-prefix="fas" data-icon="mobile-alt" class="svg-inline--fa fa-mobile-alt fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z"></path></svg>
								<?=carbon_get_theme_option( 'study_phone' ); ?>
								</div>
							<div>
								<svg aria-hidden="true" data-prefix="far" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path></svg>
								<?=carbon_get_theme_option( 'study_email' ); ?></div>
						</div>
					</div>
					<div class="uk-width-2-3">
						<div class="authorization uk-inline uk-align-right">
							<div class="login">
								<a href="/">
									<svg aria-hidden="true" data-prefix="far" data-icon="sign-in" class="svg-inline--fa fa-sign-in fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-24c0-6.6 5.4-12 12-12h84c26.5 0 48-21.5 48-48V160c0-26.5-21.5-48-48-48h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zM167.1 83.5l-19.6 19.6c-4.8 4.8-4.7 12.5.2 17.1L260.8 230H12c-6.6 0-12 5.4-12 12v28c0 6.6 5.4 12 12 12h248.8L147.7 391.7c-4.8 4.7-4.9 12.4-.2 17.1l19.6 19.6c4.7 4.7 12.3 4.7 17 0l164.4-164c4.7-4.7 4.7-12.3 0-17l-164.4-164c-4.7-4.6-12.3-4.6-17 .1z"></path></svg>
									Войти</a>
								<div uk-dropdown="pos: bottom-right; offset: 30">
									<?php wc_get_template('myaccount/form-login.php');?>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="registration"
				 class="uk-modal-full"
				 uk-modal>
			<div class="uk-modal-dialog">
				<button class="uk-modal-close-full" type="button" uk-close></button>
				<div uk-height-viewport>

					<div class="uk-modal-body">
						<form class="registration-form uk-margin-medium-top"
									action="index.html"
									method="post">
							<fieldset class="uk-fieldset uk-margin-large-bottom">
								<legend class="uk-legend uk-text-center uk-margin-large-bottom ">Персональная информация
								</legend>
								<div class="uk-child-width-1-2"
										 uk-grid>
									<div>
										<div class="uk-align-right">
											<div class="uk-margin-bottom">
												<label class="" for="">Имя:</label>
												<div class="uk-margin-small-top">
													<input class="uk-input uk-form-width-medium uk-form-small" type="text" placeholder="Имя">
													</div>
												</div>
												<div class="uk-margin-bottom">
													<label for="">Дата рождения:</label>
													<div class="uk-margin-small-top uk-flex date">
														<input class="uk-input uk-form-width-xsmall uk-form-small" type="text" placeholder="5">
														<select class="uk-select uk-form-width-small uk-form-small" name="">
													<option value="">Январь</option>
												</select>
														<input class="uk-input uk-form-width-xsmall uk-form-small" type="text" placeholder="1999">
														</div>
													</div>
													<div class="uk-margin-bottom">
														<label class="" for="">Страна:</label>
														<div class="uk-margin-small-top">
															<select class="uk-select uk-form-width-medium uk-form-small" name="">
														<option value="">Россия</option>
													</select>
														</div>
													</div>
													<div class="uk-margin-bottom">
														<label class="" for="">E-mail:</label>
														<div class="uk-margin-small-top">
															<input class="uk-input uk-form-width-medium uk-form-small" type="email">
															<!-- <div uk-drop="pos: left-center">
																<div class="uk-card uk-card-body uk-card-default">
																	<p>На эту почту мы вышлем
																		Вам письмо, которое будет
																		содержать логин и пароль
																		для личного кабинета.</p>
																</div>
															</div> -->
														</div>
													</div>
												</div>
											</div>

											<div>
												<div class="uk-align-left">
													<div class="uk-margin-bottom">
														<label for="">Фамилия:</label>
														<div class="uk-margin-small-top">
															<input class="uk-input uk-form-width-medium uk-form-small" type="text" placeholder="Имя">
																</div>
														</div>
														<div class="uk-margin-bottom">
															<label for="">Пол:</label>
															<div class="uk-margin-small-top uk-flex">
																<input id="male" name="gender" type="radio">
																<label class="gender" for="male" for="">Мужской</label>
																<input id="female" name="gender" type="radio">
																<label class="gender" for="female" for="">Женский</label>
															</div>
														</div>
														<div class="uk-margin-bottom">
															<label for="">Город:</label>
															<div class="uk-margin-small-top">
																<input class="uk-input uk-form-width-medium uk-form-small" type="text" placeholder="Москва">
																	</div>
															</div>
															<div class="uk-margin-bottom">
																<label for="">Телефон:</label>
																<div class="uk-margin-small-top">
																	<input class="uk-input uk-form-width-medium uk-form-small" type="tel">
																	<div uk-drop="pos: right-center">
																		<div class="uk-card uk-card-body uk-card-default">
																			<p>Указывайте, пожалуйста,
																				Ваш телефон <b>с кодом
																					города и страны.</b></p>
																			<p><i>Например: +7 777 204 2720</i></p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
							</fieldset>
							<div class="uk-child-width-1-4"
									 uk-grid>
								<div></div>
								<div>
									<div class="uk-margin-small-left">
										<button class="uk-button plain-gray uk-modal-close" type="button">Отмена</button>
									</div>
								</div>
								<div>
									<div class="uk-align-right uk-margin-small-right">
										<button class=" uk-button btn_transparent" type="submit" name="button">Отправить</button>
									</div>
								</div>
								<div></div>
							</div>


						</form>
					</div>
				</div>
			</div>
		</div>


	</div>
	</header>

	<div id="content" class="site-content">
