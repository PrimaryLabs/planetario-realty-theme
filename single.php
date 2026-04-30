<?php
/**
 * Single post template.
 *
 * @package PlanetarioTailPress
 */

get_header();
?>

<section class="content-shell">
	<div class="section-inner content-shell__inner">
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?>>
				<p class="eyebrow"><?php echo esc_html(get_the_date()); ?></p>
				<h1><?php the_title(); ?></h1>
				<?php if (has_post_thumbnail()) : ?>
					<figure class="featured-media"><?php the_post_thumbnail('full'); ?></figure>
				<?php endif; ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</section>

<?php
get_footer();
