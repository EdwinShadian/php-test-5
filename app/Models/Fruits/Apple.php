<?php

namespace App\Models\Fruits;

use App\Models\Interfaces\FruitInterface;

class Apple implements FruitInterface
{
    public const APPLE_MIN_WEIGHT = 150;
    public const APPLE_MAX_WEIGHT = 180;

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