<?php

namespace App\Theme\Sanse;

use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class Templates
 *
 * @package App\Theme\Sanse
 */
class Templates implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function __bootstrap(): void
    {
        add_action( 'after_setup_theme', function () {

            add_filter( 'theme_page_templates', [ $this, 'pageTemplates' ] );

        } );
    }

    public function pageTemplates( array $templates ): array
    {
        unset( $templates[ 'templates/front-page.php' ] );

        return $templates;
    }
}
