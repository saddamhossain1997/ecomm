<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show()
    {
        return view('backend.category.category_add');
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'category_image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'category_name' => 'required|unique',

        ]);
        $imageName = time() . '.' . $request->category_image->extension();
        $request->category_image->move(public_path('images'), $imageName);
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_image = $imageName;
        $category->save();
        return redirect()->back();
    }
}
