<?php


namespace App\Cars;


abstract class BaseCar implements BaseCarInterface
{
    protected CarType $carType;
    protected string $photoFileName;
    protected string $brand;
    protected float $carrying;

    public function getCarType(): string
    {
        return $this->carType->name;
    }

    public function getPhotoFileName(): string
    {
        return $this->photoFileName;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getCarrying(): float
    {
        return $this->carrying;
    }

    public function getPhotoFileExt(): string
    {
        $file = new \SplFileInfo($this->photoFileName);
        $ext  = $file->getExtension();
        return $ext;
    }
}
