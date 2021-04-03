<?php

namespace App\Theme\Foundation;

final class ContentAreaMaker
{
    private ContentAreaInterface $contentArea;

    public function __construct(ContentAreaInterface $contentArea)
    {
        $this->contentArea = $contentArea;
    }

    public function __invoke()
    {
        $this->contentArea->display();
    }
}
