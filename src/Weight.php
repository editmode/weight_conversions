<?php

namespace Editmode\WeightConversions;

class Weight
{
    public function __construct(protected float $kilograms)
    {
    }

    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
}
