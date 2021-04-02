<?php

/**
 * Template Name: Front Template
 *
 */

use App\Theme\Loop\ContentFactory;
use App\Theme\Reusable\BlockAreaFactory;

use function Mezu\view;

add_action('app/theme/header', BlockAreaFactory::make('header'));
add_action('app/theme/footer', BlockAreaFactory::make('footer'));
add_action('app/theme/main', ContentFactory::make());

print view('layout/layout')->render();
