<?php

namespace App\Farm;

use Generator;

class Cowshed
{
    /** @var AnimalInterface[] $livestock */
    private array $livestock = [];
    private ProductionVolume $productionStorage;
    /** @var array<string,int>  */
    private array $animalBalance = [];
    private Sequence $sequence;

    public function __construct()
    {
        $this->productionStorage = new ProductionVolume();
        $this->sequence = new Sequence();
    }

    public function assume(AnimalInterface $animal): void
    {
        $animalUniqueNumber = $this->sequence->getUniqueValue();
        $this->livestock[$animalUniqueNumber] = $animal;
        $this->animalBalance[$animal::TYPE] =
            1 + ($this->animalBalance[$animal::TYPE] ?? 0);
    }

    public function gather(): void
    {
        foreach ($this->livestock as $animal) {
            $product = $animal->produce();
            $this->productionStorage->appendVolume($product);
        }
    }

    public function releaseProduction(): Generator
    {
        foreach (
            $this->productionStorage->outputAmount()
            as $type => $amount
        ) {
            $product = new Product($type, $amount);

            yield $product;
        }

        $this->productionStorage->dropAll();
    }

    public function reportLivestock(): Generator
    {
        foreach ($this->animalBalance as $type => $quantity) {
            yield $type => $quantity;
        }
    }
}
