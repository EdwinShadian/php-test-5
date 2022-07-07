<?php

namespace App\Factories\Fruits;

use App\Factories\AbstractFactory;
use App\Models\Fruits\Apple;

class AppleFactory implements AbstractFactory
{
    /**
     * @return Apple
     */
    public static function createOne()
    {
        $weight = rand(Apple::APPLE_MIN_WEIGHT, Apple::APPLE_MAX_WEIGHT);

        return new Apple($weight);
    }

    /**
     * @param int $count
     * @return array
     */
    public static function create($count)
    {
        $apples = [];

        for ($i = 0; $i < $count; $i++) {
            $apples[] = AppleFactory::createOne();
        }

        return $apples;
    }
}