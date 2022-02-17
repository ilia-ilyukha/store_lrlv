<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $data['styles'] = [
            "/styles/cart.css",
            "/styles/cart_responsive.css"
        ];
        $data['scripts'] = [
            "/js/cart.js"
        ];

        return view('cart.index', $data);
    }

    public function addToCart(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        if(!isset($_COOKIE['cart_id'])) setcookie('cart_id', uniqid());
        $cart_id = $_COOKIE['cart_id'];
        \Cart::session($cart_id);

        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty,
            'attributes' => [
                'image' => $product->image
            ]
        ]);
        return \Cart::getContent();
    }
}
