<?php

namespace App\View\Components;

<<<<<<< HEAD
=======
use App\Models\FrontMenu;
>>>>>>> 882b159 (perbaikan dip)
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class jip extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return view('components.jip');
=======
        return view('components.jip', [
            'data' => FrontMenu::whereNotNull('kategori')->get()
        ]);
>>>>>>> 882b159 (perbaikan dip)
=======
        return view('components.jip');
>>>>>>> 8ef379c (perbaikan parsing data)
    }
}
