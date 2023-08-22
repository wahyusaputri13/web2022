<?php

namespace App\Http\Livewire;

use App\Models\FrontMenu;
use Livewire\Component;

class Dip extends Component
{
    public $a = true, $b = false, $data, $cari;

    public function mount()
    {
        $this->data = FrontMenu::whereNotNull('kategori')->get();
    }

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

    public function updatedCari()
    {
        if ($this->data == []) {
            $this->data = FrontMenu::whereNotNull('kategori')->get();
        }

        $this->data = FrontMenu::where('kategori', $this->cari)->get();
    }
}
