<?php

namespace App\Theme\Reusable;

final class BlockAreaFactory
{
    public static function create(string $location): BlockArea
    {
        return new BlockArea($location);
    }
}
