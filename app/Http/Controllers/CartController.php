<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $data['styles'] = [
            "/styles/cart.css",
            "/styles/cart_responsive.css"
        ];
        $data['scripts'] = [
            "/js/cart.js"
        ];
        
        return view('cart.index', $data);
    }
}
