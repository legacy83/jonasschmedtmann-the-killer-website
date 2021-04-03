<?php

namespace App\Theme\Reusable;

use App\Theme\Foundation\BlockAreaMaker;

final class BlockAreaFactory
{
    public static function make(string $location): callable
    {
        return new BlockAreaMaker(
            new BlockArea($location)
        );
    }
}
