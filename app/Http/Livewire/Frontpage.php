<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Frontpage extends Component
{
    /**
     * Livewire render function
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.frontpage', [
           
        ])->layout('layouts.frontpage');
    }
}
