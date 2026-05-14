<?php
/**
 * The footer for the Planetario TailPress theme.
 *
 * @package PlanetarioTailPress
 */

$footer_fallback_links = [
	[
		'label' => __('About', 'planetario-tailpress'),
		'href'  => home_url('/#about'),
	],
	[
		'label' => __('Our Services', 'planetario-tailpress'),
		'href'  => home_url('/#services'),
	],
	[
		'label' => __('Team', 'planetario-tailpress'),
		'href'  => home_url('/teams/'),
	],
	[
		'label' => __('Success Stories', 'planetario-tailpress'),
		'href'  => home_url('/success-stories/'),
	],
	[
		'label' => __('Contact Us', 'planetario-tailpress'),
		'href'  => home_url('/contact/'),
	],
];
?>
</main>
<footer class="site-footer">
	<div class="footer-grid section-inner">
		<div class="footer-column footer-column--brand">
			<div class="footer-brand">
				<img src="<?php echo planetario_tailpress_image('logo-RPce9ZQs.jpeg'); ?>" alt="<?php esc_attr_e('Planetario Realty logo', 'planetario-tailpress'); ?>">
				<p><strong><?php esc_html_e('Planetario Realty', 'planetario-tailpress'); ?></strong><span><?php esc_html_e('2026 Planetario Realty and Brokerage Services Inc.', 'planetario-tailpress'); ?></span></p>
			</div>
			<p class="footer-copy"><?php esc_html_e('Trusted guidance for property sales, brokerage, site tours, and investment decisions across the Philippine market.', 'planetario-tailpress'); ?></p>
		</div>
		<div class="footer-column footer-column--nav">
			<p class="footer-heading"><?php esc_html_e('Quick Links', 'planetario-tailpress'); ?></p>
			<?php if (has_nav_menu('footer')) : ?>
				<?php
				wp_nav_menu(
					[
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => 'footer-menu',
						'depth'          => 1,
						'fallback_cb'    => false,
					]
				);
				?>
			<?php else : ?>
				<ul class="footer-menu">
					<?php foreach ($footer_fallback_links as $link) : ?>
						<li><a href="<?php echo esc_url($link['href']); ?>"><?php echo esc_html($link['label']); ?></a></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
		<div class="footer-column footer-column--contact">
			<p class="footer-heading"><?php esc_html_e('Connect', 'planetario-tailpress'); ?></p>
			<div class="footer-contact-list">
				<a href="tel:+639171234567"><i data-lucide="phone" class="icon icon--contact" aria-hidden="true"></i><span>+63 917 123 4567</span></a>
				<a href="mailto:hello@planetariorealty.ph"><i data-lucide="mail" class="icon icon--contact" aria-hidden="true"></i><span>hello@planetariorealty.ph</span></a>
				<p><i data-lucide="map-pin" class="icon icon--contact" aria-hidden="true"></i><span><?php esc_html_e('Ortigas Center, Pasig City, Metro Manila', 'planetario-tailpress'); ?></span></p>
			</div>
			<div class="social-links">
				<a href="#" aria-label="<?php esc_attr_e('Facebook', 'planetario-tailpress'); ?>"><i data-lucide="facebook" class="icon" aria-hidden="true"></i></a>
				<a href="#" aria-label="<?php esc_attr_e('Instagram', 'planetario-tailpress'); ?>"><i data-lucide="instagram" class="icon" aria-hidden="true"></i></a>
				<a href="#" aria-label="<?php esc_attr_e('LinkedIn', 'planetario-tailpress'); ?>"><i data-lucide="linkedin" class="icon" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
