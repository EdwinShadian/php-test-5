<?php

namespace App\Models;

use App\Factories\Trees\AppleTreeFactory;
use App\Factories\Trees\PearTreeFactory;
use App\Models\Trees\AppleTree;
use App\Models\Trees\PearTree;

class Garden
{
    private array $appleTrees;
    private array $pearTrees;
    private int $appleTreesCount;
    private int $pearTreesCount;

    /**
     * @param int $appleTrees
     * @param int $pearTrees
     */
    public function __construct($appleTrees, $pearTrees)
    {
        $this->appleTrees = AppleTreeFactory::create($appleTrees);
        $this->pearTrees = PearTreeFactory::create($pearTrees);
        $this->appleTreesCount = $appleTrees;
        $this->pearTreesCount = $pearTrees;
    }

    /**
     * @param int $appleTreeNumber
     * @return AppleTree
     */
    public function appleTree($appleTreeNumber)
    {
        return $this->appleTrees[$appleTreeNumber];
    }

    /**
     * @param int $pearTreeNumber
     * @return PearTree
     */
    public function pearTree($pearTreeNumber)
    {
        return $this->pearTrees[$pearTreeNumber];
    }

    /**
     * @return int
     */
    public function appleTreesCount()
    {
        return $this->appleTreesCount;
    }

    /**
     * @return int
     */
    public function pearTreesCount()
    {
        return $this->pearTreesCount;
    }
}