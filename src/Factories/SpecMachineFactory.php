<?php


namespace App\Factories;


use App\Cars\BaseCarInterface;
use App\Cars\SpecMachine;
use App\Cars\CarType;

final class SpecMachineFactory extends AbstractFactory
{
    public function checkType(string $carType): bool
    {
        return $carType == "spec_machine";
    }

    public function createCarFromArray(array $data): BaseCarInterface
    {
        [
            $carType,
            $brand,
            $passengerSeatsCount,
            $photoFileName,
            $bodyWidth,
            $bodyHeight,
            $bodyLength,
            $carrying,
            $extra
        ] = $this->prepareData($data);

        return new SpecMachine(
            CarType::specMachine,
            $brand,
            $photoFileName,
            $carrying,
            $extra,
        );
    }

}
