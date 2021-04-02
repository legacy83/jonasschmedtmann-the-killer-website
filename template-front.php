<?php

/**
 * Template Name: Front Template
 *
 */

use App\Theme\Loop\ContentFactory;
use App\Theme\Reusable\BlockAreaFactory;

use function Mezu\view;

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'app/theme/template-front',
		get_theme_file_uri('template-front.css')
	);
});

add_action('app/theme/header', function () {
	BlockAreaFactory::create('header')->display();
});

add_action('app/theme/footer', function () {
	BlockAreaFactory::create('footer')->display();
});

$content = ContentFactory::create();
add_action('app/theme/main', $content);

print view('layout/layout')->render();
