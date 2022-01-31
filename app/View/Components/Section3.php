<?php

namespace App\View\Components;

use App\Models\CaseModel;
use App\Models\User;
use Illuminate\View\Component;

class Section3 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $items;
    public function __construct()
    {
        $this->items=User::query()
            ->limit(5) ->get();
//            ->orderBy('is_vip', 'desc')

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {


        return view('components.section3' );
    }
}
