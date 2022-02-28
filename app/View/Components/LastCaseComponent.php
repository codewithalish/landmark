<?php

namespace App\View\Components;

use App\Models\CaseModel;
use Illuminate\View\Component;

class LastCaseComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $items;
    public function __construct()
    {
        $this->items=CaseModel::query()
            ->where( 'status' , 'CONFIRMED')
            ->limit(6)
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
        return view('components.last-case-component' );
    }
}
