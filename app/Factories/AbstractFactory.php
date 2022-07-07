<?php

namespace App\Factories;

interface AbstractFactory
{
    public static function createOne();

    public static function create(int $count);
}