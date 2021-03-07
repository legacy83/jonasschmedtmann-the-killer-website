<?php

namespace App\Theme\Assets;

use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class Styles
 *
 * @package App\Theme\Assets
 */
class Styles implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function __bootstrap(): void
    {
        add_action( 'after_setup_theme', function () {

            // dequeue parent styles
            add_action( 'wp_enqueue_scripts', [ $this, 'dequeueScripts' ], 15 );

            // enqueue theme styles
            add_action( 'wp_enqueue_scripts', [ $this, 'enqueueScripts' ] );

        } );
    }

    public function dequeueScripts(): void
    {
        wp_dequeue_style( 'sanse-parent-style' );
        wp_dequeue_style( 'sanse-style' );
    }

    public function enqueueScripts(): void
    {
        wp_enqueue_style( 'app-theme-screen', get_theme_file_uri( 'resources/assets/css/screen.css' ) );
    }
}
