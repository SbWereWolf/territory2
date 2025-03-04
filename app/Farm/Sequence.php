<?php

namespace App\Farm;

class Sequence
{
    public function __construct( private int $sequence=0)
    {
    }

    public function getUniqueValue(): string
    {
        $this->sequence++;

        return (string)$this->sequence;
    }
}
