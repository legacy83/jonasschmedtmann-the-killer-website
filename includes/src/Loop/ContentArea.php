<?php

namespace App\Theme\Loop;

use App\Theme\Foundation\ContentAreaInterface;

use function Mezu\view;

final class ContentArea implements ContentAreaInterface
{
    public function display(): void
    {
        print view('loop/content/content')->render();
    }
}
