<?php
/**
 * Template Name: Contact Us Page
 * Template Post Type: page
 *
 * @package PlanetarioTailPress
 */

get_header();

if (have_posts()) {
	the_post();
}

$page_title = get_the_title() ?: __('Contact Us', 'planetario-tailpress');
?>

<section class="about-hero">
	<img class="about-hero__image" src="<?php echo planetario_tailpress_image('hero-DqwsNBEx.jpg'); ?>" alt="<?php esc_attr_e('City and residential district view at golden hour', 'planetario-tailpress'); ?>">
	<div class="about-hero__overlay"></div>
	<div class="section-inner about-hero__inner">
		<div class="about-hero__copy reveal">
			<p class="eyebrow eyebrow--soft"><?php esc_html_e('Contact Us', 'planetario-tailpress'); ?></p>
			<h1><?php echo esc_html($page_title); ?></h1>
			<p><?php esc_html_e('Send us your questions, shortlist goals, or buying timeline. We will help you take the next practical step.', 'planetario-tailpress'); ?></p>
		</div>
	</div>
</section>

<section class="section section--light">
	<div class="section-inner contact-page-grid">
		<div class="contact-page-info reveal">
			<p class="eyebrow"><?php esc_html_e('Reach Us Directly', 'planetario-tailpress'); ?></p>
			<h2><?php esc_html_e('Let us make the first step', 'planetario-tailpress'); ?><br><em><?php esc_html_e('simple and clear.', 'planetario-tailpress'); ?></em></h2>
			<p><?php esc_html_e('Use the details below for quick inquiries, meeting schedules, and property concerns. Placeholder details can be replaced once final office information is confirmed.', 'planetario-tailpress'); ?></p>
			<div class="contact-links contact-links--page">
				<a href="tel:+639171234567"><i data-lucide="phone" class="icon icon--contact" aria-hidden="true"></i><span>+63 917 123 4567</span></a>
				<a href="mailto:hello@planetariorealty.ph"><i data-lucide="mail" class="icon icon--contact" aria-hidden="true"></i><span>hello@planetariorealty.ph</span></a>
				<p><i data-lucide="map-pin" class="icon icon--contact" aria-hidden="true"></i><span><?php esc_html_e('Ortigas Center, Pasig City, Metro Manila', 'planetario-tailpress'); ?></span></p>
				<p><i data-lucide="clock-3" class="icon icon--contact" aria-hidden="true"></i><span><?php esc_html_e('Monday to Saturday, 9:00 AM to 6:00 PM', 'planetario-tailpress'); ?></span></p>
			</div>
		</div>
		<form class="contact-form contact-form--light reveal" action="mailto:hello@planetariorealty.ph" method="post" enctype="text/plain" data-contact-form>
			<div class="field-row">
				<label><?php esc_html_e('Name', 'planetario-tailpress'); ?><input name="name" type="text" placeholder="<?php esc_attr_e('Juan dela Cruz', 'planetario-tailpress'); ?>" required></label>
				<label><?php esc_html_e('Phone', 'planetario-tailpress'); ?><input name="phone" type="tel" placeholder="<?php esc_attr_e('+63 9XX XXX XXXX', 'planetario-tailpress'); ?>"></label>
			</div>
			<label><?php esc_html_e('Email', 'planetario-tailpress'); ?><input name="email" type="email" placeholder="<?php esc_attr_e('you@email.com', 'planetario-tailpress'); ?>" required></label>
			<label><?php esc_html_e('Preferred Service', 'planetario-tailpress'); ?><input name="service" type="text" placeholder="<?php esc_attr_e('Property sales, brokerage, tours, consultation', 'planetario-tailpress'); ?>"></label>
			<label><?php esc_html_e('Message', 'planetario-tailpress'); ?><textarea name="message" rows="5" placeholder="<?php esc_attr_e('Tell us about the property, budget, location, or support you need.', 'planetario-tailpress'); ?>"></textarea></label>
			<button class="button button--primary" type="submit"><?php esc_html_e('Send Inquiry', 'planetario-tailpress'); ?></button>
			<p class="form-note" role="status" data-form-note></p>
		</form>
	</div>
</section>

<section class="section section--muted section--compact">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('Visit The Office', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('Find us on the map and plan', 'planetario-tailpress'); ?><br><em><?php esc_html_e('your visit with ease.', 'planetario-tailpress'); ?></em></h2>
			</div>
			<p><?php esc_html_e('This embedded map is a placeholder reference for the office area and can be updated to the final branch location anytime.', 'planetario-tailpress'); ?></p>
		</div>
		<div class="contact-map-card reveal">
			<iframe
				src="https://www.google.com/maps?q=Ortigas%20Center%2C%20Pasig%20City%2C%20Metro%20Manila&z=14&output=embed"
				loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"
				title="<?php esc_attr_e('Planetario Realty office location map', 'planetario-tailpress'); ?>"></iframe>
		</div>
	</div>
</section>

<?php
get_footer();
