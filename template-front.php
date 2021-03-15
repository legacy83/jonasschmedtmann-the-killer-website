<?php

/**
 * Template Name: Front Template
 *
 */

use function Mezu\view;

add_action('wp_enqueue_scripts', function () {

	// enqueue page styles
	wp_enqueue_style(
		'app/theme/template-front',
		get_theme_file_uri('template-front.css')
	);
});

add_action('app/theme/layout', function () {

	// render page sections
	print view('section/section', 'hero')->render();
	print view('section/section', 'features')->render();
	print view('section/section', 'meals')->render();
	print view('section/section', 'steps')->render();
	print view('section/section', 'cities')->render();
	print view('section/section', 'testimonials')->render();
	print view('section/section', 'plans')->render();
	print view('section/section', 'contact')->render();
	print view('section/section', 'footer')->render();
});

// render page layout
print view('layout/layout')->render();
