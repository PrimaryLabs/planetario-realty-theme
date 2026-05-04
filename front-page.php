<?php

/**
 * Front page template.
 *
 * @package PlanetarioTailPress
 */

get_header();
$trust_indicators = [
	[
		'icon'  => 'shield-check',
		'title' => __('Trusted Services', 'planetario-tailpress'),
		'copy'  => __('Build on integrity, and long term relationships', 'planetario-tailpress'),
	],
	[
		'icon'  => 'users',
		'title' => __('Client Focused', 'planetario-tailpress'),
		'copy'  => "Your goals, our priority. \nAlways",
	],
	[
		'icon'  => 'heart-handshake',
		'title' => __('Transparent Transactions', 'planetario-tailpress'),
		'copy'  => __('Clear, smooth, and hassle-free processes', 'planetario-tailpress'),
	],
	[
		'icon'  => 'chart-no-axes-combined',
		'title' => __('Market Expertise', 'planetario-tailpress'),
		'copy'  => __('In-deph knowledge for smarter decissions', 'planetario-tailpress'),
	],
];
$trust_indicator_motion_delays = [
	'motion-delay-200',
	'motion-delay-300',
	'motion-delay-500',
	'motion-delay-700',
];
$features = [
	[
		'icon'  => 'shield-check',
		'title' => __('Licensed & Accredited', 'planetario-tailpress'),
		'copy'  => __('PRC-licensed brokers with active accreditation from trusted developers. Every recommendation is grounded in real expertise.', 'planetario-tailpress'),
	],
	[
		'icon'  => 'handshake',
		'title' => __('Relationship First', 'planetario-tailpress'),
		'copy'  => __('We do not just sell properties. We guide life decisions with patience, clarity, and long-term accountability.', 'planetario-tailpress'),
	],
	[
		'icon'  => 'building-2',
		'title' => __('Curated Portfolio', 'planetario-tailpress'),
		'copy'  => __('From Bohol communities to Cebu addresses, we represent properties we would confidently recommend to our own families.', 'planetario-tailpress'),
	],
	[
		'icon'  => 'sparkles',
		'title' => __('End-to-End Care', 'planetario-tailpress'),
		'copy'  => __('Site tours, financing guidance, documentation, turnover. One accountable team stays with you all the way through.', 'planetario-tailpress'),
	],
];

$team = [
	[
		'image' => 'team1-BCz3YlXd.jpg',
		'name'  => 'Maria Liza Santos',
		'role'  => __('Founder & Principal Broker', 'planetario-tailpress'),
		'bio'   => __('PRC #0017823. Eighteen years closing landmark residential transactions across the Philippines.', 'planetario-tailpress'),
	],
	[
		'image' => 'team4-CRmU_i0v.jpg',
		'name'  => 'Ramon Dela Cruz',
		'role'  => __('Managing Director', 'planetario-tailpress'),
		'bio'   => __('Former developer-side executive who now negotiates on behalf of buyers and long-term investors.', 'planetario-tailpress'),
	],
	[
		'image' => 'team3-DMXQ2-xv.jpg',
		'name'  => 'Patricia Mendoza',
		'role'  => __('Senior Property Consultant', 'planetario-tailpress'),
		'bio'   => __('A calm guide for first-time buyers, OFW families, and clients moving through financing decisions.', 'planetario-tailpress'),
	],
	[
		'image' => 'team2-DGv10qLU.jpg',
		'name'  => 'Miguel Reyes',
		'role'  => __('Investment Advisor', 'planetario-tailpress'),
		'bio'   => __('Focused on yield, location fundamentals, and real numbers behind pre-selling opportunities.', 'planetario-tailpress'),
	],
];

