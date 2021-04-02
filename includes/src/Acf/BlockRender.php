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

    public function display(array $block, string $content = '', bool $isPreview = false, int $postId = 0)
    {
        $context = [
            'block' => $block,
            'content' => $content,
            'is_preview' => $isPreview,
            'post_id' => $postId,
        ];

        if ($isPreview) {
            print view('block/block', 'preview')->render($context);
            return;
        }

        print view($this->slug, $this->name)->render($context);
    }
}
