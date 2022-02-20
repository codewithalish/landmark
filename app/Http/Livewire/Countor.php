<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Countor extends Component
{
    public $name = 'ali';
    public $number = 0;
    public $liked = false;

    public function like()
    {
        //change database
        $this->liked = true;
    }


    public function dislike()
    {
        //change database
        $this->liked = false;
    }

    public function render()
    {
        return view('livewire.countor');
    }
}
