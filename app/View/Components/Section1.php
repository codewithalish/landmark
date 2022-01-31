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
    public $item;

    public function __construct()
    {
        $this->item = CaseModel::query()
            ->orderBy('id', 'desc')
            ->limit(1)
            ->first();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section1');
    }
}
