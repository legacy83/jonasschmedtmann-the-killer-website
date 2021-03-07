<?php

namespace App\Theme\Assets;

use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class Scripts
 *
 * @package App\Theme\Assets
 */
class Scripts implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function __bootstrap(): void
    {
        add_action( 'after_setup_theme', function () {

            // dequeue parent scripts
            add_action( 'wp_enqueue_scripts', [ $this, 'dequeueScripts' ], 15 );

            // enqueue theme scripts
            add_action( 'wp_enqueue_scripts', [ $this, 'enqueueScripts' ] );

        } );
    }

    public function dequeueScripts(): void
    {
        wp_dequeue_script( 'sanse-navigation' );
    }


    public function enqueueScripts(): void
    {
        wp_enqueue_script( 'app-theme', get_theme_file_uri( 'resources/assets/js/app.js' ), [], false, true );
    }
}
