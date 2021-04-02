<?php

namespace App\Theme\Acf;

final class RegisterBlockTypeFactory
{
    public static function create(string $name, array $block): RegisterBlockType
    {
        return new RegisterBlockType($name, $block);
    }

    public static function make(string $name, array $block): callable
    {
        $registerBlockType = self::create($name, $block);

        return function () use ($registerBlockType) {
            $registerBlockType->register();
        };
    }
}
