<?php

if (! function_exists('acf_add_local_field_group')) {
	return;
}

acf_add_local_field_group([
	'key'      => 'group_front_page',
	'title'    => 'Front Page',
	'fields'   => [
		// Example field — replace or expand as needed
		[
			'key'   => 'field_hero_heading',
			'label' => 'Hero Heading',
			'name'  => 'hero_heading',
			'type'  => 'text',
		],
		[
			'key'   => 'field_hero_subheading',
			'label' => 'Hero Subheading',
			'name'  => 'hero_subheading',
			'type'  => 'textarea',
		],
	],
	'location' => [
		[
			[
				'param'    => 'page_type',
				'operator' => '==',
				'value'    => 'front_page',
			],
		],
	],
]);
