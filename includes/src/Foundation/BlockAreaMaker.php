<?php

namespace App\Theme\Foundation;

final class BlockAreaMaker
{
    private BlockAreaInterface $blockArea;

    public function __construct(BlockAreaInterface $blockArea)
    {
        $this->blockArea = $blockArea;
    }

    public function __invoke()
    {
        $this->blockArea->display();
    }
}
