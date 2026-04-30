<?php
/**
 * Search form.
 *
 * @package PlanetarioTailPress
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e('Search for:', 'planetario-tailpress'); ?></span>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e('Search...', 'planetario-tailpress'); ?>" value="<?php echo get_search_query(); ?>" name="s">
	</label>
	<button type="submit"><?php esc_html_e('Search', 'planetario-tailpress'); ?></button>
</form>
