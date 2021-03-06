<?php

namespace App\Theme\Sanse;

use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class Header
 *
 * @package App\Theme\Sanse
 */
class Header implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function __bootstrap(): void
    {
        add_action( 'after_setup_theme', function () {

            // remove custom logo
            remove_theme_support( 'custom-logo' );

            // remove custom header
            remove_theme_support( 'custom-header' );

        }, 20 );
    }
}
