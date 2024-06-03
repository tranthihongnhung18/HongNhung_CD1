<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Slider extends Component
{
    public $banners;

    public function __construct($banners)
    {
        $this->banners = $banners;
    }

    public function render()
    {
        return view('components.slider');
    }
}