$developers = [
	[
		'image' => 'dev1-DffGIElF.jpg',
		'name'  => 'Ayala Land Premier',
		'copy'  => __('Flagship addresses with enduring value and refined estate management.', 'planetario-tailpress'),
	],
	[
		'image' => 'dev2-CRyW6_p_.jpg',
		'name'  => 'AboitizLand',
		'copy'  => __('Master-planned communities shaped by livability, connectivity, and long-term growth.', 'planetario-tailpress'),
	],
	[
		'image' => 'dev3-De3OTb68.jpg',
		'name'  => 'Megaworld',
		'copy'  => __('Integrated townships and investment-ready condominium projects across strategic districts.', 'planetario-tailpress'),
	],
	[
		'image' => 'dev4-BOOHN2H7.jpg',
		'name'  => 'Vista Land',
		'copy'  => __('Residential communities built for Filipino families moving into ownership.', 'planetario-tailpress'),
	],
];

$stories = [
	[
		'metric' => '42 days',
		'label'  => __('Reservation to contract', 'planetario-tailpress'),
		'title'  => 'Panglao coastal lot acquisition',
		'copy'   => __('A returning OFW family secured a titled lot near Panglao with full due diligence, clean documentation, and remote signing support.', 'planetario-tailpress'),
	],
	[
		'metric' => '18%',
		'label'  => __('Projected rental yield lift', 'planetario-tailpress'),
		'title'  => 'Cebu investment condo upgrade',
		'copy'   => __('We redirected an investor from a crowded launch to a better-positioned unit with stronger exit and leasing assumptions.', 'planetario-tailpress'),
	],
	[
		'metric' => '90 days',
		'label'  => __('From search to keys', 'planetario-tailpress'),
		'title'  => 'Family home in Bohol',
		'copy'   => __('A growing family moved from renting to ownership through guided financing, property tours, and turnover coordination.', 'planetario-tailpress'),
	],
];

$testimonials = [
	[
		'quote'  => __('Planetario did not just sell us a unit. They walked us through every signature, payment milestone, and turnover detail.', 'planetario-tailpress'),
		'name'   => 'Anna & Mark Villanueva',
		'detail' => __('Bought a condo in 2024', 'planetario-tailpress'),
	],
	[
		'quote'  => __('I have worked with three brokerages over my investment career. None matched the discipline and follow-through of this team.', 'planetario-tailpress'),
		'name'   => 'Engr. Dante Ramos',
		'detail' => __('Investor, six properties', 'planetario-tailpress'),
	],
	[
		'quote'  => __('We are an OFW family. They handled viewings, paperwork, and turnover while we were abroad. We came home to a finished house.', 'planetario-tailpress'),
		'name'   => 'The Cruz Family',
		'detail' => __('House and lot in Bohol', 'planetario-tailpress'),
	],
	[
		'quote'  => __('Honest about pros and cons. They steered us away from a flashy unit toward something that actually fit our budget.', 'planetario-tailpress'),
		'name'   => 'Karla Tan',
		'detail' => __('First-time buyer', 'planetario-tailpress'),
	],
];

