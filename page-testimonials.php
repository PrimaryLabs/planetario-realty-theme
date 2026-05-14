<?php
/**
 * Template Name: Testimonials Page
 * Template Post Type: page
 *
 * @package PlanetarioTailPress
 */

get_header();

if (have_posts()) {
	the_post();
}

$page_title = get_the_title() ?: __('Testimonials', 'planetario-tailpress');

$testimonials = [
	[
		'quote'  => __('Planetario did not just help us buy. They made every step easier to understand, especially the paperwork and payment flow.', 'planetario-tailpress'),
		'name'   => 'Anna & Mark Villanueva',
		'detail' => __('Bought a condominium in 2024', 'planetario-tailpress'),
	],
	[
		'quote'  => __('The team was honest when a property was not the right fit. That built trust immediately.', 'planetario-tailpress'),
		'name'   => 'Karla Tan',
		'detail' => __('First-time buyer', 'planetario-tailpress'),
	],
	[
		'quote'  => __('They handled the difficult parts with calm professionalism. We always knew what was next.', 'planetario-tailpress'),
		'name'   => 'The Cruz Family',
		'detail' => __('House and lot buyers', 'planetario-tailpress'),
	],
	[
		'quote'  => __('As an investor, I appreciated that the team focused on actual numbers instead of sales talk.', 'planetario-tailpress'),
		'name'   => 'Engr. Dante Ramos',
		'detail' => __('Investor, six properties', 'planetario-tailpress'),
	],
	[
		'quote'  => __('Communication stayed clear all the way through turnover. That consistency is rare.', 'planetario-tailpress'),
		'name'   => 'Loren Castillo',
		'detail' => __('Client testimonial placeholder', 'planetario-tailpress'),
	],
	[
		'quote'  => __('The site tours were well prepared, and every recommendation felt tailored to our actual goals.', 'planetario-tailpress'),
		'name'   => 'Paolo Mendoza',
		'detail' => __('Client testimonial placeholder', 'planetario-tailpress'),
	],
];
?>

<section class="about-hero">
	<img class="about-hero__image" src="<?php echo planetario_tailpress_image('hero-DqwsNBEx.jpg'); ?>" alt="<?php esc_attr_e('Residential skyline and premium community', 'planetario-tailpress'); ?>">
	<div class="about-hero__overlay"></div>
	<div class="section-inner about-hero__inner">
		<div class="about-hero__copy reveal">
			<p class="eyebrow eyebrow--soft"><?php esc_html_e('Testimonials', 'planetario-tailpress'); ?></p>
			<h1><?php echo esc_html($page_title); ?></h1>
			<p><?php esc_html_e('A fuller look at what clients say about the pace, clarity, and care they experienced while working with our team.', 'planetario-tailpress'); ?></p>
		</div>
	</div>
</section>

<section class="section section--light">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('Client Voices', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('Trust built one', 'planetario-tailpress'); ?><br><em><?php esc_html_e('conversation at a time.', 'planetario-tailpress'); ?></em></h2>
			</div>
			<p class="rating"><?php esc_html_e('Placeholder rating summary: 4.9 average across verified buyer and investor feedback.', 'planetario-tailpress'); ?></p>
		</div>
		<div class="testimonial-grid testimonial-grid--expanded">
			<?php foreach ($testimonials as $testimonial) : ?>
				<figure class="quote-card reveal">
					<blockquote><?php echo esc_html($testimonial['quote']); ?></blockquote>
					<figcaption>
						<span><?php echo esc_html(strtoupper(substr($testimonial['name'], 0, 1))); ?></span>
						<strong><?php echo esc_html($testimonial['name']); ?></strong>
						<small><?php echo esc_html($testimonial['detail']); ?></small>
					</figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="about-cta section--navy">
	<div class="section-inner about-cta__inner reveal">
		<p class="eyebrow eyebrow--soft"><?php esc_html_e('Let’s Talk', 'planetario-tailpress'); ?></p>
		<h2><?php esc_html_e('Ready for support that feels', 'planetario-tailpress'); ?> <em><?php esc_html_e('steady and transparent?', 'planetario-tailpress'); ?></em></h2>
		<p><?php esc_html_e('Reach out and we will help you navigate your next property decision with the same level of care.', 'planetario-tailpress'); ?></p>
		<div class="about-cta__actions">
			<a class="button button--primary" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Contact Us', 'planetario-tailpress'); ?><i data-lucide="arrow-right" class="icon icon--button" aria-hidden="true"></i></a>
			<a class="button button--ghost" href="<?php echo esc_url(home_url('/teams/')); ?>"><?php esc_html_e('Meet The Team', 'planetario-tailpress'); ?></a>
		</div>
	</div>
</section>

<?php
get_footer();
