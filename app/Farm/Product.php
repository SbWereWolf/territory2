<?php

namespace App\Farm;

class Product
{
    public function __construct(
        public readonly string $type,
        public readonly int $quantity
    ) {
    }
}
