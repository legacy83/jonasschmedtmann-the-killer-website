<?php

namespace App\Theme;

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('after_setup_theme', function () {
    remove_theme_support('core-block-patterns');
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_filter('block_categories', function (array $categories) {
    return array_merge($categories, [
        [
            'slug'  => 'app-theme-blocks',
            'title' => esc_html__('App Theme', 'app-theme'),
        ]
    ]);
}, 10, 2);
