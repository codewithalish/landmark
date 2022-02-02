<?php

namespace App\View\Components;

use App\Models\CaseModel;
use Illuminate\View\Component;

class LatestComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $item;
    public function __construct()
    {
        $this->item=CaseModel::query()
            ->limit(1)
            ->orderBy('created_at', 'desc')
            ->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.latest-component');
    }
}
