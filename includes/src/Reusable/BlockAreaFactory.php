<?php

namespace App\Theme\Reusable;

final class BlockAreaFactory
{
    public static function create(string $location): BlockArea
    {
        return new BlockArea($location);
    }

    public static function make(string $location): callable
    {
        $blockArea = self::create($location);

        return function () use ($blockArea) {
            $blockArea->display();
        };
    }
}
