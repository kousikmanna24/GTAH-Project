<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;

class BannerController extends Controller
{
    function addBanner(Request $req)
    {
        $banner = new banner;
        $banner->bannerimagealt = $req->bannerimagealt;
        $banner->imageorderalt = $req->imageorderalt;
        $banner->imagerightal = $req->imagerightal;
        $banner->status = $req->status;
        $banner-> save();

        return redirect('add-banner');
    }
}
