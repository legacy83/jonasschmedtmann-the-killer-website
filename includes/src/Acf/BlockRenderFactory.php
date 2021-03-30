<?php

namespace App\Theme\Acf;

final class BlockRenderFactory
{
    public static function create(string $name)
    {
        return new BlockRender('block/block', $name);
    }
}
