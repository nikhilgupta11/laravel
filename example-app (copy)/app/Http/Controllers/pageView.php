<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;

class pageView extends Controller
{
    public function index()
    {
        $data = page::all();
        return view('page/pageView')->with(compact('data'));
    }
    public function addpPage()
    {
        return view("page/addPage");
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
        return view('page/updatePage')->with(compact('data'));
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

    // API
    public function getpage()
    {
        return page::all();
    }

    public function postpage(Request $req)
    {
        $pages = new page;
        $pages->pagename = $req->pagename;
        $pages->slug = $req->slug;
        $pages->description = $req->description;
        $pages->status = $req->status;

        $result = $pages->save();

        if ($result) {
            return ["data"];
        } else {
            return ["failed"];
        }
    }
}
