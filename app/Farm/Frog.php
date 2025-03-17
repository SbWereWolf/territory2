<?php

namespace App\Farm;

use Random\RandomException;

class Frog extends Animal
{
    public const TYPE = 'frog';
    protected const PRODUCTION_TYPE = 'leg';
    protected const PRODUCTION_MINIMAL_QUANTITY = 0.05;
    protected const PRODUCTION_MAXIMAL_QUANTITY = 0.10;

    private const RATIO = 100;


    /**
     * @throws RandomException
     */
    public function produce(): Product
    {
        $quantity = random_int(
            static::PRODUCTION_MINIMAL_QUANTITY*self::RATIO,
            static::PRODUCTION_MAXIMAL_QUANTITY*self::RATIO
        )/self::RATIO;
        /** @noinspection PhpUnnecessaryLocalVariableInspection */
        $product = new Product(static::PRODUCTION_TYPE, $quantity);

        return $product;
    }
}
