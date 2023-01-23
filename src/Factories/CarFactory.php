<?php


namespace App\Factories;


use App\Cars\BaseCarInterface;
use App\Cars\Car;
use App\Cars\CarType;

final class CarFactory extends AbstractFactory
{
    public function checkType(string $carType): bool
    {
        return $carType == "car";
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

        return new Car(
            CarType::car,
            $brand,
            $passengerSeatsCount,
            $photoFileName,
            $carrying
        );
    }

}
