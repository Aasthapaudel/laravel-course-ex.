<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sis1 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    // public $data;
    public function __construct()
    {
        //
        $this->title = '$data';
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sis1');
    }
}
