<?php

namespace App\Models\Trees;

use App\Factories\Fruits\PearFactory;
use App\Models\Interfaces\TreeInterface;

class PearTree implements TreeInterface
{
    private array $pears;
    private int $pearsCount;

    /**
     * @param $pears
     */
    public function __construct($pears)
    {
        $this->pears = PearFactory::create($pears);
        $this->pearsCount = $pears;
    }

    /**
     * @return array
     */
    public function fruits()
    {
        return $this->pears;
    }

    /**
     * @return int
     */
    public function fruitsCount()
    {
        return $this->pearsCount;
    }
}