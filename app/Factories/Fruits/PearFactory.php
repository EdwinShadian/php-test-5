<?php

namespace App\Factories\Fruits;

use App\Factories\AbstractFactory;
use App\Models\Fruits\Pear;

class PearFactory implements AbstractFactory
{
    /**
     * @return Pear
     */
    public static function createOne()
    {
        $weight = rand(130, 170);

        return new Pear($weight);
    }

    /**
     * @param $count
     * @return array
     */
    public static function create($count)
    {
        $pears = [];

        for ($i = 0; $i < $count; $i++) {
            $pears[] = PearFactory::createOne();
        }

        return $pears;
    }
}