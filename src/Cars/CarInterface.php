<?php


namespace App\Cars;


interface CarInterface extends BaseCarInterface
{
    public function getPassengerSeatsCount(): int;
}
