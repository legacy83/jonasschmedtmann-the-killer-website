<?php

/**
 * Template Name: Home Template
 *
 */

use function Mezu\view;

add_action('wp_enqueue_scripts', function () {

	// enqueue page styles
	wp_enqueue_style(
		'app/theme/template-home',
		get_theme_file_uri('template-home.css')
	);
});

add_action('app/theme/layout', function () {

	if (!have_posts()) return;
	the_post();

	// render page content
	print the_content();
});

// render page layout
print view('layout/layout')->render();
