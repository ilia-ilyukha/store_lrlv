<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;

class ProductController extends Controller
{
/*
    TODO:
    1) discount_price table
    2) stock_status table
    3) related_product table
*/
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data['product'] = Product::join('product_description AS pd', 'product.id', '=', 'pd.product_id')
        ->where('product.id', $id)
        ->first();     
        $data['images'] = ProductImage::where('product_id', $id)->get();
        $data['styles'] = [
            '/styles/product.css'
        ];
        $data['scripts'] = [
            '/js/product.js'
        ];

        return view('product.show', $data);
    }
}
