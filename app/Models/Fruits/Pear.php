<?php

namespace App\Models\Fruits;

use App\Models\Interfaces\FruitInterface;

class Pear implements FruitInterface
{
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