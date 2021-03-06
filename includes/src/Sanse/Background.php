<?php

namespace App\Theme\Sanse;

use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class Background
 *
 * @package App\Theme\Sanse
 */
class Background implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function __bootstrap(): void
    {
        add_action( 'after_setup_theme', function () {

            // remove custom background
            remove_theme_support( 'custom-background' );

        }, 20 );
    }
}
