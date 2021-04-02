<?php

namespace App\Theme\Acf;

final class RegisterBlockType
{
    private string $name;
    private array $block;

    public function __construct(string $name, array $block)
    {
        $this->name = $name;
        $this->block = $block;
    }

    public function register()
    {
        $block = wp_parse_args($this->block, [
            'name' => $this->name,
            'description' => __('Nunc elementum magna cursus libero vehicula maximus.', 'app-theme'),
            'render_callback' => BlockRenderFactory::make($this->name),
            'category' => 'app-theme-blocks',
        ]);

        acf_register_block_type($block);
    }
}
