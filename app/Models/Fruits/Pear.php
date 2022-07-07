<?php

namespace App\Models\Fruits;

use App\Models\Interfaces\FruitInterface;

class Pear implements FruitInterface
{
    public const PEAR_MIN_WEIGHT = 130;
    public const PEAR_MAX_WEIGHT = 170;

    private int $weight;

    /**
     * @param int $weight
     */
    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function weight()
    {
        return $this->weight;
    }
}