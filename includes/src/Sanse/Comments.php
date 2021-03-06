<?php

namespace App\Theme\Sanse;

use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class Comments
 *
 * @package App\Theme\Sanse
 */
class Comments implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function __bootstrap(): void
    {
        add_action( 'after_setup_theme', function () {

            // close comments
            add_filter( 'comments_open', '__return_false' );
            add_filter( 'get_comments_number', '__return_zero' );

        } );
    }
}
