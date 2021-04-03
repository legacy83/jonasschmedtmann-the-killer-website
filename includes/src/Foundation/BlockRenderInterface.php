<?php

namespace App\Theme\Foundation;

interface BlockRenderInterface
{
    public function display(array $block, string $content = '', bool $isPreview = false, int $postId = 0): void;
}
