<?php

namespace App\Theme\Foundation;

final class BlockRenderMaker
{
    private BlockRenderInterface $blockRender;

    public function __construct(BlockRenderInterface $blockRender)
    {
        $this->blockRender = $blockRender;
    }

    public function __invoke(array $block, string $content = '', bool $isPreview = false, int $postId = 0)
    {
        $this->blockRender->display($block, $content, $isPreview, $postId);
    }
}
