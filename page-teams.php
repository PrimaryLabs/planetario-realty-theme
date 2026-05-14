<?php
/**
 * Template Name: Teams Page
 * Template Post Type: page
 *
 * @package PlanetarioTailPress
 */

get_header();

if (have_posts()) {
	the_post();
}

$page_title = get_the_title() ?: __('Meet The Team', 'planetario-tailpress');

$team_groups = [
	[
		'layout'  => 'featured',
		'eyebrow' => __('Founders', 'planetario-tailpress'),
		'title'   => __('Founders setting the standard.', 'planetario-tailpress'),
		'copy'    => __('The founding leaders define the tone of service, discipline, and accountability that shapes every client interaction.', 'planetario-tailpress'),
		'members' => [
			[
				'image' => 'team1-BCz3YlXd.jpg',
				'name'  => 'Maria Liza Santos',
				'role'  => __('Founder & Principal Broker', 'planetario-tailpress'),
				'bio'   => __('Leads brokerage standards, partner relationships, and the company’s long-term client care approach.', 'planetario-tailpress'),
			],
			[
				'image' => 'team4-CRmU_i0v.jpg',
				'name'  => 'Ramon Dela Cruz',
				'role'  => __('Co-Founder & Managing Director', 'planetario-tailpress'),
				'bio'   => __('Oversees business growth, property strategy, and deal structuring across active markets.', 'planetario-tailpress'),
			],
		],
	],
	[
		'layout'  => 'compact',
		'eyebrow' => __('Managers', 'planetario-tailpress'),
		'title'   => __('Managers keeping every move coordinated.', 'planetario-tailpress'),
		'copy'    => __('These leaders guide consultants, align listings, and keep transactions moving cleanly from inquiry to turnover.', 'planetario-tailpress'),
		'members' => [
			[
				'image' => 'team3-DMXQ2-xv.jpg',
				'name'  => 'Patricia Mendoza',
				'role'  => __('Sales Manager', 'planetario-tailpress'),
				'bio'   => __('Coordinates client matching, agent support, and pipeline quality across residential and investment leads.', 'planetario-tailpress'),
			],
			[
				'image' => 'team2-DGv10qLU.jpg',
				'name'  => 'Miguel Reyes',
				'role'  => __('Operations Manager', 'planetario-tailpress'),
				'bio'   => __('Handles internal follow-through on documentation, partner updates, and transaction milestones.', 'planetario-tailpress'),
			],
		],
	],
	[
		'layout'  => 'compact',
		'eyebrow' => __('Agents', 'planetario-tailpress'),
		'title'   => __('Agents who guide buyers and investors day to day.', 'planetario-tailpress'),
		'copy'    => __('Client-facing advisors who shortlist properties, schedule tours, explain tradeoffs, and keep decisions practical.', 'planetario-tailpress'),
		'members' => [
			[
				'image' => 'team1-BCz3YlXd.jpg',
				'name'  => 'Angela Cruz',
				'role'  => __('Senior Property Agent', 'planetario-tailpress'),
				'bio'   => __('Supports first-time buyers looking for clear options and realistic next steps.', 'planetario-tailpress'),
			],
			[
				'image' => 'team2-DGv10qLU.jpg',
				'name'  => 'Jason Villareal',
				'role'  => __('Investment Property Agent', 'planetario-tailpress'),
				'bio'   => __('Works with investors comparing location demand, payment structures, and exit potential.', 'planetario-tailpress'),
			],
			[
				'image' => 'team3-DMXQ2-xv.jpg',
				'name'  => 'Nicole Tan',
				'role'  => __('Client Relations Agent', 'planetario-tailpress'),
				'bio'   => __('Focuses on timely follow-up, site coordination, and maintaining a calm buying experience.', 'planetario-tailpress'),
			],
			[
				'image' => 'team4-CRmU_i0v.jpg',
				'name'  => 'Carlo Fernandez',
				'role'  => __('Property Listings Agent', 'planetario-tailpress'),
				'bio'   => __('Manages active listings, seller expectations, and day-to-day market visibility.', 'planetario-tailpress'),
			],
		],
	],
	[
		'layout'  => 'compact',
		'eyebrow' => __('Employees', 'planetario-tailpress'),
		'title'   => __('Employees behind the scenes making service feel seamless.', 'planetario-tailpress'),
		'copy'    => __('Operations, admin, and client support staff help keep records, communication, and logistics in order.', 'planetario-tailpress'),
		'members' => [
			[
				'image' => 'team4-CRmU_i0v.jpg',
				'name'  => 'Lara Gomez',
				'role'  => __('Documentation Associate', 'planetario-tailpress'),
				'bio'   => __('Prepares checklists, tracks files, and helps clients stay on top of required paperwork.', 'planetario-tailpress'),
			],
			[
				'image' => 'team3-DMXQ2-xv.jpg',
				'name'  => 'Mark Salcedo',
				'role'  => __('Marketing Assistant', 'planetario-tailpress'),
				'bio'   => __('Supports listings, launch materials, and digital campaign coordination.', 'planetario-tailpress'),
			],
			[
				'image' => 'team2-DGv10qLU.jpg',
				'name'  => 'Kaye Navarro',
				'role'  => __('Client Support Officer', 'planetario-tailpress'),
				'bio'   => __('Helps manage updates, schedules, and client communication throughout active transactions.', 'planetario-tailpress'),
			],
		],
	],
];
?>

