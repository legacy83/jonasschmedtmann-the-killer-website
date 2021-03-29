<?php

namespace App\Theme\Acf;

use function Mezu\view;

final class BlockRender
{
    private string $slug;
    private string $name;

    public function __construct(string $slug, string $name)
    {
        $this->slug = $slug;
        $this->name = $name;
    }

    public function __invoke(array $block)
    {
        print view($this->slug, $this->name)->render([
            'block' => $block,
        ]);
    }
}
