<?php

namespace App\Theme;

use function Mezu\view;

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    acf_register_block_type(array(
        'name' => 'cities',
        'title' => __('Cities', 'app-theme'),
        'description' => __('The section to display cities.'),
        'render_callback' => function () {
            print view('section/section', 'cities')->render();
        },
        'category' => 'app-theme-blocks',
    ));
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    acf_register_block_type(array(
        'name' => 'contact',
        'title' => __('Contact', 'app-theme'),
        'description' => __('The section to display contact.'),
        'render_callback' => function () {
            print view('section/section', 'contact')->render();
        },
        'category' => 'app-theme-blocks',
    ));
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    acf_register_block_type(array(
        'name' => 'features',
        'title' => __('Features', 'app-theme'),
        'description' => __('The section to display your features.'),
        'render_callback' => function () {
            print view('section/section', 'features')->render();
        },
        'category' => 'app-theme-blocks',
    ));
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    acf_register_block_type(array(
        'name' => 'meals',
        'title' => __('Meals', 'app-theme'),
        'description' => __('The section to display available meals.'),
        'render_callback' => function () {
            print view('section/section', 'meals')->render();
        },
        'category' => 'app-theme-blocks',
    ));
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    acf_register_block_type(array(
        'name' => 'plans',
        'title' => __('Plans', 'app-theme'),
        'description' => __('The section to display available plans.'),
        'render_callback' => function () {
            print view('section/section', 'plans')->render();
        },
        'category' => 'app-theme-blocks',
    ));
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    acf_register_block_type(array(
        'name' => 'steps',
        'title' => __('Steps', 'app-theme'),
        'description' => __('The section to display steps.'),
        'render_callback' => function () {
            print view('section/section', 'steps')->render();
        },
        'category' => 'app-theme-blocks',
    ));
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('acf/init', function () {
    acf_register_block_type(array(
        'name' => 'testimonials',
        'title' => __('Testimonials', 'app-theme'),
        'description' => __('The section to display testimonials.'),
        'render_callback' => function () {
            print view('section/section', 'testimonials')->render();
        },
        'category' => 'app-theme-blocks',
    ));
});
