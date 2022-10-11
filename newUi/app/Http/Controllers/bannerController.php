<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;

class bannerController extends Controller
{
    public function index()
    {
        $data = banner::all();
        return view("pages/banner/bannerView")->with(compact('data'));
    }
    public function addBanner()
    {
        return view("pages/banner/addBanner");
    }

    public function addnewBanner(Request $req)
    {
        $banners = new banner;
        $banners->title = $req->title;
        $banners->image = $req->file('image')->store('public');
        $banners->description = $req->description;
        $banners->status = $req->status;

        $banners->save();

        return view('admin/dashboard');
    }
    public function deleteBanner($id)
    {
        banner::find($id)->delete();
        return view('admin/dashboard');
    }
    public function updateBanner($id)
    {
        $data = banner::find($id);
        return view('pages/banner/bannerView')->with(compact('data'));
    }
    // API
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
