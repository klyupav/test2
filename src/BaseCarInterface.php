<?php


namespace App;


interface BaseCarInterface
{
    public function getCarType(): string;
    public function getPhotoFileName(): string;
    public function getBrand(): string;
    public function getCarrying(): float;
    public function getPhotoFileExt(): string;
}
