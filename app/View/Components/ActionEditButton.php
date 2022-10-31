<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ActionEditButton extends Component
{

    public function __construct()
    {

    }


    public function render()
    {
        return view('admin.components.action-edit-button');
    }
}
