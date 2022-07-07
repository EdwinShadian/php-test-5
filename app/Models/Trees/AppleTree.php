<?php

namespace App\Models\Trees;

use App\Factories\Fruits\AppleFactory;
use App\Models\Interfaces\TreeInterface;

class AppleTree implements TreeInterface
{
    public const MIN_APPLES_COUNT = 40;
    public const MAX_APPLES_COUNT = 50;

    private array $apples;
    private int $applesCount;

    /**
     * @param int $apples
     */
    public function __construct($apples)
    {
        $this->apples = AppleFactory::create($apples);
        $this->applesCount = $apples;
    }

    /**
     * @return array
     */
    public function fruits()
    {
        return $this->apples;
    }

    /**
     * @return int
     */
    public function fruitsCount()
    {
        return $this->applesCount;
    }
}