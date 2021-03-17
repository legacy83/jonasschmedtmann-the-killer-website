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
    add_editor_style('template-home.css');

    add_theme_support('align-wide');

    add_theme_support('disable-custom-colors');

    add_theme_support('editor-color-palette', [
        [
            'name'  => 'Orange #1',
            'slug'  => 'orange-1',
            'color' => '#e67e22',
        ],
        [
            'name'  => 'Orange #2',
            'slug'  => 'orange-2',
            'color' => '#cf6d17',
        ]
    ]);
});
