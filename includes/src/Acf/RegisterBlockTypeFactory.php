<?php

namespace App\Theme\Acf;

final class RegisterBlockTypeFactory
{
    public static function create(string $name, array $block)
    {
        return new RegisterBlockType($name, $block);
    }
}
