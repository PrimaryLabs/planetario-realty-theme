<?php

/**
 * The header for the Planetario TailPress theme.
 *
 * @package PlanetarioTailPress
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'planetario-tailpress'); ?></a>
	<?php
	$planetario_header_menu_exists = has_nav_menu('nav-menu') || wp_get_nav_menu_object('Header Menu');
	$planetario_header_menu_args   = [
		'theme_location' => 'nav-menu',
		'menu'           => 'Header Menu',
		'container'      => false,
		'depth'          => 1,
		'fallback_cb'    => false,
	];
	?>
	<header class="site-header" data-site-header>
		<div class="site-header__inner">
			<div class="brand mr-auto">

				<img class="brand__logo" src="<?php echo planetario_tailpress_image('logo-333x333.png'); ?>" alt="<?php esc_attr_e('Planetario Realty and Brokerage Services', 'planetario-tailpress'); ?>" width="44" height="44" />
				<a href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Planetario Realty home', 'planetario-tailpress'); ?>">
					<span class="brand__text">
						<span class="brand__name"><?php esc_html_e('Planetario Realty', 'planetario-tailpress'); ?></span>
						<span class="brand__kicker"><?php esc_html_e('& Brokerage Services Inc.', 'planetario-tailpress'); ?></span>
					</span>
				</a>
			</div>

			<nav class="primary-nav" aria-label="<?php esc_attr_e('Primary navigation', 'planetario-tailpress'); ?>">
				<?php if ($planetario_header_menu_exists) : ?>
					<?php
					wp_nav_menu(
						array_merge(
							$planetario_header_menu_args,
							[
								'menu_id'    => 'header-menu',
								'menu_class' => 'primary-nav__list',
							]
						)
					);
					?>
				<?php else : ?>
					<a href="<?php echo esc_url(home_url('/about/')); ?>"><?php esc_html_e('About', 'planetario-tailpress'); ?></a>
					<a href="<?php echo esc_url(home_url('/#team')); ?>"><?php esc_html_e('Team', 'planetario-tailpress'); ?></a>
					<a href="<?php echo esc_url(home_url('/#developers')); ?>"><?php esc_html_e('Developers', 'planetario-tailpress'); ?></a>
					<a href="<?php echo esc_url(home_url('/#stories')); ?>"><?php esc_html_e('Success Stories', 'planetario-tailpress'); ?></a>
					<a href="<?php echo esc_url(home_url('/#testimonials')); ?>"><?php esc_html_e('Testimonials', 'planetario-tailpress'); ?></a>
					<a href="<?php echo esc_url(home_url('/#blog')); ?>"><?php esc_html_e('Blog', 'planetario-tailpress'); ?></a>
				<?php endif; ?>
			</nav>

			<a class="header-cta" href="<?php echo esc_url(home_url('/#contact')); ?>"><?php esc_html_e('Get in Touch', 'planetario-tailpress'); ?></a>

			<button class="menu-toggle" type="button" aria-controls="mobile-menu" aria-expanded="false" data-menu-toggle>
				<span class="screen-reader-text"><?php esc_html_e('Open menu', 'planetario-tailpress'); ?></span>
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>

		<div id="mobile-menu" class="mobile-nav" hidden data-mobile-menu>
			<?php if ($planetario_header_menu_exists) : ?>
				<?php
				wp_nav_menu(
					array_merge(
						$planetario_header_menu_args,
						[
							'menu_id'    => 'mobile-header-menu',
							'menu_class' => 'mobile-nav__list',
						]
					)
				);
				?>
			<?php else : ?>
				<a href="<?php echo esc_url(home_url('/about/')); ?>"><?php esc_html_e('About', 'planetario-tailpress'); ?></a>
				<a href="<?php echo esc_url(home_url('/#team')); ?>"><?php esc_html_e('Team', 'planetario-tailpress'); ?></a>
				<a href="<?php echo esc_url(home_url('/#developers')); ?>"><?php esc_html_e('Developers', 'planetario-tailpress'); ?></a>
				<a href="<?php echo esc_url(home_url('/#stories')); ?>"><?php esc_html_e('Success Stories', 'planetario-tailpress'); ?></a>
				<a href="<?php echo esc_url(home_url('/#testimonials')); ?>"><?php esc_html_e('Testimonials', 'planetario-tailpress'); ?></a>
				<a href="<?php echo esc_url(home_url('/#blog')); ?>"><?php esc_html_e('Blog', 'planetario-tailpress'); ?></a>
				<a href="<?php echo esc_url(home_url('/#contact')); ?>"><?php esc_html_e('Get in Touch', 'planetario-tailpress'); ?></a>
			<?php endif; ?>
		</div>
	</header>
	<main id="main">