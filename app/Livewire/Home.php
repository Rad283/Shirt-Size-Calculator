<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $gender = '';

    public $berat = '';

    public $tinggi = '';

    public $size = '';

    public function save()
    {
        $this->size = $this->gender;
        return $this->size;
    }


    public function render()
    {
        return view('livewire.home');
    }
}
