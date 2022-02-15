<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $products = Product::join('product_description as pd', 'product.id', '=', 'pd.product_id')
        ->limit(8)
        ->get();

        return view('home.index', [
            'products' => $products
        ]);
    }
} 
