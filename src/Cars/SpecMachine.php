<?php


namespace App\Cars;


final class SpecMachine extends BaseCar implements SpecMachineInterface
{
    public function __construct(
        protected CarType $carType,
        protected string $brand,
        protected string $photoFileName,
        protected float $carrying,
        private string $extra
    ) {}

    public function getExtra(): string
    {
        return $this->extra;
    }
}
