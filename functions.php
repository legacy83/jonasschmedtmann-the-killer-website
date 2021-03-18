<?php

define('APP_THEME', true);
define('APP_THEME_FILE', __FILE__);

use App\Theme\Gutenberg;
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
    $theme->register(new Gutenberg);
    $theme->register(new Styles);
});