$journal_posts = [
	[
		'image' => 'blog1-S_C9wbKp.jpg',
		'tag'   => __('Buyer Guide', 'planetario-tailpress'),
		'date'  => 'Apr 2026',
		'title' => __('Pre-Selling vs. Ready-for-Occupancy: Which Should You Buy?', 'planetario-tailpress'),
		'copy'  => __('A practical framework for weighing payment terms, appreciation, and risk using current launch assumptions.', 'planetario-tailpress'),
	],
	[
		'image' => 'blog2-CmHlBNAT.jpg',
		'tag'   => __('Financing', 'planetario-tailpress'),
		'date'  => 'Mar 2026',
		'title' => __('Pag-IBIG, Bank, or In-House? The Real Cost of Each Path', 'planetario-tailpress'),
		'copy'  => __('A side-by-side guide to monthly payments, fees, equity, and timing for Filipino homebuyers.', 'planetario-tailpress'),
	],
	[
		'image' => 'blog3-BjiHO9ZG.jpg',
		'tag'   => __('Market Outlook', 'planetario-tailpress'),
		'date'  => 'Feb 2026',
		'title' => __('Where Philippine Property is Quietly Appreciating in 2026', 'planetario-tailpress'),
		'copy'  => __('Three submarkets benefiting from infrastructure, tourism, and renewed end-user demand.', 'planetario-tailpress'),
	],
];
?>
<section id="top" class="hero relative min-h-screen">
	<img class="hero__image" src="<?php echo planetario_tailpress_image('hero-DqwsNBEx.jpg'); ?>" alt="<?php esc_attr_e('Aerial view of a luxury Filipino residential community at golden hour', 'planetario-tailpress'); ?>">
	<div class="hero__overlay"></div>
	<div class="absolute inset-0 bg-gradient-to-t from-[#000000]/25 via-[#000000]/10 to-transparent"></div>
	<div class="hero__inner section-inner z-20 relative">
		<div class="hero__copy mx-auto xl:mx-0 flex flex-col">
			<div class="relative text-center xl:text-left motion-preset-slide-up motion-opacity-in-0 motion-duration-700">
				<!-- <span class="!text-md !tracking-widest font-thin uppercase">
					Your Trusted Real Estate Partner
				</span> -->
				<p class="eyebrow !text-xs !my-2 !text-center xl:!text-left !ml-auto !mr-auto xl:!ml-0">Your Trusted Real Estate Partner</p>
				<span class="border-b border-b-slate-200 w-1/3 absolute right-1/3 xl:left-0 translate-x--full bottom-0 opacity-25"></span>
			</div>
			<h1 class="motion-preset-slide-up motion-opacity-in-0 motion-duration-700 motion-delay-150"><?php esc_html_e("Commited to Change People's Lives", 'planetario-tailpress'); ?> <em><?php esc_html_e('for Progress.', 'planetario-tailpress'); ?></em></h1>
			<p class="mx-auto xl:mx-0 motion-preset-slide-up motion-opacity-in-0 motion-duration-700 motion-delay-300"><?php esc_html_e('Planetario Realty connects Filipino families and discerning investors with extraordinary properties from trusted developers, guided by a team that treats every transaction as a long-term relationship.', 'planetario-tailpress'); ?></p>
			<div class="hero__actions motion-preset-slide-up motion-opacity-in-0 motion-duration-700 motion-delay-500 group">
				<!-- CTA Buttons -->
				<a class="button button--primary group-hover:!animate-none" href="#contact"><?php esc_html_e('Book a Consultation', 'planetario-tailpress'); ?><i data-lucide="arrow-right" class="icon icon--button" aria-hidden="true"></i></a>
				<a class="button button--ghost group-hover:!animate-none" href="#developers"><?php esc_html_e('Explore Properties', 'planetario-tailpress'); ?></a>
			</div>
		</div>
		<div class="trust-indicators-list xl:absolute xl:top-0 w-full flex items-center justify-center xl:justify-end xl:h-full right-0 xl:pr-10 bottom-4 pt-10 xl:pt-0 pointer-events-none pb-5">
			<!-- TRUST INDICATORS LIST -->
			<div class=" grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 gap-2 lg:gap-y-8">
				<?php foreach ($trust_indicators as $index => $indicator) : ?>
					<div class="trust-indicator-card <?php echo esc_attr($trust_indicator_motion_delays[$index] ?? 'motion-delay-700'); ?>">
						<div class="icon-badge !mb-0" aria-hidden="true"><i data-lucide="<?php echo esc_attr($indicator['icon']); ?>" class="icon icon--feature"></i></div>
						<div class="flex-col">
							<h4 class="font-sora font-bold text-xs xl:text-sm !m-0"><?php echo esc_html($indicator['title']); ?></h4>
							<p class="!text-[10.5px] xl:!text-xs text-gray-300 !m-0 !text-left tracking-wide leading"><?php echo esc_html($indicator['copy']); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="trust-indicators-mobile-carousel" aria-label="<?php esc_attr_e('Trust indicators carousel', 'planetario-tailpress'); ?>">
			<!-- TRUST INDICATORS MOBILE CAROUSEL -->
			<?php foreach ($trust_indicators as $index => $indicator) : ?>
				<div class="trust-indicators-mobile-slide">
					<div class="trust-indicator-card trust-indicator-card--mobile">
						<div class="icon-badge !mb-0" aria-hidden="true"><i data-lucide="<?php echo esc_attr($indicator['icon']); ?>" class="icon icon--feature"></i></div>
						<div class="flex-col">
							<h4 class="font-sora font-bold text-xs !m-0"><?php echo esc_html($indicator['title']); ?></h4>
							<p class="!text-[10.5px] text-gray-300 !m-0 !text-left tracking-wide leading"><?php echo esc_html($indicator['copy']); ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			<div class="trust-indicators-mobile-dots" aria-hidden="true">
				<?php foreach ($trust_indicators as $index => $indicator) : ?>
					<span class="trust-indicators-mobile-dot"></span>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<a class="hero-scroll-cue flex-col z-10 sticky bottom-2 gap-0" href="#about" aria-label="<?php esc_attr_e('Scroll down to about section', 'planetario-tailpress'); ?>">
		<span><?php esc_html_e('Scroll down', 'planetario-tailpress'); ?></span>
		<i data-lucide="chevrons-down" class="icon" aria-hidden="true"></i>
	</a>

