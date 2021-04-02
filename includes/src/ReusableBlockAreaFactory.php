<?php

namespace App\Theme;

final class ReusableBlockAreaFactory
{
    public static function create(string $location): ReusableBlockArea
    {
        return new ReusableBlockArea($location);
    }
}
