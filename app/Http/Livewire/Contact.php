<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Contact as ContactModel;

class Contact extends Component
{

    public $contact;

    public function mount()
    {
        $contact = new ContactModel();
    }

    protected $rules = [
        'contact.name' => ['required','min:3'],
        'contact.message' => 'required',
        'contact.mobile' => 'required',
    ];




    public function save()
    {

        $this->validate();

        ContactModel::create($this->contact);

        return back()->with('success','پیام شما با موفقیت ارسال شد');
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
