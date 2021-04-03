<?php

namespace App\Theme\Loop;

use App\Theme\Foundation\ContentAreaInterface;

final class ContentArea implements ContentAreaInterface
{
    public function display(): void
    {
        if (!have_posts()) {
            return;
        }

        the_post();
        the_content();
    }
}
