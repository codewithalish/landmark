<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component
{
    public $search = '';

    public $result = '';


    protected $listeners = ['postAdded' => 'incrementPostCount'];

    public function incrementPostCount()
    {
        $this->result = 10;
    }


    public function render()
    {

        $users = User::query();

        if ($this->search)
            $users = $users->where('id', $this->search);


        return view('livewire.search-users',
            [
                'users' => $users->get(),
            ]
        );
    }
}
