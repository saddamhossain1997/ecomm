<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function show()
    {
        $categories = Category::all();

        return view('backend.product.product_add', compact('categories'));
    }

    public function store(Request $request)
    {



        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required|min:3|max:1000',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'unit' => 'required|string|max:10',
            'quantity' => 'required|integer|min:1',


        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $product = new product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->unit = $request->unit;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->image = $imageName;
        $product->save();
        return redirect()->back();
    }
}
