<?php

namespace App\Farm;

class Cow extends Animal
{
    public const TYPE = 'cow';
    protected const PRODUCTION_TYPE = 'milk';
    protected const PRODUCTION_MINIMAL_QUANTITY = 8;
    protected const PRODUCTION_MAXIMAL_QUANTITY = 12;
}
