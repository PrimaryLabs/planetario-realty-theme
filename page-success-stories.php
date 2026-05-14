<?php
/**
 * Template Name: Success Stories Page
 * Template Post Type: page
 *
 * @package PlanetarioTailPress
 */

get_header();

if (have_posts()) {
	the_post();
}

$page_title = get_the_title() ?: __('Success Stories', 'planetario-tailpress');

$featured_story = [
	'metric' => '90 days',
	'label'  => __('From inquiry to handover', 'planetario-tailpress'),
	'title'  => __('A family home secured with less friction and more clarity.', 'planetario-tailpress'),
	'copy'   => __('Placeholder case study: use this feature block to highlight a full client journey, from shortlist creation to site tours, financing coordination, documentation, and turnover.', 'planetario-tailpress'),
];

$stories = [
	[
		'metric' => '42 days',
		'label'  => __('Reservation to contract', 'planetario-tailpress'),
		'title'  => __('Panglao lot acquisition for an OFW family', 'planetario-tailpress'),
		'copy'   => __('Due diligence, remote signing support, and clear transaction pacing helped the client move without unnecessary delays.', 'planetario-tailpress'),
	],
	[
		'metric' => '18%',
		'label'  => __('Projected rental yield lift', 'planetario-tailpress'),
		'title'  => __('Cebu condo repositioned for better investment returns', 'planetario-tailpress'),
		'copy'   => __('We redirected the buyer toward a stronger location and more realistic income assumptions.', 'planetario-tailpress'),
	],
	[
		'metric' => '3 tours',
		'label'  => __('Before a final choice', 'planetario-tailpress'),
		'title'  => __('A first-time buyer found the right fit without overextending', 'planetario-tailpress'),
		'copy'   => __('Client conversations stayed focused on budget, long-term livability, and manageable payment terms.', 'planetario-tailpress'),
	],
	[
		'metric' => '1 team',
		'label'  => __('Across the full process', 'planetario-tailpress'),
		'title'  => __('A seller received end-to-end brokerage support', 'planetario-tailpress'),
		'copy'   => __('Listing prep, buyer handling, negotiation, and paperwork were managed under one accountable group.', 'planetario-tailpress'),
	],
	[
		'metric' => '2 cities',
		'label'  => __('Coordinated markets', 'planetario-tailpress'),
		'title'  => __('A relocating client compared Bohol and Cebu options side by side', 'planetario-tailpress'),
		'copy'   => __('The client received a clearer view of tradeoffs between lifestyle, price, and future flexibility.', 'planetario-tailpress'),
	],
	];
?>

<section class="about-hero">
	<img class="about-hero__image" src="<?php echo planetario_tailpress_image('hero-DqwsNBEx.jpg'); ?>" alt="<?php esc_attr_e('Luxury residential community viewed from above', 'planetario-tailpress'); ?>">
	<div class="about-hero__overlay"></div>
	<div class="section-inner about-hero__inner">
		<div class="about-hero__copy reveal">
			<p class="eyebrow eyebrow--soft"><?php esc_html_e('Success Stories', 'planetario-tailpress'); ?></p>
			<h1><?php echo esc_html($page_title); ?></h1>
			<p><?php esc_html_e('A look at the real outcomes behind guided property decisions, cleaner processes, and stronger long-term fits.', 'planetario-tailpress'); ?></p>
		</div>
	</div>
</section>

<section class="section section--navy section--compact">
	<div class="section-inner">
		<article class="story-panel story-panel--featured reveal">
			<div class="story-panel__metric"><?php echo esc_html($featured_story['metric']); ?></div>
			<p class="story-panel__label"><?php echo esc_html($featured_story['label']); ?></p>
			<h2><?php echo esc_html($featured_story['title']); ?></h2>
			<p><?php echo esc_html($featured_story['copy']); ?></p>
		</article>
	</div>
</section>

<section class="section section--light">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('Client Outcomes', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('Clear wins that came from', 'planetario-tailpress'); ?><br><em><?php esc_html_e('better decision-making.', 'planetario-tailpress'); ?></em></h2>
			</div>
			<p><?php esc_html_e('These stories are placeholders you can later replace with actual closings, timelines, metrics, and client details.', 'planetario-tailpress'); ?></p>
		</div>
		<div class="story-grid">
			<?php foreach ($stories as $story) : ?>
				<article class="story-panel story-panel--light reveal">
					<div class="story-panel__metric"><?php echo esc_html($story['metric']); ?></div>
					<p class="story-panel__label"><?php echo esc_html($story['label']); ?></p>
					<h3><?php echo esc_html($story['title']); ?></h3>
					<p><?php echo esc_html($story['copy']); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="about-cta section--navy">
	<div class="section-inner about-cta__inner reveal">
		<p class="eyebrow eyebrow--soft"><?php esc_html_e('Start Your Story', 'planetario-tailpress'); ?></p>
		<h2><?php esc_html_e('Want help creating a', 'planetario-tailpress'); ?> <em><?php esc_html_e('better outcome?', 'planetario-tailpress'); ?></em></h2>
		<p><?php esc_html_e('We can help you move through the same process with more structure, fewer surprises, and clearer tradeoffs.', 'planetario-tailpress'); ?></p>
		<div class="about-cta__actions">
			<a class="button button--primary" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Talk To Us', 'planetario-tailpress'); ?><i data-lucide="arrow-right" class="icon icon--button" aria-hidden="true"></i></a>
			<a class="button button--ghost" href="<?php echo esc_url(home_url('/testimonials/')); ?>"><?php esc_html_e('Read Testimonials', 'planetario-tailpress'); ?></a>
		</div>
	</div>
</section>

<?php
get_footer();
