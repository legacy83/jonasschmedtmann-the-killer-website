<?php

namespace App\Theme\Acf;

use App\Theme\Foundation\RegisterBlockTypeMaker;

final class RegisterBlockTypeFactory
{
    public static function make(string $name, array $block): callable
    {
        return new RegisterBlockTypeMaker(
            new RegisterBlockType($name, $block)
        );
    }
}
