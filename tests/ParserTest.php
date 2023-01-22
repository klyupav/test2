<?php

namespace Tests;

use App\CarInterface;
use App\Parser;
use App\SpecMachineInterface;
use App\TruckInterface;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{

    public function testGetCarList()
    {
        $parser = new Parser();
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
