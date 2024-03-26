<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{   
    /**
     * Get the view / contents that represent the component.
    */
    public $placeholder;

    public function __construct($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    public function render()
{
    return view('components.form.input');
}

}
