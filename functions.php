<?php

define( 'APP_THEME', true );
define( 'APP_THEME_FILE', __FILE__ );

# ------------------------------------------------------------------------------
# Lorem ipsum dolor sit amet
# ------------------------------------------------------------------------------
#
# Suspendisse sodales ipsum non justo imperdiet, ut lacinia erat
# cursus. Vestibulum dictum nisi ligula, in dictum justo pulvinar quis.
#

add_action( 'mezu/bootstrap', function ( \Dalen\theme $theme ) {

    $theme->register( new \App\Theme\Assets\Scripts() );
    $theme->register( new \App\Theme\Assets\Styles() );
    $theme->register( new \App\Theme\Sanse\Background() );
    $theme->register( new \App\Theme\Sanse\Comments() );
    $theme->register( new \App\Theme\Sanse\Header() );
    $theme->register( new \App\Theme\Sanse\Menus() );
    $theme->register( new \App\Theme\Sanse\Sidebars() );
    $theme->register( new \App\Theme\Sanse\Templates() );

} );
