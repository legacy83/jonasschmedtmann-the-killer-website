<?php

namespace App\Theme;

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('sanse-parent-style');
    wp_dequeue_style('sanse-style');
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('wp_enqueue_scripts', function () {
    if (is_page_template('template-front.php')) {
        wp_enqueue_style('app/theme/template-front', get_theme_file_uri('template-front.css'));
    }
});
