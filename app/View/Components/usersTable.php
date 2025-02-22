<?php

namespace App\View\Components;

use Illuminate\View\Component;

class usersTable extends Component
{
    public $nom;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nom=null)
    {
        $this->nom = $nom;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.users-table');
    }
}