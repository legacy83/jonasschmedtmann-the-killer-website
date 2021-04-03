<?php

namespace App\Theme\Foundation;

use App\Theme\Acf\RegisterBlockType;

final class RegisterBlockTypeMaker
{
    private RegisterBlockTypeInterface $registerBlockType;

    public function __construct(RegisterBlockType $registerBlockType)
    {
        $this->registerBlockType = $registerBlockType;
    }

    public function __invoke()
    {
        $this->registerBlockType->register();
    }
}
