<?php

use App\Models\Garden;
use App\Models\Harvester;

require_once './vendor/autoload.php';

$garden = new Garden(10, 15);

$harvester = new Harvester();
$harvester->harvestFruits($garden);

echo $harvester->toJson();
