<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function cartList() {
        $items = \Cart::getContent();
        return view('site.cart', compact('items'));

    }


    public function addItem(Request $request) {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => abs($request->qnt),
            'attributes' => array(
                'image' => $request->img
            )
        ]);

        return redirect()->route('site.cart')->with('success', 'Produto adicionado no carrinho com sucesso!');
    }

    public function deleteCart(Request $request) {
        \Cart::remove($request->id);
        return redirect()->route('site.cart')->with('success', 'Produto excluido do carrinho com sucesso!');
    }

    public function updateCart(Request $request) {
        \Cart::update($request->id, [
            'quantity' => [
                'relative' =>  false,
                'value' => abs($request->quantity),
            ],
        ]);

        return redirect()->route('site.cart')->with('success', 'Produto atualizado com sucesso!');
    }

    public function clearCart() {
        \Cart::clear();
        return redirect()->route('site.cart')->with('warn', 'Seu carrinho esta vazio!');
    }
}
