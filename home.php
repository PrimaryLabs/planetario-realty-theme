<?php
/**
 * Blog posts index template.
 *
 * @package PlanetarioTailPress
 */

get_header();

$posts_page_id   = (int) get_option('page_for_posts');
$page_title      = $posts_page_id ? get_the_title($posts_page_id) : __('Journal', 'planetario-tailpress');
$page_intro      = $posts_page_id ? get_post_field('post_excerpt', $posts_page_id) : '';
$featured_post   = $wp_query->posts[0] ?? null;
$secondary_posts = array_slice($wp_query->posts, 1, 3);
?>

<section class="about-hero">
	<img class="about-hero__image" src="<?php echo planetario_tailpress_image('hero-DqwsNBEx.jpg'); ?>" alt="<?php esc_attr_e('City skyline and residential communities', 'planetario-tailpress'); ?>">
	<div class="about-hero__overlay"></div>
	<div class="section-inner about-hero__inner">
		<div class="about-hero__copy reveal">
			<p class="eyebrow eyebrow--soft"><?php esc_html_e('Journal', 'planetario-tailpress'); ?></p>
			<h1><?php echo esc_html($page_title); ?></h1>
			<p><?php echo esc_html($page_intro ?: __('Market notes, buyer guidance, developer updates, and grounded real estate insights shaped by actual client work.', 'planetario-tailpress')); ?></p>
		</div>
	</div>
</section>

<section class="section section--light">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('Editorial Picks', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('A closer read on what is moving', 'planetario-tailpress'); ?><br><em><?php esc_html_e('the property market now.', 'planetario-tailpress'); ?></em></h2>
			</div>
			<p><?php esc_html_e('A featured article leads the page, followed by quick reads for buyers, investors, and sellers watching the market closely.', 'planetario-tailpress'); ?></p>
		</div>
		<?php if ($featured_post instanceof WP_Post) : ?>
			<div class="journal-spotlight">
				<?php setup_postdata($featured_post); ?>
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
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</section>

<section class="section section--muted">
	<div class="section-inner">
		<div class="section-lead reveal">
			<div>
				<p class="eyebrow"><?php esc_html_e('Latest Articles', 'planetario-tailpress'); ?></p>
				<h2><?php esc_html_e('Fresh market notes and grounded', 'planetario-tailpress'); ?><br><em><?php esc_html_e('property insight.', 'planetario-tailpress'); ?></em></h2>
			</div>
			<p><?php esc_html_e('Use this page for educational content, project updates, buyer guides, and perspectives shaped by real client work.', 'planetario-tailpress'); ?></p>
		</div>
		<?php if (have_posts()) : ?>
			<div class="post-grid post-grid--journal">
				<?php while (have_posts()) : the_post(); ?>
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
				<?php the_posts_pagination(); ?>
			</div>
		<?php else : ?>
			<p><?php esc_html_e('No posts found.', 'planetario-tailpress'); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
