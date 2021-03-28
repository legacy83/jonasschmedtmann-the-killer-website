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
