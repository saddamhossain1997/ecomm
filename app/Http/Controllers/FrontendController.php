<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->first();
        $products = Product::all();
        $categories = Category::all();

        return view('frontend.index', compact('banners', 'products', 'categories'));
    }

    public function UniqCategory($id)
    {
        $banners = Banner::latest()->first();
        $products = Product::all();
        $categories = Category::all();
        $products_categories = Product::with('category')->get();
        return view('frontend.index', compact('products_categories', 'banners', 'products', 'categories'));
    }
}
