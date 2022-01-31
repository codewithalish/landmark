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
public $items;
    public function __construct()
    {
        $this->items=User::query()
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

        return view('components.agent-component' );
    }
}
