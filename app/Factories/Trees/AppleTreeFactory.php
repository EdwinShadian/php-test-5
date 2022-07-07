<?php

namespace App\Factories\Trees;

use App\Factories\AbstractFactory;
use App\Models\Trees\AppleTree;

class AppleTreeFactory implements AbstractFactory
{
    /**
     * @return AppleTree
     */
    public static function createOne()
    {
        $apples = rand(40, 50);

        return new AppleTree($apples);
    }

    /**
     * @param int $count
     * @return array
     */
    public static function create($count)
    {
        $appleTrees = [];

        for ($i = 0; $i < $count; $i++) {
            $appleTrees[] = AppleTreeFactory::createOne();
        }

        return $appleTrees;
    }
}