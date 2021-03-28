<?php

/**
 * Template Name: Front Template
 *
 */

use function Mezu\view;

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'app/theme/template-front',
		get_theme_file_uri('template-front.css')
	);
});

add_action('app/theme/header', function () {
	print view('section/section', 'hero')->render();
});

add_action('app/theme/footer', function () {
	print view('section/section', 'footer')->render();
});

add_action('app/theme/main', function () {
	if (have_posts()) : the_post();
		the_content();
	endif;
});

print view('layout/layout')->render();
