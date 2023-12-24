<?php

namespace App\FactoryPattern;

use App\FactoryPattern\Contracts\SizeChart;
use App\FactoryPattern\Services\FemaleSizeChart;
use App\FactoryPattern\Services\MaleSizeChart;

class SizeChartFactory
{
    public static function createSizeChart($gender): SizeChart
    {
        if ($gender === 'male') {
            return new MaleSizeChart();
        } elseif ($gender === 'female') {
            return new FemaleSizeChart();
        }

        throw new \InvalidArgumentException('Invalid gender');
    }
}
