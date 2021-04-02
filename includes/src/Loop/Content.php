<?php

namespace App\Theme\Loop;

final class Content
{
    public function __invoke(): void
    {
        if (!have_posts()) {
            return;
        }

        the_post();
        the_content();
    }
}
