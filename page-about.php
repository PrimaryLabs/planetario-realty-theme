<?php
/**
 * Template Name: About Page
 * Template Post Type: page
 *
 * @package PlanetarioTailPress
 */

get_header();

if (have_posts()) {
	the_post();
}

$page_title = get_the_title() ?: __('About Planetario Realty', 'planetario-tailpress');

$values = [
	[
		'icon'  => 'shield-check',
		'title' => __('Integrity First', 'planetario-tailpress'),
		'copy'  => __('We give clear guidance, transparent options, and practical next steps for every client conversation.', 'planetario-tailpress'),
	],
	[
		'icon'  => 'handshake',
		'title' => __('Relationship Led', 'planetario-tailpress'),
		'copy'  => __('We treat each property decision as a long-term commitment, not a one-time transaction.', 'planetario-tailpress'),
	],
	[
		'icon'  => 'building-2',
		'title' => __('Market Discipline', 'planetario-tailpress'),
		'copy'  => __('We study locations, developers, payment terms, and resale fundamentals before making recommendations.', 'planetario-tailpress'),
	],
	[
		'icon'  => 'sparkles',
		'title' => __('Service Excellence', 'planetario-tailpress'),
		'copy'  => __('We stay hands-on through site tours, documentation, financing coordination, and turnover support.', 'planetario-tailpress'),
	],
];

$leaders = [
	[
		'image' => 'team1-BCz3YlXd.jpg',
		'name'  => 'Maria Liza Santos',
		'role'  => __('Founder & Principal Broker', 'planetario-tailpress'),
		'bio'   => __('Placeholder leadership copy highlighting licensing, brokerage experience, and client-first standards.', 'planetario-tailpress'),
	],
	[
		'image' => 'team4-CRmU_i0v.jpg',
		'name'  => 'Ramon Dela Cruz',
		'role'  => __('Managing Director', 'planetario-tailpress'),
		'bio'   => __('Placeholder leadership copy focused on developer partnerships, negotiations, and operational care.', 'planetario-tailpress'),
	],
	[
		'image' => 'team3-DMXQ2-xv.jpg',
		'name'  => 'Patricia Mendoza',
		'role'  => __('Senior Property Consultant', 'planetario-tailpress'),
		'bio'   => __('Placeholder leadership copy for buyer guidance, financing support, and smooth client handovers.', 'planetario-tailpress'),
	],
];
?>

<section class="about-hero">
	<img class="about-hero__image" src="<?php echo planetario_tailpress_image('hero-DqwsNBEx.jpg'); ?>" alt="<?php esc_attr_e('Residential community viewed from above at golden hour', 'planetario-tailpress'); ?>">
	<div class="about-hero__overlay"></div>
	<div class="section-inner about-hero__inner">
		<div class="about-hero__copy reveal">
			<p class="eyebrow eyebrow--soft"><?php esc_html_e('About Us', 'planetario-tailpress'); ?></p>
			<h1><?php echo esc_html($page_title); ?></h1>
			<p><?php esc_html_e('A trusted real estate brokerage helping Filipino families, investors, and partners move through property decisions with clarity, care, and long-term accountability.', 'planetario-tailpress'); ?></p>
		</div>
	</div>
</section>

<section class="section section--light">
	<div class="section-inner split-layout">
		<div class="section-heading reveal">
			<p class="eyebrow"><?php esc_html_e('Who We Are', 'planetario-tailpress'); ?></p>
			<h2><?php esc_html_e('Built for thoughtful', 'planetario-tailpress'); ?><br><em><?php esc_html_e('property decisions.', 'planetario-tailpress'); ?></em></h2>
			<p><strong><?php esc_html_e('Planetario Realty and Brokerage Services Inc. (PRBSI)', 'planetario-tailpress'); ?></strong> <?php esc_html_e('is a real estate development and marketing company serving clients across Bohol, Cebu, and other high-potential Philippine property markets.', 'planetario-tailpress'); ?></p>
			<p><?php esc_html_e('Placeholder content: use this section to explain the company history, brokerage accreditation, client profile, and the kind of property guidance Planetario provides.', 'planetario-tailpress'); ?></p>
		</div>
		<div class="about-stat-grid">
			<article class="about-stat-card reveal">
				<strong>2018</strong>
				<span><?php esc_html_e('Established', 'planetario-tailpress'); ?></span>
			</article>
			<article class="about-stat-card reveal">
				<strong>30+</strong>
				<span><?php esc_html_e('Developer Partners', 'planetario-tailpress'); ?></span>
			</article>
			<article class="about-stat-card reveal">
				<strong>12+</strong>
				<span><?php esc_html_e('Years of Realty Experience', 'planetario-tailpress'); ?></span>
			</article>
			<article class="about-stat-card reveal">
				<strong>Bohol & Cebu</strong>
				<span><?php esc_html_e('Primary Markets', 'planetario-tailpress'); ?></span>
			</article>
		</div>
	</div>
