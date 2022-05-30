<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    //
    function show()
    {
        $data = Banner::all();
        return view('banner',['banners' => $data]);
    }
}
