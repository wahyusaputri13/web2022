<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Komponen extends Component
{
    public $li;
    public $a;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($li = '', $a = '')
    {
        $this->li = $li;
        $this->a = $a;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.komponen');
    }
}
