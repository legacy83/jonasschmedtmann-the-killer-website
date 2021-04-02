<?php

namespace App\Theme\Acf;

use function Mezu\view;

final class WithEditorPreview
{
    private BlockRender $blockRender;

    public function __construct(BlockRender $blockRender)
    {
        $this->blockRender = $blockRender;
    }

    public function __invoke(array $block, string $content = '', bool $isPreview = false, int $postId = 0)
    {
        if ($isPreview) {
            print view('block/block', 'preview')->render([
                'block' => $block,
                'content' => $content,
                'is_preview' => $isPreview,
                'post_id' => $postId,
            ]);

            return;
        }

        call_user_func($this->blockRender, $block, $content, $isPreview, $postId);
    }
}
