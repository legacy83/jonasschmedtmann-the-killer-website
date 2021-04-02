<?php

namespace App\Theme\Acf;

final class BlockRenderFactory
{
    public static function create(string $name)
    {
        $blockRender = new BlockRender('block/block', $name);
        $withEditorPreview = new WithEditorPreview($blockRender);

        return $withEditorPreview;
    }
}
