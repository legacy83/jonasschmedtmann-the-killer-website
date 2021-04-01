<?php

namespace App\Theme\Acf;

use function Mezu\view;

final class BlockRender
{
    const PREVIEW_STYLE = [
        'background: #eee',
        'padding: 10px 20px',
    ];

    private string $slug;
    private string $name;

    public function __construct(string $slug, string $name)
    {
        $this->slug = $slug;
        $this->name = $name;
    }

    public function __invoke(array $block, string $content = '', bool $isPreview = false, int $postId = 0)
    {
        if ($isPreview) {
            print view('block/block', 'preview')->render([
                'preview_style' => self::PREVIEW_STYLE,
                'block' => $block,
            ]);

            return;
        }

        print view($this->slug, $this->name)->render([
            'block' => $block,
            'content' => $content,
            'is_preview' => $isPreview,
            'post_id' => $postId,
        ]);
    }
}
