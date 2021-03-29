<?php

namespace App\Theme\Acf;

final class RegisterBlockType
{
    public function register(string $name, array $block)
    {
        $block = wp_parse_args($block, [
            'name' => $name,
            'description' => __('Nunc elementum magna cursus libero vehicula maximus.', 'app-theme'),
            'render_callback' => BlockRenderFactory::create($name),
            'category' => 'app-theme-blocks',
        ]);

        acf_register_block_type($block);
    }
}
