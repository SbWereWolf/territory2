<?php

namespace App\Farm;

class ProductionVolume
{
    private array $volume = [];

    public function appendVolume(Product $product): void
    {
        $this->volume[$product->type] =
            $product->quantity + ($this->volume[$product->type] ?? 0);
    }

    public  function outputAmount(): \Generator
    {
        foreach ($this->volume as $type =>  $quantity) {
            yield $type =>  $quantity;
        }
    }

    public  function dropAll(): array
    {
        return $this->volume = [];
    }
}
