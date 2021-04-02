<?php

namespace App\Theme\Loop;

final class ContentFactory
{
    public static function create(): Content
    {
        return new Content;
    }

    public static function make(): callable
    {
        $content = self::create();

        return function () use ($content) {
            $content->display();
        };
    }
}
