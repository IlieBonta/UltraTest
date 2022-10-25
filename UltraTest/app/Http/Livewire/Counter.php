<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Counter extends Component
{
    public int $count;

    protected $listeners = ['cartUpdated' => 'onCartUpdated'];

    public function mount(): void
    {
        $this->count = array_sum(Session::get('cart2', []));
    }

    public function onCartUpdated(): void
    {
        $this->count = array_sum(Session::get('cart2', []));
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
