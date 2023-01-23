<?php

namespace Tests;

use App\Cars\CarInterface;
use App\CsvParser;
use App\Cars\SpecMachineInterface;
use App\Cars\TruckInterface;
use App\Factories\CarFactory;
use App\Factories\TruckFactory;
use App\Factories\SpecMachineFactory;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{

    public function testGetCarList()
    {
        $factories = [
            new SpecMachineFactory(),
            new TruckFactory(),
            new CarFactory(),
        ];
        $parser = new CsvParser($factories);
        $carList = $parser->getCarList("tests/_data/data.csv");
        self::assertCount(5, $carList);

        [$carCount, $truckCount, $specialCount] = [0, 0, 0];
        foreach ($carList as $car) {
            if ($car instanceof CarInterface) {
                $carCount++;
            } elseif ($car instanceof TruckInterface) {
                $truckCount++;
            } elseif ($car instanceof SpecMachineInterface) {
                $specialCount++;
            }
        }
        self::assertEquals(2, $carCount);
        self::assertEquals(2, $truckCount);
        self::assertEquals(1, $specialCount);
    }
}
