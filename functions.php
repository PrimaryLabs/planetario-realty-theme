<?php

/**
 * Planetario TailPress theme setup.
 *
 * @package PlanetarioTailPress
 */

if (! defined('PLANETARIO_TAILPRESS_VERSION')) {
	define('PLANETARIO_TAILPRESS_VERSION', '1.0.0');
}

function planetario_tailpress_setup(): void
{
	load_theme_textdomain('planetario-tailpress', get_template_directory() . '/languages');

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo', [
		'height'      => 96,
		'width'       => 96,
		'flex-height' => true,
		'flex-width'  => true,
	]);
	add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
	add_theme_support('align-wide');
	add_theme_support('responsive-embeds');
	add_theme_support('editor-styles');
	add_editor_style('public/css/app.css');

	register_nav_menus([
		'nav-menu' => __('Header Menu', 'planetario-tailpress'),
		'primary'  => __('Primary Menu', 'planetario-tailpress'),
		'footer'   => __('Footer Menu', 'planetario-tailpress'),
	]);
}
add_action('after_setup_theme', 'planetario_tailpress_setup');

function planetario_tailpress_asset_from_manifest(string $entry): ?string
{
	$manifest_entry = planetario_tailpress_manifest_entry($entry);

	if (! is_array($manifest_entry) || empty($manifest_entry['file'])) {
		return null;
	}

	return get_theme_file_uri('public/build/' . $manifest_entry['file']);
}

function planetario_tailpress_manifest(): ?array
{
	static $manifest = null;
	static $loaded = false;

	if ($loaded) {
		return $manifest;
	}

	$loaded = true;

	$manifest_paths = [
		get_theme_file_path('public/build/.vite/manifest.json'),
		get_theme_file_path('public/build/manifest.json'),
	];

	foreach ($manifest_paths as $path) {
		if (! file_exists($path)) {
			continue;
		}

		$decoded = json_decode((string) file_get_contents($path), true);
		if (is_array($decoded)) {
			$manifest = $decoded;
			return $manifest;
		}
	}

	return null;
}

function planetario_tailpress_manifest_entry(string $entry): ?array
{
	$manifest = planetario_tailpress_manifest();

	if (! is_array($manifest) || empty($manifest[$entry]) || ! is_array($manifest[$entry])) {
		return null;
	}

	return $manifest[$entry];
}

function planetario_tailpress_vite_dev_server(): string
{
	return 'http://127.0.0.1:3000';
}

function planetario_tailpress_is_local_environment(): bool
{
	return function_exists('wp_get_environment_type') && wp_get_environment_type() === 'local';
}

function planetario_tailpress_is_vite_running(): bool
{
	static $is_running = null;

	if ($is_running !== null) {
		return $is_running;
	}

	$response = wp_remote_get(
		planetario_tailpress_vite_dev_server() . '/@vite/client',
		[
			'timeout'     => 0.5,
			'redirection' => 0,
		]
	);

	$is_running = ! is_wp_error($response) && wp_remote_retrieve_response_code($response) === 200;

	return $is_running;
}

function planetario_tailpress_enqueue_vite_dev_assets(): void
{
	$vite_server = planetario_tailpress_vite_dev_server();

	wp_enqueue_script(
		'planetario-tailpress-vite-client',
		$vite_server . '/@vite/client',
		[],
		null,
		false
	);

	wp_enqueue_script(
		'planetario-tailpress-app',
		$vite_server . '/resources/js/app.js',
		['planetario-tailpress-vite-client'],
		null,
		false
	);
}

function planetario_tailpress_enqueue_built_assets(): void
{
	$manifest_entry = planetario_tailpress_manifest_entry('resources/js/app.js');

	if (is_array($manifest_entry) && ! empty($manifest_entry['css']) && is_array($manifest_entry['css'])) {
		foreach ($manifest_entry['css'] as $index => $css_file) {
			wp_enqueue_style(
				'planetario-tailpress' . ($index ? '-' . $index : ''),
				get_theme_file_uri('public/build/' . ltrim($css_file, '/')),
				['planetario-tailpress-fonts'],
				PLANETARIO_TAILPRESS_VERSION
			);
		}
	} else {
		wp_enqueue_style(
			'planetario-tailpress',
			get_theme_file_uri('public/css/app.css'),
			['planetario-tailpress-fonts'],
			PLANETARIO_TAILPRESS_VERSION
		);
	}

	$built_js = planetario_tailpress_asset_from_manifest('resources/js/app.js');

	if ($built_js) {
		wp_enqueue_script(
			'planetario-tailpress-app',
			$built_js,
			[],
			PLANETARIO_TAILPRESS_VERSION,
			true
		);

		return;
	}

	wp_enqueue_script(
		'planetario-tailpress',
		get_theme_file_uri('public/js/app.js'),
		[],
		PLANETARIO_TAILPRESS_VERSION,
		true
	);
}

function planetario_tailpress_enqueue_assets(): void
{
	$font_url = 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Sora:wght@300;400;500;600;700&display=swap';

	wp_enqueue_style(
		'planetario-tailpress-fonts',
		$font_url,
		[],
		null
	);

	if (planetario_tailpress_is_local_environment() && planetario_tailpress_is_vite_running()) {
		planetario_tailpress_enqueue_vite_dev_assets();
		return;
	}

	planetario_tailpress_enqueue_built_assets();
}
add_action('wp_enqueue_scripts', 'planetario_tailpress_enqueue_assets');

function planetario_tailpress_script_loader_tag(string $tag, string $handle, string $src): string
{
	$module_handles = [
		'planetario-tailpress-vite-client',
		'planetario-tailpress-app',
	];

	if (! in_array($handle, $module_handles, true)) {
		return $tag;
	}

	return sprintf(
		'<script type="module" src="%s"></script>',
		esc_url($src)
	);
}
add_filter('script_loader_tag', 'planetario_tailpress_script_loader_tag', 10, 3);

function planetario_tailpress_image(string $filename): string
{
	return esc_url(get_theme_file_uri('resources/images/' . ltrim($filename, '/')));
}

function planetario_tailpress_load_acf_fields(): void
{
	foreach (glob(get_theme_file_path('acf-fields/*.php')) ?: [] as $file) {
		require_once $file;
	}
}
add_action('acf/init', 'planetario_tailpress_load_acf_fields');
