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
    public $items;
    public function __construct()
    {
        $this->items=Partner::query()
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.partner-component' );
    }
}
