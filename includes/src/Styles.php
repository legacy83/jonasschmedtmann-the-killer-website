<?php

namespace App\Theme;

use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

class Styles implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function __bootstrap(): void
    {
        add_action('after_setup_theme', function () {

            // dequeue parent styles
            add_action('wp_enqueue_scripts', [$this, 'dequeueScripts'], 15);
        });
    }

    public function dequeueScripts(): void
    {
        wp_dequeue_style('sanse-parent-style');
        wp_dequeue_style('sanse-style');
    }
}
