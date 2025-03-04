<?php

namespace App\Farm;

interface AnimalInterface
{
    public const TYPE = 'animal name';
    public function produce():Product;
}
