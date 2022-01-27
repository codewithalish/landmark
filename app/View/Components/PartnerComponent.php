<?php

namespace App\View\Components;

use App\Models\Partner;
use App\Models\User;
use Illuminate\View\Component;

class PartnerComponent extends Component
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
        $items=Partner::query()
            ->orderBy('created_at', 'desc')
            ->get();
        return view('components.partner-component' ,compact('items'));
    }
}