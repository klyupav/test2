<?php


namespace App\Cars;


interface SpecMachineInterface extends BaseCarInterface
{
    public function getExtra(): string;
}
