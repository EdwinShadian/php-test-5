<?php

namespace App\Models;

class Harvester
{
    private array $apples;
    private array $pears;

    public function __construct()
    {
        $this->apples['count'] = 0;
        $this->apples['weight'] = 0;
        $this->pears['count'] = 0;
        $this->pears['weight'] = 0;
    }

    /**
     * @param Garden $garden
     * @return void
     */
    public function harvestFruits($garden)
    {
        for ($i = 0; $i < $garden->appleTreesCount(); $i++) {
            $this->harvestApples($garden->appleTree($i)->fruits(), $garden->appleTree($i)->fruitsCount());
        }
        for ($i = 0; $i < $garden->pearTreesCount(); $i++) {
            $this->harvestPears($garden->pearTree($i)->fruits(), $garden->pearTree($i)->fruitsCount());
        }
    }

    /**
     * @return false|string
     */
    public function toJson()
    {
        $json = [];

        $json['apples']['count'] = $this->applesCount();
        $json['apples']['weight'] = $this->applesWeight();
        $json['pears']['count'] = $this->pearsCount();
        $json['pears']['weight'] = $this->pearsWeight();
        $json['totalCount'] = $this->totalCount();
        $json['totalWeight'] = $this->totalWeight();

        return json_encode($json);
    }

    /**
     * @return int
     */
    private function applesCount()
    {
        return $this->apples['count'];
    }

    /**
     * @return int
     */
    private function pearsCount()
    {
        return $this->pears['count'];
    }

    /**
     * @return int
     */
    private function applesWeight()
    {
        return $this->apples['weight'];
    }

    /**
     * @return int
     */
    private function pearsWeight()
    {
        return $this->pears['weight'];
    }

    /**
     * @return int
     */
    private function totalWeight()
    {
        return $this->applesWeight() + $this->pearsWeight();
    }

    /**
     * @return int
     */
    private function totalCount()
    {
        return $this->applesCount() + $this->pearsCount();
    }

    /**
     * @param array $apples
     * @param int $applesCount
     * @return void
     */
    private function harvestApples($apples, $applesCount)
    {
        for ($i = 0; $i < $applesCount ; $i++) {
            $this->apples['count'] += 1;
            $this->apples['weight'] += $apples[$i]->weight();
        }
    }

    /**
     * @param array $pears
     * @param int $pearsCount
     * @return void
     */
    private function harvestPears($pears, $pearsCount)
    {
        for ($i = 0; $i < $pearsCount ; $i++) {
            $this->pears['count'] += 1;
            $this->pears['weight'] += $pears[$i]->weight();
        }
    }
}