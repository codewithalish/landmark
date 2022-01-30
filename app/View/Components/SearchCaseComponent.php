<?php

namespace App\View\Components;

use App\Models\CaseModel;
use Illuminate\View\Component;

class SearchCaseComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
public $items;
    public function __construct()
    {
        $this->items=CaseModel::query();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @param $request
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.search-case-component' );
    }
}
