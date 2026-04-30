<?php
/**
 * Main template file.
 *
 * @package PlanetarioTailPress
 */

get_header();
?>

<section class="archive-shell">
	<div class="section-inner">
		<p class="eyebrow"><?php esc_html_e('Journal', 'planetario-tailpress'); ?></p>
		<h1><?php echo esc_html(get_the_archive_title() ?: get_bloginfo('name')); ?></h1>
		<?php if (have_posts()) : ?>
			<div class="post-grid">
				<?php while (have_posts()) : the_post(); ?>
					<article <?php post_class('post-card'); ?>>
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
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p><?php esc_html_e('No posts found.', 'planetario-tailpress'); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
