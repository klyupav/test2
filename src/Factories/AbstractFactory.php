<?php


namespace App\Factories;


use App\Cars\BaseCarInterface;

abstract class AbstractFactory implements BaseCarFactory
{
    abstract function checkType(string $carType): bool;
    abstract function createCarFromArray(array $data): BaseCarInterface;

    protected function prepareData(array $data): array
    {
        $carType = $data[0];
        $brand = $data[1];
        $passengerSeatsCount = (int)$data[2];
        $photoFileName = $data[3];
        $bodyWHL = explode('x', $data[4]);
        if (!isset($bodyWHL[2])) {
            $bodyWidth = 0;
            $bodyHeight = 0;
            $bodyLength = 0;
        } else {
            $bodyWidth = (float)$bodyWHL[0];
            $bodyHeight = (float)$bodyWHL[1];
            $bodyLength = (float)$bodyWHL[2];
        }
        $carrying = (float)$data[5];
        $extra = $data[6];

        return [
            $carType,
            $brand,
            $passengerSeatsCount,
            $photoFileName,
            $bodyWidth,
            $bodyHeight,
            $bodyLength,
            $carrying,
            $extra
        ];
    }
}
