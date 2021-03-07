<?php

namespace App\Theme\Sanse;

use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class Menus
 *
 * @package App\Theme\Sanse
 */
class Menus implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function __bootstrap(): void
    {
        add_action( 'after_setup_theme', function () {

            // unregister primary menu
            unregister_nav_menu( 'primary' );

            // unregister social menu
            unregister_nav_menu( 'social' );

            // reduces menu depth
            add_filter( 'wp_nav_menu_args', [ $this, 'reducesDepth' ] );

        } );
    }

    public function reducesDepth( $args ): array
    {
        if ( 'primary' === $args[ 'theme_location' ] ) {
            $args[ 'depth' ] = 1;
        }

        return $args;
    }
}
