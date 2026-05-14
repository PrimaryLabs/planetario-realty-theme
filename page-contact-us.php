<?php
/**
 * Template Name: Contact Us Landing Page
 * Template Post Type: page
 *
 * @package PlanetarioTailPress
 */

get_header();

if (have_posts()) {
	the_post();
}

$page_title = get_the_title() ?: __('Contact Us', 'planetario-tailpress');

$contact_routes = array(
	array(
		'icon'  => 'home',
		'title' => __('Buying or Selling', 'planetario-tailpress'),
		'copy'  => __('Tell us about your property goals, budget, preferred location, or listing timeline.', 'planetario-tailpress'),
	),
	array(
		'icon'  => 'map',
		'title' => __('Tours and Tripping', 'planetario-tailpress'),
		'copy'  => __('Request guided site visits, shortlist reviews, and practical next steps before viewing.', 'planetario-tailpress'),
	),
	array(
		'icon'  => 'file-check-2',
		'title' => __('Documents and Closing', 'planetario-tailpress'),
		'copy'  => __('Ask about requirements, reservation support, transaction flow, and handover coordination.', 'planetario-tailpress'),
	),
);
?>

<section class="about-hero">
	<img class="about-hero__image" src="<?php echo planetario_tailpress_image('hero-DqwsNBEx.jpg'); ?>" alt="<?php esc_attr_e('Modern city district and residential properties at golden hour', 'planetario-tailpress'); ?>">
	<div class="about-hero__overlay"></div>
	<div class="section-inner about-hero__inner">
		<div class="about-hero__copy reveal">
			<p class="eyebrow eyebrow--soft"><?php esc_html_e('Contact Planetario Realty', 'planetario-tailpress'); ?></p>
			<h1><?php echo esc_html($page_title); ?></h1>
			<p><?php esc_html_e('Start with a question, a shortlist, or a property goal. We will connect you with the right next step, from consultation to viewing to closing support.', 'planetario-tailpress'); ?></p>
			<div class="about-cta__actions contact-us-hero__actions">
				<a class="button button--primary" href="#contact-form"><?php esc_html_e('Send An Inquiry', 'planetario-tailpress'); ?></a>
				<a class="button button--ghost" href="#office-map"><?php esc_html_e('View Office Map', 'planetario-tailpress'); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="section section--light">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('How We Can Help', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('Choose the conversation that fits', 'planetario-tailpress'); ?><br><em><?php esc_html_e('your next move.', 'planetario-tailpress'); ?></em></h2>
			</div>
			<p><?php esc_html_e('Use the form below for general inquiries, or mention the support route closest to your need so the team can respond with clearer context.', 'planetario-tailpress'); ?></p>
		</div>

		<div class="contact-us-route-grid">
			<?php foreach ($contact_routes as $route) : ?>
				<article class="service-item reveal">
					<div class="service-item__icon icon-badge" aria-hidden="true">
						<i data-lucide="<?php echo esc_attr($route['icon']); ?>" class="icon icon--feature"></i>
					</div>
					<div>
						<h3><?php echo esc_html($route['title']); ?></h3>
						<p><?php echo esc_html($route['copy']); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--muted" id="contact-form">
	<div class="section-inner contact-page-grid">
		<div class="contact-page-info reveal">
			<p class="eyebrow"><?php esc_html_e('Reach Us Directly', 'planetario-tailpress'); ?></p>
			<h2><?php esc_html_e('A clear reply starts with', 'planetario-tailpress'); ?><br><em><?php esc_html_e('the right details.', 'planetario-tailpress'); ?></em></h2>
			<p><?php esc_html_e('Share where you are in the process and what kind of property support you need. Placeholder contact details can be updated once final office information is confirmed.', 'planetario-tailpress'); ?></p>
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

<section class="section section--light section--compact" id="office-map">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('Visit The Office', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('Find us on the map and plan', 'planetario-tailpress'); ?><br><em><?php esc_html_e('your visit with ease.', 'planetario-tailpress'); ?></em></h2>
			</div>
			<p><?php esc_html_e('This embedded map is a placeholder reference for the office area and can be updated to the final branch location anytime.', 'planetario-tailpress'); ?></p>
		</div>
		<div class="contact-us-map-layout reveal">
			<div class="contact-map-card">
				<iframe
					src="https://www.google.com/maps?q=Ortigas%20Center%2C%20Pasig%20City%2C%20Metro%20Manila&z=14&output=embed"
					loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"
					title="<?php esc_attr_e('Planetario Realty office location map', 'planetario-tailpress'); ?>"></iframe>
			</div>
			<div class="contact-us-map-panel">
				<div>
					<i data-lucide="map-pin" class="icon icon--feature" aria-hidden="true"></i>
					<p class="eyebrow"><?php esc_html_e('Office Area', 'planetario-tailpress'); ?></p>
					<h3><?php esc_html_e('Ortigas Center, Pasig City', 'planetario-tailpress'); ?></h3>
					<p><?php esc_html_e('Use the map for routing and nearby landmarks before your scheduled consultation.', 'planetario-tailpress'); ?></p>
				</div>
				<a class="button button--primary" href="https://www.google.com/maps/search/?api=1&query=Ortigas%20Center%2C%20Pasig%20City%2C%20Metro%20Manila" target="_blank" rel="noopener"><?php esc_html_e('Open In Google Maps', 'planetario-tailpress'); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="about-cta">
	<div class="section-inner about-cta__inner reveal">
		<p class="eyebrow eyebrow--soft"><?php esc_html_e('Ready When You Are', 'planetario-tailpress'); ?></p>
		<h2><?php esc_html_e('Let us help you move from', 'planetario-tailpress'); ?><br><em><?php esc_html_e('inquiry to action.', 'planetario-tailpress'); ?></em></h2>
		<p><?php esc_html_e('For buyers, sellers, and investors, Planetario Realty can help clarify choices and organize the next step.', 'planetario-tailpress'); ?></p>
		<div class="about-cta__actions">
			<a class="button button--primary" href="<?php echo esc_url(home_url('/properties/')); ?>"><?php esc_html_e('Explore Properties', 'planetario-tailpress'); ?></a>
			<a class="button button--ghost" href="<?php echo esc_url(home_url('/teams/')); ?>"><?php esc_html_e('Meet The Team', 'planetario-tailpress'); ?></a>
		</div>
	</div>
</section>

<?php
get_footer();
