<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Album;

class Frontpage extends Component
{

    public function read()
    {
        return Album::get();
    }

    /**
     * Livewire render function
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.frontpage', [
            'albums' => $this->read(),
        ])->layout('layouts.frontpage');
    }
}
