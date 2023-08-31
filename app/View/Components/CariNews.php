<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CariNews extends Component
{
    public $style;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($style = '')
    {
        $this->style = $style;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cari-news');
    }
}
