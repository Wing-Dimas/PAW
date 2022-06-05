<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayouts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $date = date("l, d F Y");
        return view('layouts.app-layouts', compact("date"));
    }
}
