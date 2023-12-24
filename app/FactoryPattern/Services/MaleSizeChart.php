<?php

namespace App\FactoryPattern\Services;

use App\FactoryPattern\Contracts\SizeChart;

class MaleSizeChart implements SizeChart
{
    public function getSize($weight, $height, $gender)
    {
        $size = '';

        if ($gender === 'male') {
            if ($height < 160) {
                if ($weight < 40) {
                    $size = 'S';
                } elseif ($weight >= 40 && $weight < 45) {
                    $size = 'M';
                } elseif ($weight >= 45 && $weight < 50) {
                    $size = 'L';
                } elseif ($weight >= 50 && $weight < 55) {
                    $size = 'XL';
                } else {
                    $size = 'XXL';
                }
            } elseif ($height < 170) {
                if ($weight < 45) {
                    $size = 'S';
                } elseif ($weight >= 45 && $weight < 50) {
                    $size = 'M';
                } elseif ($weight >= 50 && $weight < 55) {
                    $size = 'L';
                } elseif ($weight >= 55 && $weight < 65) {
                    $size = 'XL';
                } else {
                    $size = 'XXL';
                }
            } elseif ($height < 180) {
                if ($weight < 50) {
                    $size = 'M';
                } elseif ($weight >= 50 && $weight < 55) {
                    $size = 'L';
                } elseif ($weight >= 55 && $weight < 70) {
                    $size = 'XL';
                } else {
                    $size = 'XXL';
                }
            } else {
                if ($weight < 60) {
                    $size = 'L';
                } elseif ($weight >= 60 && $weight < 75) {
                    $size = 'XL';
                } else {
                    $size = 'XXL';
                }
            }
        }

        return $size;
    }
}
