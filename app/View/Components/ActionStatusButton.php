<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ActionStatusButton extends Component
{
    public $status;

    public function __construct($status)
    {
            $this->status = $status;
    }


    public function render()
    {
        return view('admin.components.action-status-button');
    }
}
