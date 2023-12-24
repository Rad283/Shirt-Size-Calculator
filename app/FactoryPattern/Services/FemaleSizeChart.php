<?php

namespace App\FactoryPattern\Services;

use App\FactoryPattern\Contracts\SizeChart;

class FemaleSizeChart implements SizeChart
{
    public function getSize($weight, $height, $gender)
    {
        $size = '';

        if ($gender === 'female') {
            if ($height < 150) {
                if ($weight < 45) {
                    $size = 'S';
                } elseif ($weight >= 45 && $weight < 55) {
                    $size = 'M';
                } elseif ($weight >= 55 && $weight < 65) {
                    $size = 'L';
                } elseif ($weight >= 65 && $weight < 80) {
                    $size = 'XL';
                } else {
                    $size = 'XXL';
                }
            } elseif ($height < 160) {
                if ($weight < 50) {
                    $size = 'S';
                } elseif ($weight >= 50 && $weight < 60) {
                    $size = 'M';
                } elseif ($weight >= 60 && $weight < 70) {
                    $size = 'L';
                } elseif ($weight >= 70 && $weight < 80) {
                    $size = 'XL';
                } else {
                    $size = 'XXL';
                }
            } elseif ($height < 175) {
                if ($weight < 55) {
                    $size = 'M';
                } elseif ($weight >= 55 && $weight < 65) {
                    $size = 'L';
                } elseif ($weight >= 65 && $weight < 80) {
                    $size = 'XL';
                } else {
                    $size = 'XXL';
                }
            } else {
                if ($weight >= 40 && $weight < 55) {
                    $size = 'M';
                }
                if ($weight >= 55 && $weight < 65) {
                    $size = 'L';
                } elseif ($weight >= 65 && $weight < 75) {
                    $size = 'XL';
                } elseif ($weight >= 75 && $weight < 90) {
                    $size = 'XXL';
                } else {
                    $size = 'N/A (Not Available)';
                }
            }
        }

        return $size;
    }
}
