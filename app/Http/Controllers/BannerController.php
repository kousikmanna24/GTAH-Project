<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;

class BannerController extends Controller
{
    function addBanner(Request $req)
    {
        $banner = new banner;
        
        $banner->bannerimage = $req->bannerimage->store('bannerimage');
        $banner->bannerimagealt = $req->bannerimagealt;

        $banner->imageorder = $req->imageorder->store('imageorder');
        $banner->imageorderalt = $req->imageorderalt;

        $banner->imageright = $req->imageright->store('imageright');
        $banner->imagerightal = $req->imagerightal;

        $banner->status = $req->status;
        $banner-> save();

        return redirect('/');
    }

}
