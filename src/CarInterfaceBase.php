<?php


namespace App;


interface CarInterfaceBase extends BaseCarInterface
{
    public function getPassengerSeatsCount(): int;
}
