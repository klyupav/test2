<?php


namespace App\Cars;


interface TruckInterface extends BaseCarInterface
{
    public function getBodyWidth(): float;
    public function getBodyHeight(): float;
    public function getBodyLength(): float;
    public function getBodyVolume(): float;
}
