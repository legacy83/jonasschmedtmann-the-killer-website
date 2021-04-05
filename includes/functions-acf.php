<?php

namespace App\Theme;

use App\Theme\Acf\RegisterBlockTypeFactory;

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', RegisterBlockTypeFactory::make('cities', [
    'title' => __('Cities', 'app-theme'),
]));

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', RegisterBlockTypeFactory::make('contact', [
    'title' => __('Contact', 'app-theme'),
]));

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', RegisterBlockTypeFactory::make('features', [
    'title' => __('Features', 'app-theme'),
]));

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', RegisterBlockTypeFactory::make('footer', [
    'title' => __('Footer', 'app-theme'),
]));

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', RegisterBlockTypeFactory::make('hero', [
    'title' => __('Hero', 'app-theme'),
]));

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', RegisterBlockTypeFactory::make('meals', [
    'title' => __('Meals', 'app-theme'),
]));

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', RegisterBlockTypeFactory::make('pizza', [
    'title' => __('Pizza', 'app-theme'),
]));

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', RegisterBlockTypeFactory::make('plans', [
    'title' => __('Plans', 'app-theme'),
]));

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', RegisterBlockTypeFactory::make('steps', [
    'title' => __('Steps', 'app-theme'),
]));

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', RegisterBlockTypeFactory::make('testimonials', [
    'title' => __('Testimonials', 'app-theme'),
]));