</section>

<section class="section section--navy">
	<div class="ambient ambient--left"></div>
	<div class="ambient ambient--right"></div>
	<div class="section-inner">
		<div class="section-heading section-heading--center reveal">
			<p class="eyebrow eyebrow--soft"><?php esc_html_e('Mission & Vision', 'planetario-tailpress'); ?></p>
			<h2><?php esc_html_e('Purpose that keeps', 'planetario-tailpress'); ?> <em><?php esc_html_e('the work grounded.', 'planetario-tailpress'); ?></em></h2>
		</div>
		<div class="purpose-grid">
			<article class="purpose-panel reveal">
				<p class="eyebrow eyebrow--soft"><?php esc_html_e('Our Mission', 'planetario-tailpress'); ?></p>
				<h3><?php esc_html_e('Provide world-class real estate service with care and consistency.', 'planetario-tailpress'); ?></h3>
				<p><?php esc_html_e('We guide clients through property choices, documentation, financing, and turnover with honest advice and dependable follow-through.', 'planetario-tailpress'); ?></p>
			</article>
			<article class="purpose-panel reveal">
				<p class="eyebrow eyebrow--soft"><?php esc_html_e('Our Vision', 'planetario-tailpress'); ?></p>
				<h3><?php esc_html_e('Become a trusted standard for Philippine property brokerage.', 'planetario-tailpress'); ?></h3>
				<p><?php esc_html_e('We aim to serve clients, business partners, team members, and communities with professionalism, innovation, and long-term responsibility.', 'planetario-tailpress'); ?></p>
			</article>
		</div>
	</div>
</section>

<section class="section section--muted">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('Core Values', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('How we show up', 'planetario-tailpress'); ?><br><em><?php esc_html_e('for every client.', 'planetario-tailpress'); ?></em></h2>
			</div>
			<p><?php esc_html_e('Placeholder intro: these values can be refined once final brand language is available.', 'planetario-tailpress'); ?></p>
		</div>
		<div class="about-values-grid">
			<?php foreach ($values as $value) : ?>
				<article class="feature-card reveal">
					<div class="icon-badge" aria-hidden="true"><i data-lucide="<?php echo esc_attr($value['icon']); ?>" class="icon icon--feature"></i></div>
					<h3><?php echo esc_html($value['title']); ?></h3>
					<p><?php echo esc_html($value['copy']); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--light">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('Leadership', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('Guided by people', 'planetario-tailpress'); ?><br><em><?php esc_html_e('who know the market.', 'planetario-tailpress'); ?></em></h2>
			</div>
			<p><?php esc_html_e('A short introduction to the leadership team can live here while the full team profile is finalized.', 'planetario-tailpress'); ?></p>
		</div>
		<div class="about-leadership-grid">
			<?php foreach ($leaders as $leader) : ?>
				<article class="person-card reveal">
					<figure><img src="<?php echo planetario_tailpress_image($leader['image']); ?>" alt="<?php echo esc_attr($leader['name']); ?>"></figure>
					<div>
						<h3><?php echo esc_html($leader['name']); ?></h3>
						<p class="role"><?php echo esc_html($leader['role']); ?></p>
						<p><?php echo esc_html($leader['bio']); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="about-cta section--navy">
	<div class="section-inner about-cta__inner reveal">
		<p class="eyebrow eyebrow--soft"><?php esc_html_e('Start A Conversation', 'planetario-tailpress'); ?></p>
		<h2><?php esc_html_e('Ready to move with', 'planetario-tailpress'); ?> <em><?php esc_html_e('more clarity?', 'planetario-tailpress'); ?></em></h2>
		<p><?php esc_html_e('Tell us what you are looking for, and our team will help you understand the next practical step.', 'planetario-tailpress'); ?></p>
		<div class="about-cta__actions">
			<a class="button button--primary" href="<?php echo esc_url(home_url('/#contact')); ?>"><?php esc_html_e('Contact The Team', 'planetario-tailpress'); ?><i data-lucide="arrow-right" class="icon icon--button" aria-hidden="true"></i></a>
			<a class="button button--ghost" href="<?php echo esc_url(home_url('/#developers')); ?>"><?php esc_html_e('Explore Properties', 'planetario-tailpress'); ?></a>
		</div>
	</div>
</section>

<?php
get_footer();
