<?php

namespace App\Livewire;

use Livewire\Component;
use App\FactoryPattern\SizeChartFactory;

class Home extends Component
{
    public $weight, $height, $gender, $size;

    public function calcSize()
    {
        $sizeChart = SizeChartFactory::createSizeChart($this->gender);
        $this->size = $sizeChart->getSize($this->weight, $this->height, $this->gender);
    }
  
    public function render()
    {
        return view('livewire.home');
    }
}
