<?php

require __DIR__.'/vendor/autoload.php';

use App\Factories\CarFactory;
use App\Factories\TruckFactory;
use App\Factories\SpecMachineFactory;
use App\CsvParser;

$factories = [
    new SpecMachineFactory(),
    new TruckFactory(),
    new CarFactory(),
];
$parser = new CsvParser($factories);

$list = $parser->getCarList("tests/_data/data.csv");

print_r($list);
