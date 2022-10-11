<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;

class pageController extends Controller
{
    public function index()
    {
        $data = page::all();
        return view('pages/page/pageView')->with(compact('data'));
    }
    public function addpPage()
    {
        return view("pages/page/addPage");
    }
    public function newpage(Request $req)
    {
        $pages = new page;
        $pages->pagename = $req->pagename;
        $pages->slug = $req->slug;
        $pages->description = $req->description;
        $pages->status = $req->status;

        $pages->save();

        return view('admin/dashboard');
    }

    public function deletepage($id)
    {
        page::find($id)->delete();

        return view('admin/dashboard');
    }

    public function updatepage($id)
    {
        $data = page::find($id);
        // return $data;
        return view('pages/page/updatePage')->with(compact('data'));
    }

    public function updatepagedata(Request $req)
    {
        $pages = page::find($req->id);
        $pages->pagename = $req->pagename;
        $pages->slug = $req->slug;
        $pages->description = $req->description;
        $pages->status = $req->status;

        $pages->save();

        return view('admin/dashboard');
    }
}
