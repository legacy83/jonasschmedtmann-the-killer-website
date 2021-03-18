<?php

define('APP_THEME', true);
define('APP_THEME_FILE', __FILE__);

use App\Theme\Styles;
use Dalen\Theme;

# ------------------------------------------------------------------------------
# Lorem ipsum dolor sit amet
# ------------------------------------------------------------------------------
#
# Suspendisse sodales ipsum non justo imperdiet, ut lacinia erat
# cursus. Vestibulum dictum nisi ligula, in dictum justo pulvinar quis.
#

add_action('mezu/bootstrap', function (Theme $theme) {
    $theme->register(new Styles);
});

# ------------------------------------------------------------------------------
# Lorem ipsum dolor sit amet
# ------------------------------------------------------------------------------
#
# Suspendisse sodales ipsum non justo imperdiet, ut lacinia erat
# cursus. Vestibulum dictum nisi ligula, in dictum justo pulvinar quis.
#

add_action('after_setup_theme', function () {
    add_theme_support('editor-styles');
    add_editor_style('editor-styles-home.css');

    add_theme_support('disable-custom-colors');
    add_theme_support('editor-color-palette', [
        [
            'name'  => 'Primary',
            'slug'  => 'primary',
            'color' => '#e67e22',
        ],
        [
            'name'  => 'Primary Dark',
            'slug'  => 'primary-dark',
            'color' => '#cf6d17',
        ],
        [
            'name'  => 'White',
            'slug'  => 'white',
            'color' => '#ffffff',
        ]
    ]);

    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    add_theme_support('disable-custom-font-sizes');
    add_theme_support('disable-custom-gradients');
    remove_theme_support('core-block-patterns');
});
