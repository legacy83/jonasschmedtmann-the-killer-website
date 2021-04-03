<?php

namespace App\Theme\Reusable;

use App\Theme\Foundation\BlockAreaInterface;

final class BlockArea implements BlockAreaInterface
{
    private string $location;

    public function __construct(string $location)
    {
        $this->location = sanitize_key($location);
    }

    public function display(): void
    {
        $query = new \WP_Query([
            'post_type' => 'wp_block',
            'posts_per_page' => 1,
            'name' => "block-area-{$this->location}",
        ]);

        if ($query->have_posts()) {
            $query->the_post();
            the_content();
        }

        wp_reset_postdata();
    }
}