</section>

<section id="about" class="section section--light">
	<div class="section-inner split-layout">
		<div class="section-heading reveal">
			<p class="eyebrow"><?php esc_html_e('About Us', 'planetario-tailpress'); ?></p>
			<h2><?php esc_html_e('Built on trust.', 'planetario-tailpress'); ?><br><em><?php esc_html_e('Measured in homes.', 'planetario-tailpress'); ?></em></h2>
			<p><strong><?php esc_html_e('Planetario Realty and Brokerage Services Inc. (PRBSI)', 'planetario-tailpress'); ?></strong> <?php esc_html_e('was established in 2018 to engage in real estate development and marketing. Our projects are primarily located in Bohol and Cebu, particularly Panglao, Dauis, Tubigon, Samboan, and Villa Regina Cebu.', 'planetario-tailpress'); ?></p>
			<div class="compliance-pill"><span></span><?php esc_html_e('DHSUD, PRC, and HLURB compliant', 'planetario-tailpress'); ?></div>
		</div>
		<div class="feature-grid">
			<?php foreach ($features as $feature) : ?>
				<article class="feature-card reveal">
					<div class="icon-badge" aria-hidden="true"><i data-lucide="<?php echo esc_attr($feature['icon']); ?>" class="icon icon--feature"></i></div>
					<h3><?php echo esc_html($feature['title']); ?></h3>
					<p class=""><?php echo nl2br($feature['copy']); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="mission-vision" class="section section--navy">
	<div class="ambient ambient--left"></div>
	<div class="ambient ambient--right"></div>
	<div class="section-inner">
		<div class="section-heading section-heading--center reveal">
			<p class="eyebrow eyebrow--soft"><?php esc_html_e('Purpose & Direction', 'planetario-tailpress'); ?></p>
			<h2><?php esc_html_e('What guides', 'planetario-tailpress'); ?> <em><?php esc_html_e('everything we do.', 'planetario-tailpress'); ?></em></h2>
		</div>
		<div class="purpose-grid">
			<article class="purpose-panel reveal">
				<p class="eyebrow eyebrow--soft"><?php esc_html_e('Our Vision', 'planetario-tailpress'); ?></p>
				<h3><?php esc_html_e('A world-class standard for Philippine real estate.', 'planetario-tailpress'); ?></h3>
				<p><?php esc_html_e('To be a world-class real estate company providing world-class service to clients, business partners, team members, and planet earth while maintaining the highest standards of the industry.', 'planetario-tailpress'); ?></p>
			</article>
			<article class="purpose-panel reveal">
				<p class="eyebrow eyebrow--soft"><?php esc_html_e('Our Mission', 'planetario-tailpress'); ?></p>
				<h3><?php esc_html_e('Service that leaves clients thoroughly satisfied.', 'planetario-tailpress'); ?></h3>
				<p><?php esc_html_e('We exist to provide world-class services in the real estate industry and to continually grow through innovation, training, and long-term client relationships.', 'planetario-tailpress'); ?></p>
			</article>
		</div>
	</div>
