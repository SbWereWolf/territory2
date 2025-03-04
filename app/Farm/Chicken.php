<?php

namespace App\Farm;

use Random\RandomException;

class Chicken extends Animal
{
    public const TYPE = 'chicken';
    protected const PRODUCTION_TYPE = 'egg';
    protected const PRODUCTION_MINIMAL_QUANTITY = 0;
    protected const PRODUCTION_MAXIMAL_QUANTITY = 1;
}
