<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{


    public function index()
    {
        $products = Cart::all();
        return view("layouts.cart", compact("products"));
    }
}
