<?php

namespace App\Theme\Acf;

final class RegisterBlockTypeFactory
{
    public static function create()
    {
        return new RegisterBlockType();
    }
}
