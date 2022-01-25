<?php

namespace App\View\Components;

use App\Models\Service;
use App\Models\User;
use Illuminate\View\Component;

class ServicesComponent extends Component
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
        $items=Service::query()
            ->limit(4)
            ->get();
        return view('components.services-component' , compact('items'));
    }
}
