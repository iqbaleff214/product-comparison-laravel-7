<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductComparisonCard extends Component
{
    public $main, $product;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($main=null, $product)
    {
        $this->main = $main;
        $this->product = $product;
    }

    public function isMainProduct()
    {
        return $this->main === "true";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-comparison-card');
    }
}
