<?php

namespace App\Theme\Acf;

use App\Theme\Foundation\BlockRenderMaker;

final class BlockRenderFactory
{
    public static function make(string $name): callable
    {
        $blockRenderPreview = new BlockRender('block/block', 'preview');
        $blockRenderPreview = apply_filters('app/theme/blockRender/preview', $blockRenderPreview, $name);

        return new BlockRenderMaker(
            new BlockRender('block/block', $name, $blockRenderPreview)
        );
    }
}
