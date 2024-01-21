<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function show()
    {
        return view('backend.banner.banner_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $banner = new Banner();
        $banner->name = $request->name;
        $banner->image = $imageName;
        $banner->save();
        return redirect()->back();
    }
}
