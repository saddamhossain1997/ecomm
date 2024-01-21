<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public function addCart($id)
    {
        $add_to_cart = Product::where('id', $id)->first();
        return view('frontend.addtocart.cart', compact('add_to_cart'));
    }
    public function addCartShow($id)
    {
        $add_to_cart = Product::where('id', $id)->first();
        return view('frontend.addtocart.addCartShow', compact('add_to_cart'));
    }
}
