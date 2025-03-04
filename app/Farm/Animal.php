<?php

namespace App\Farm;

use Random\RandomException;

abstract class Animal implements AnimalInterface
{
    public const TYPE = 'animal name';
    protected const PRODUCTION_TYPE = 'product name';
    protected const PRODUCTION_MINIMAL_QUANTITY = PHP_INT_MIN;
    protected const PRODUCTION_MAXIMAL_QUANTITY = PHP_INT_MAX;

    /**
     * @throws RandomException
     */
    public function produce(): Product
    {
        $quantity = random_int(
            static::PRODUCTION_MINIMAL_QUANTITY,
            static::PRODUCTION_MAXIMAL_QUANTITY
        );
        /** @noinspection PhpUnnecessaryLocalVariableInspection */
        $product = new Product(static::PRODUCTION_TYPE, $quantity);

        return $product;
    }
}