</section>

<section id="team" class="section section--muted">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('Our Team', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('The people behind every key.', 'planetario-tailpress'); ?></h2>
			</div>
			<p><?php esc_html_e('A tight-knit team of licensed brokers and consultants, chosen as much for integrity as market knowledge.', 'planetario-tailpress'); ?></p>
		</div>
		<div class="team-grid">
			<?php foreach ($team as $member) : ?>
				<article class="person-card reveal">
					<figure><img src="<?php echo planetario_tailpress_image($member['image']); ?>" alt="<?php echo esc_attr($member['name']); ?>"></figure>
					<div>
						<h3><?php echo esc_html($member['name']); ?></h3>
						<p class="role"><?php echo esc_html($member['role']); ?></p>
						<p><?php echo esc_html($member['bio']); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="developers" class="section section--light">
	<div class="section-inner">
		<div class="section-heading reveal">
			<p class="eyebrow"><?php esc_html_e('Developers', 'planetario-tailpress'); ?></p>
			<h2><?php esc_html_e('Trusted names, carefully matched to your goals.', 'planetario-tailpress'); ?></h2>
		</div>
		<div class="developer-grid">
			<?php foreach ($developers as $developer) : ?>
				<article class="developer-tile reveal">
					<img src="<?php echo planetario_tailpress_image($developer['image']); ?>" alt="<?php echo esc_attr($developer['name']); ?>">
					<div>
						<h3><?php echo esc_html($developer['name']); ?></h3>
						<p><?php echo esc_html($developer['copy']); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="stories" class="section section--navy section--compact">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow eyebrow--soft"><?php esc_html_e('Success Stories', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('Clear outcomes, not sales theater.', 'planetario-tailpress'); ?></h2>
			</div>
			<p><?php esc_html_e('Every good deal has a story: context, constraints, negotiation, and a clean handover.', 'planetario-tailpress'); ?></p>
		</div>
		<div class="story-grid">
			<?php foreach ($stories as $story) : ?>
				<article class="story-panel reveal">
					<div class="story-panel__metric"><?php echo esc_html($story['metric']); ?></div>
					<p class="story-panel__label"><?php echo esc_html($story['label']); ?></p>
					<h3><?php echo esc_html($story['title']); ?></h3>
					<p><?php echo esc_html($story['copy']); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="testimonials" class="section section--light">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('Testimonials', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('Words from the', 'planetario-tailpress'); ?><br><em><?php esc_html_e('families we serve.', 'planetario-tailpress'); ?></em></h2>
			</div>
			<p class="rating"><?php esc_html_e('4.9 average across 200+ verified client reviews', 'planetario-tailpress'); ?></p>
		</div>
		<div class="testimonial-grid">
			<?php foreach ($testimonials as $testimonial) : ?>
				<figure class="quote-card reveal">
					<blockquote>"<?php echo esc_html($testimonial['quote']); ?>"</blockquote>
					<figcaption>
						<span><?php echo esc_html(substr($testimonial['name'], 0, 1)); ?></span>
						<strong><?php echo esc_html($testimonial['name']); ?></strong>
						<small><?php echo esc_html($testimonial['detail']); ?></small>
					</figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="blog" class="section section--muted">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('Journal', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('Notes from the field.', 'planetario-tailpress'); ?></h2>
				<p><?php esc_html_e('Honest, no-fluff perspectives on the Philippine property market from brokers closing real deals.', 'planetario-tailpress'); ?></p>
			</div>
			<a class="text-link" href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog/')); ?>"><?php esc_html_e('View all articles', 'planetario-tailpress'); ?></a>
		</div>
		<div class="journal-grid">
			<?php foreach ($journal_posts as $post_item) : ?>
				<article class="journal-card reveal">
					<img src="<?php echo planetario_tailpress_image($post_item['image']); ?>" alt="">
					<div>
						<p class="journal-card__meta"><span><?php echo esc_html($post_item['tag']); ?></span><?php echo esc_html($post_item['date']); ?></p>
						<h3><?php echo esc_html($post_item['title']); ?></h3>
						<p><?php echo esc_html($post_item['copy']); ?></p>
						<a href="<?php echo esc_url(home_url('/blog/')); ?>"><?php esc_html_e('Read article', 'planetario-tailpress'); ?></a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="contact" class="contact-section">
	<div class="section-inner contact-grid">
		<div class="contact-copy reveal">
			<p class="eyebrow eyebrow--soft"><?php esc_html_e('Let us talk', 'planetario-tailpress'); ?></p>
			<h2><?php esc_html_e('Ready to find', 'planetario-tailpress'); ?><br><em><?php esc_html_e('your next address?', 'planetario-tailpress'); ?></em></h2>
			<p><?php esc_html_e('Book a free 30-minute consultation. No pressure, no scripts, just a conversation about what you are looking for.', 'planetario-tailpress'); ?></p>
			<div class="contact-links">
				<a href="tel:+639171234567"><i data-lucide="phone" class="icon icon--contact" aria-hidden="true"></i><span>+63 917 123 4567</span></a>
				<a href="mailto:hello@planetariorealty.ph"><i data-lucide="mail" class="icon icon--contact" aria-hidden="true"></i><span>hello@planetariorealty.ph</span></a>
				<p><i data-lucide="map-pin" class="icon icon--contact" aria-hidden="true"></i><span><?php esc_html_e('Ortigas Center, Pasig City, Metro Manila', 'planetario-tailpress'); ?></span></p>
			</div>
		</div>
		<form class="contact-form reveal" action="mailto:hello@planetariorealty.ph" method="post" enctype="text/plain" data-contact-form>
			<div class="field-row">
				<label><?php esc_html_e('Name', 'planetario-tailpress'); ?><input name="name" type="text" placeholder="<?php esc_attr_e('Juan dela Cruz', 'planetario-tailpress'); ?>" required></label>
				<label><?php esc_html_e('Phone', 'planetario-tailpress'); ?><input name="phone" type="tel" placeholder="<?php esc_attr_e('+63 9XX XXX XXXX', 'planetario-tailpress'); ?>"></label>
			</div>
			<label><?php esc_html_e('Email', 'planetario-tailpress'); ?><input name="email" type="email" placeholder="<?php esc_attr_e('you@email.com', 'planetario-tailpress'); ?>" required></label>
			<label><?php esc_html_e('How can we help?', 'planetario-tailpress'); ?><textarea name="message" rows="4" placeholder="<?php esc_attr_e('Tell us about the property you are looking for...', 'planetario-tailpress'); ?>"></textarea></label>
			<button class="button button--primary" type="submit"><?php esc_html_e('Send Message', 'planetario-tailpress'); ?></button>
			<p class="form-note" role="status" data-form-note></p>
		</form>
	</div>
	<div class="footer-line section-inner">
		<div class="footer-brand">
			<img src="<?php echo planetario_tailpress_image('logo-RPce9ZQs.jpeg'); ?>" alt="">
			<p><strong><?php esc_html_e('Planetario Realty', 'planetario-tailpress'); ?></strong><span><?php esc_html_e('2026 Planetario Realty and Brokerage Services Inc.', 'planetario-tailpress'); ?></span></p>
		</div>
		<div class="social-links">
			<a href="#" aria-label="<?php esc_attr_e('Facebook', 'planetario-tailpress'); ?>">Fb</a>
			<a href="#" aria-label="<?php esc_attr_e('Instagram', 'planetario-tailpress'); ?>">Ig</a>
			<a href="#" aria-label="<?php esc_attr_e('LinkedIn', 'planetario-tailpress'); ?>">In</a>
		</div>
	</div>
</section>

<?php
get_footer();
