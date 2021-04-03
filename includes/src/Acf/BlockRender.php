<?php

namespace App\Theme\Acf;

use App\Theme\Foundation\BlockRenderInterface;

use function Mezu\view;

final class BlockRender implements BlockRenderInterface
{
    private string $slug;
    private string $name;

    private ?BlockRender $previewBlockRender;

    public function __construct(string $slug, string $name, ?BlockRender $previewBlockRender = null)
    {
        $this->slug = $slug;
        $this->name = $name;
        $this->previewBlockRender = $previewBlockRender;
    }

    public function display(array $block, string $content = '', bool $isPreview = false, int $postId = 0): void
    {
        if ($isPreview && $this->previewBlockRender) {
            $this->previewBlockRender->display($block, $content, $isPreview, $postId);
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
