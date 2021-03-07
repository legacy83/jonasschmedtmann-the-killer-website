<?php

namespace App\Theme\Sanse;

use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class Sidebars
 *
 * @package App\Theme\Sanse
 */
class Sidebars implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function __bootstrap(): void
    {
        add_action( 'after_setup_theme', function () {

            // unregister sidebars
            add_action( 'widgets_init', [ $this, 'unregisterSidebars' ] );

        } );
    }

    public function unregisterSidebars()
    {
        unregister_sidebar( 'footer-1' );
        unregister_sidebar( 'footer-2' );
        unregister_sidebar( 'footer-3' );
        unregister_sidebar( 'front-page' );
    }
}
