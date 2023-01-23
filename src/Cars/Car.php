<?php


namespace App\Cars;


final class Car extends BaseCar implements CarInterface
{
    public function __construct(
        protected CarType $carType,
        protected string $brand,
        private int $passengerSeatsCount,
        protected string $photoFileName,
        protected float $carrying,
    ) {}

    public function getPassengerSeatsCount(): int
    {
        return $this->passengerSeatsCount;
    }
}
