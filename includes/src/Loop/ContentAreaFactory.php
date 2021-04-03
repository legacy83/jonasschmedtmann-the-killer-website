<?php

namespace App\Theme\Loop;

use App\Theme\Foundation\ContentAreaMaker;

final class ContentAreaFactory
{
    public static function make(): callable
    {
        return new ContentAreaMaker(
            new ContentArea
        );
    }
}
