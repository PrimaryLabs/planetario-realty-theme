<?php
/**
 * Template Name: Blog Page
 * Template Post Type: page
 *
 * @package PlanetarioTailPress
 */

get_header();

if (have_posts()) {
	the_post();
}

$page_title = get_the_title() ?: __('Blog', 'planetario-tailpress');
$page_intro = get_the_excerpt();
$paged      = max(1, (int) get_query_var('paged'), (int) get_query_var('page'));
$blog_query = new WP_Query(
	[
		'post_type'      => 'post',
		'posts_per_page' => 9,
		'paged'          => $paged,
	]
);

$featured_post   = $blog_query->posts[0] ?? null;
$secondary_posts = array_slice($blog_query->posts, 1, 3);
?>

<section class="about-hero">
	<img class="about-hero__image" src="<?php echo planetario_tailpress_image('hero-DqwsNBEx.jpg'); ?>" alt="<?php esc_attr_e('City skyline and residential communities', 'planetario-tailpress'); ?>">
	<div class="about-hero__overlay"></div>
	<div class="section-inner about-hero__inner">
		<div class="about-hero__copy reveal">
			<p class="eyebrow eyebrow--soft"><?php esc_html_e('Journal', 'planetario-tailpress'); ?></p>
			<h1><?php echo esc_html($page_title); ?></h1>
			<p><?php echo esc_html($page_intro ?: __('A dedicated editorial page for buyer guides, market outlooks, developer updates, and practical stories from the field.', 'planetario-tailpress')); ?></p>
		</div>
	</div>
</section>

<section class="section section--light">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('Featured Reads', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('Stories and insights worth', 'planetario-tailpress'); ?><br><em><?php esc_html_e('starting with first.', 'planetario-tailpress'); ?></em></h2>
			</div>
			<p><?php esc_html_e('The latest featured article leads the page, while a quick side stack gives readers a faster way into timely topics.', 'planetario-tailpress'); ?></p>
		</div>
		<?php if ($featured_post instanceof WP_Post) : ?>
			<div class="journal-spotlight">
				<article class="journal-feature-card reveal">
					<a href="<?php echo esc_url(get_permalink($featured_post)); ?>">
						<?php if (has_post_thumbnail($featured_post)) : ?>
							<?php echo get_the_post_thumbnail($featured_post, 'large'); ?>
						<?php endif; ?>
						<div class="journal-feature-card__body">
							<p class="journal-card__meta"><span><?php echo esc_html(get_the_date('', $featured_post)); ?></span><?php esc_html_e('Featured Story', 'planetario-tailpress'); ?></p>
							<h2><?php echo esc_html(get_the_title($featured_post)); ?></h2>
							<p><?php echo esc_html(get_the_excerpt($featured_post)); ?></p>
							<span class="text-link"><?php esc_html_e('Read featured article', 'planetario-tailpress'); ?></span>
						</div>
					</a>
				</article>
				<div class="journal-stack">
					<?php foreach ($secondary_posts as $secondary_post) : ?>
						<article class="journal-mini-card reveal">
							<a href="<?php echo esc_url(get_permalink($secondary_post)); ?>">
								<p class="journal-mini-card__meta"><?php echo esc_html(get_the_date('', $secondary_post)); ?></p>
								<h3><?php echo esc_html(get_the_title($secondary_post)); ?></h3>
								<p><?php echo esc_html(get_the_excerpt($secondary_post)); ?></p>
							</a>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="section section--muted">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('All Articles', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('Market notes, buyer guides, and', 'planetario-tailpress'); ?><br><em><?php esc_html_e('field-tested advice.', 'planetario-tailpress'); ?></em></h2>
			</div>
			<p><?php esc_html_e('A flexible archive layout for publishing regular content while keeping the page polished and easy to scan.', 'planetario-tailpress'); ?></p>
		</div>
		<?php if ($blog_query->have_posts()) : ?>
			<div class="post-grid post-grid--journal">
				<?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
					<article <?php post_class('post-card reveal'); ?>>
						<a href="<?php the_permalink(); ?>">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('large'); ?>
							<?php endif; ?>
							<span><?php echo esc_html(get_the_date()); ?></span>
							<h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
						</a>
					</article>
				<?php endwhile; ?>
			</div>
			<div class="posts-pagination">
				<?php
				echo wp_kses_post(
					paginate_links(
						[
							'total'   => $blog_query->max_num_pages,
							'current' => $paged,
						]
					)
				);
				?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php esc_html_e('No posts found.', 'planetario-tailpress'); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
