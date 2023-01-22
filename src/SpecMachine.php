<?php


namespace App;


final class SpecMachine extends BaseCar implements SpecMachineInterface
{
    public function __construct(
        protected CarType $carType,
        protected string $photoFileName,
        protected string $brand,
        protected float $carrying,
        private string $extra
    ) {}

    public function getExtra(): string
    {
        return $this->extra;
    }
}
