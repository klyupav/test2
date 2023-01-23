<?php


namespace App\Factories;


use App\Cars\BaseCarInterface;
use App\Cars\CarType;
use App\Cars\Truck;

final class TruckFactory extends AbstractFactory
{
    public function checkType(string $carType): bool
    {
        return $carType == "truck";
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

        return new Truck(
            CarType::truck,
            $brand,
            $photoFileName,
            $bodyWidth,
            $bodyHeight,
            $bodyLength,
            $carrying
        );
    }

}