<section class="about-hero">
	<img class="about-hero__image" src="<?php echo planetario_tailpress_image('hero-DqwsNBEx.jpg'); ?>" alt="<?php esc_attr_e('Residential community at golden hour', 'planetario-tailpress'); ?>">
	<div class="about-hero__overlay"></div>
	<div class="section-inner about-hero__inner">
		<div class="about-hero__copy reveal">
			<p class="eyebrow eyebrow--soft"><?php esc_html_e('Our Team', 'planetario-tailpress'); ?></p>
			<h1><?php echo esc_html($page_title); ?></h1>
			<p><?php esc_html_e('From founders to frontline agents and support staff, every role exists to make property decisions feel clearer, calmer, and more accountable.', 'planetario-tailpress'); ?></p>
		</div>
	</div>
</section>

<?php foreach ($team_groups as $index => $group) : ?>
	<section class="section <?php echo esc_attr($index % 2 === 0 ? 'section--light' : 'section--muted'); ?>">
		<div class="section-inner">
			<div class="section-lead reveal">
				<div>
					<p class="eyebrow"><?php echo esc_html($group['eyebrow']); ?></p>
					<h2><?php echo esc_html($group['title']); ?></h2>
				</div>
				<p><?php echo esc_html($group['copy']); ?></p>
			</div>
			<?php if (($group['layout'] ?? 'featured') === 'featured') : ?>
				<div class="team-grid">
					<?php foreach ($group['members'] as $member) : ?>
						<article class="person-card reveal">
							<figure><img src="<?php echo planetario_tailpress_image($member['image']); ?>" alt="<?php echo esc_attr($member['name']); ?>"></figure>
							<div>
								<h3><?php echo esc_html($member['name']); ?></h3>
								<p class="role"><?php echo esc_html($member['role']); ?></p>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			<?php else : ?>
				<div class="team-compact-grid">
					<?php foreach ($group['members'] as $member) : ?>
						<article class="team-compact-card reveal">
							<div class="team-compact-card__media">
								<img src="<?php echo planetario_tailpress_image($member['image']); ?>" alt="<?php echo esc_attr($member['name']); ?>">
							</div>
							<div class="team-compact-card__content">
								<h3><?php echo esc_html($member['name']); ?></h3>
								<p class="role"><?php echo esc_html($member['role']); ?></p>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endforeach; ?>

<section class="about-cta section--navy">
	<div class="section-inner about-cta__inner reveal">
		<p class="eyebrow eyebrow--soft"><?php esc_html_e('Work With Us', 'planetario-tailpress'); ?></p>
		<h2><?php esc_html_e('Looking for a team that stays', 'planetario-tailpress'); ?> <em><?php esc_html_e('hands-on from start to finish?', 'planetario-tailpress'); ?></em></h2>
		<p><?php esc_html_e('Tell us what kind of property support you need, and we will connect you with the right people.', 'planetario-tailpress'); ?></p>
		<div class="about-cta__actions">
			<a class="button button--primary" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Contact Us', 'planetario-tailpress'); ?><i data-lucide="arrow-right" class="icon icon--button" aria-hidden="true"></i></a>
			<a class="button button--ghost" href="<?php echo esc_url(home_url('/success-stories/')); ?>"><?php esc_html_e('See Success Stories', 'planetario-tailpress'); ?></a>
		</div>
	</div>
</section>

<?php
get_footer();
