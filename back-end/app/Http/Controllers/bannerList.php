<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;

class bannerList extends Controller
{
    public function index()
    {
        return view("banner/bannerView");
    }
    public function addBanner()
    {
        return view("banner/addBanner");
    }

    public function getbanner()
    {
        return banner::all();
    }

    public function postbanner(Request $req)
    {
        $banners = new banner;
        $banners->title = $req->title;
        $banners->image = $req->image;
        $banners->description = $req->description;
        $banners->status = $req->status;

        $result = $banners->save();

        if ($result) {
            return ["data"];
        } else {
            return ["failed"];
        }
    }
}
