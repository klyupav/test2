<?php


namespace App;


interface ParserInterface
{
    /** @return BaseCarInterface[] */
    public function getCarList(string $fileName): array;
}
