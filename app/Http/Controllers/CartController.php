<?php

namespace App\Http\Controllers;


class CartController extends Controller
{
    public function cartList() {
        $items = \Cart::getContent();
        dd($items);
    }
}
