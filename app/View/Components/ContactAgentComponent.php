<?php

namespace App\View\Components;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\User;
use http\Env\Request;
use Illuminate\View\Component;

class ContactAgentComponent extends Component
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
        return view('components.contact-agent-component');
    }
}
