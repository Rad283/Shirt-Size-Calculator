<?php

namespace App\FactoryPattern\Contracts;

interface SizeChart
{
    public function getSize($weight, $height, $gender);
}
