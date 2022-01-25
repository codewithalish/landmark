<?php

namespace App\View\Components;

use App\Models\CaseModel;
use Illuminate\View\Component;

class Section1 extends Component
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
        $item=CaseModel::query()
            ->limit(1)
            ->orderBy('is_vip', 'desc')
            ->get();

        return view('components.section1' , compact('item'));
    }
}
