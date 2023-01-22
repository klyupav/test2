<?php


namespace App;


interface CarInterface extends BaseCarInterface
{
    public function getPassengerSeatsCount(): int;
}
