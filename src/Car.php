<?php


namespace App;


final class Car extends BaseCar implements CarInterface
{
    public function __construct(
        protected CarType $carType,
        protected string $photoFileName,
        protected string $brand,
        protected float $carrying,
        private int $passengerSeatsCount
    ) {}

    public function getPassengerSeatsCount(): int
    {
        return $this->passengerSeatsCount;
    }
}
