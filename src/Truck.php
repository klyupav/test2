<?php


namespace App;


final class Truck extends BaseCar implements TruckInterface
{
    public function __construct(
        protected CarType $carType,
        protected string $photoFileName,
        protected string $brand,
        protected float $carrying,
        private float $bodyWidth,
        private float $bodyHeight,
        private float $bodyLength
    ) {}

    public function getBodyWidth(): float
    {
        return $this->bodyWidth;
    }

    public function getBodyHeight(): float
    {
        return $this->bodyHeight;
    }

    public function getBodyLength(): float
    {
        return $this->bodyLength;
    }

    public function getBodyVolume(): float
    {
        return $this->bodyWidth * $this->bodyHeight * $this->bodyLength;
    }

}
