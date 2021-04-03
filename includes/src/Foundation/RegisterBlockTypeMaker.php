<?php

namespace App\Theme\Foundation;

final class RegisterBlockTypeMaker
{
    private RegisterBlockTypeInterface $registerBlockType;

    public function __construct(RegisterBlockTypeInterface $registerBlockType)
    {
        $this->registerBlockType = $registerBlockType;
    }

    public function __invoke()
    {
        $this->registerBlockType->register();
    }
}
