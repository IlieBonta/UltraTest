<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class AddToBasketButton extends Component
{
    public int $productId;

    public function addToBasket(): void
    {
        $cart = Session::get('cart2', []);
        $cart[$this->productId] = ($cart[$this->productId] ?? 0) + 1;
        Session::put('cart2', $cart);

        $this->emitTo('counter', 'cartUpdated');
    }

    public function render()
    {

        return view('livewire.add-to-basket-button');
    }
}
