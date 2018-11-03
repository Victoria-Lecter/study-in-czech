<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<p><?php
	/* translators: 1: user display name 2: logout url */
	printf(
		__( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ),
		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
		esc_url( wc_logout_url( wc_get_page_permalink( 'myaccount' ) ) )
	);
?></p>

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
						<img class="avatar uk-float-left uk-border-circle"src="img/user_logo.jpg" alt="">
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

<p><?php
	printf(
		__( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);
?></p>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
