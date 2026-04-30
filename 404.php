<?php
/**
 * 404 template.
 *
 * @package PlanetarioTailPress
 */

get_header();
?>

<section class="content-shell">
	<div class="section-inner content-shell__inner">
		<p class="eyebrow"><?php esc_html_e('Not found', 'planetario-tailpress'); ?></p>
		<h1><?php esc_html_e('This address is not on the map yet.', 'planetario-tailpress'); ?></h1>
		<p><?php esc_html_e('The page you are looking for may have moved. Head back home and continue exploring Planetario Realty.', 'planetario-tailpress'); ?></p>
		<a class="button button--primary" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Return home', 'planetario-tailpress'); ?></a>
	</div>
</section>

<?php
get_footer();
