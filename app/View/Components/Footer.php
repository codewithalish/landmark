<?php

namespace App\View\Components;

use App\Models\CaseModel;
use App\Models\Variable;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $cases;
    public $links;



    public function __construct()
    {
        //

        $this->cases = CaseModel::orderBy('id','Desc')->limit(Variable::key('number_last_cases'))->get();

        $this->links = [
            [
                'href' => '#',
                'title' => 'قوانین و مقررات'
            ],
             [
                'href' => '#',
                'title' => 'درباره ما'
            ],
             [
                'href' => '#',
                'title' => 'راهنما'
            ],
            [
                'href' => '#',
                'title' => 'آخرین کیس'
            ],

        ];




    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
