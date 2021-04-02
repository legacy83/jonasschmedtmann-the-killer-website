<?php

namespace App\Theme;

use App\Theme\Acf\RegisterBlockTypeFactory;

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create('cities', [
        'title' => __('Cities', 'app-theme'),
    ])->register();
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create('contact', [
        'title' => __('Contact', 'app-theme'),
    ])->register();
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create('features', [
        'title' => __('Features', 'app-theme'),
    ])->register();
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create('footer', [
        'title' => __('Footer', 'app-theme'),
    ])->register();
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create('hero', [
        'title' => __('Hero', 'app-theme'),
    ])->register();
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create('meals', [
        'title' => __('Meals', 'app-theme'),
    ])->register();
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create('plans', [
        'title' => __('Plans', 'app-theme'),
    ])->register();
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create('steps', [
        'title' => __('Steps', 'app-theme'),
    ])->register();
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create('testimonials', [
        'title' => __('Testimonials', 'app-theme'),
    ])->register();
});
