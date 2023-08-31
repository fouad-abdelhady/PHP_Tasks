<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\med;
class MedItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $meds;
    public function __construct()
    {
        $this->meds = med::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.med-item');
    }
}
