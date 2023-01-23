<?php


namespace App\Factories;

use App\Cars\BaseCarInterface;

interface BaseCarFactory
{
    public function checkType(string $carType): bool;
    public function createCarFromArray(array $data): BaseCarInterface;
}
