<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CompareForm extends Component
{
    public $main, $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($main=null, $categories)
    {
        $this->main = $main;
        $this->categories = $categories;
    }

    public function isMainCompare()
    {
        return $this->main === 'true';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.compare-form');
    }
}
