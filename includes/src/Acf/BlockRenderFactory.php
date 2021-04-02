<?php

namespace App\Theme\Acf;

final class BlockRenderFactory
{
    public static function create(string $name): BlockRender
    {
        $blockRenderPreview = new BlockRender('block/block', 'preview');
        $blockRender = new BlockRender('block/block', $name, $blockRenderPreview);

        return $blockRender;
    }

    public static function make(string $name): callable
    {
        $blockRender = self::create($name);

        return function (array $block, string $content = '', bool $isPreview = false, int $postId = 0) use ($blockRender) {
            $blockRender->display($block, $content, $isPreview, $postId);
        };
    }
}
