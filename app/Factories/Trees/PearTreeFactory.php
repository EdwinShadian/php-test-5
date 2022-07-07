<?php

namespace App\Factories\Trees;

use App\Factories\AbstractFactory;
use App\Models\Trees\PearTree;

class PearTreeFactory implements AbstractFactory
{
    /**
     * @return PearTree
     */
    public static function createOne()
    {
        $pears = rand(PearTree::MIN_PEARS_COUNT, PearTree::MAX_PEARS_COUNT);

        return new PearTree($pears);
    }

    /**
     * @param $count
     * @return array
     */
    public static function create($count)
    {
        $pearTrees = [];

        for ($i = 0; $i < $count; $i++) {
            $pearTrees[] = PearTreeFactory::createOne();
        }

        return $pearTrees;
    }
}