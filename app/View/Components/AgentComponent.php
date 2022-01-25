<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class AgentComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $items=User::query()
            ->orderBy('created_at', 'desc')
            ->get();
        return view('components.agent-component' , compact('items'));
    }
}
