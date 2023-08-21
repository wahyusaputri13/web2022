<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dip extends Component
{
    public $a = true, $b = false;

    public function render()
    {
        return view('livewire.dip');
    }

    public function openA()
    {
        $this->a = true;
        $this->b = false;
    }

    public function openB()
    {
        $this->a = false;
        $this->b = true;
    }
}
