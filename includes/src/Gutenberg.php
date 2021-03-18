<?php

namespace App\Theme;

use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

class Gutenberg implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function __bootstrap(): void
    {
        add_action('after_setup_theme', function () {

            // set a custom color palette
            add_theme_support('editor-color-palette', [
                [
                    'name'  => 'Primary',
                    'slug'  => 'primary',
                    'color' => '#e67e22',
                ],
                [
                    'name'  => 'Primary Dark',
                    'slug'  => 'primary-dark',
                    'color' => '#cf6d17',
                ],
                [
                    'name'  => 'White',
                    'slug'  => 'white',
                    'color' => '#ffffff',
                ]
            ]);

            // add editor styles
            add_theme_support('editor-styles');
            add_editor_style('editor-styles-home.css');

            // disable custom colors
            add_theme_support('disable-custom-colors');

            // align wide/full support
            add_theme_support('align-wide');

            // enable core block styles
            add_theme_support('wp-block-styles');

            // disable custom fonts and gradients
            add_theme_support('disable-custom-font-sizes');
            add_theme_support('disable-custom-gradients');

            // disable core block patterns
            remove_theme_support('core-block-patterns');
        });
    }
}
