@extends('layouts.main')

@section('title', 'Cart page - laravel.shop.com')

@section('content')
<!-- Home -->

<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(images/cart.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="categories.html">Categories</a></li>
                                    <li>Shopping Cart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cart Info -->

<div class="cart_info">
    <div class="container ">
        <div class="row justify-content-center">
            <h2>Your cart is empty!</h2>
        </div>
        <div class="row justify-content-center">
            <a href="/"><h2>Continue to shopping</h2></a>
        </div>
    </div>
</div>
@endsection