<?php

namespace App\Theme;

use App\Theme\Acf\BlockRenderFactory;
use App\Theme\Acf\RegisterBlockTypeFactory;

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create()->register('cities', [
        'title' => __('Cities', 'app-theme'),
    ]);
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create()->register('contact', [
        'title' => __('Contact', 'app-theme'),
    ]);
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create()->register('features', [
        'title' => __('Features', 'app-theme'),
    ]);
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create()->register('meals', [
        'title' => __('Meals', 'app-theme'),
    ]);
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create()->register('plans', [
        'title' => __('Plans', 'app-theme'),
    ]);
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create()->register('steps', [
        'title' => __('Steps', 'app-theme'),
    ]);
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    RegisterBlockTypeFactory::create()->register('testimonials', [
        'title' => __('Testimonials', 'app-theme'),
    ]);
});
