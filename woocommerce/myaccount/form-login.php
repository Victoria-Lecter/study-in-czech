<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

<div class="u-columns col2-set" id="customer_login">

	<div class="u-column1 col-1">

<?php endif; ?>

		<form	method="post">
			<div class="form-top">
				<div class="">
					<input type="text" class="uk-input" name="username" placeholder="Логин" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" />
				</div>
					<div class="password">

						<input class="uk-input" type="password" name="password" placeholder="Пароль" id="password" autocomplete="current-password" />
						<span uk-tooltip="title: Hello World; pos: bottom">?</span>
					</div>
					<div>
						<p>*для получения доступа
							нужно заполнить анкету</p>
					</div>
				</div>
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<button type="submit" class="uk-button" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Login', 'woocommerce' ); ?></button>
		</form>



<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

	</div>

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


	<!-- <div class="u-column2 col-2">

		<h2><?php esc_html_e( 'Register', 'woocommerce' ); ?></h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register">

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
				</p>

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-FormRow form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<button type="submit" class="woocommerce-Button button" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div> -->

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
