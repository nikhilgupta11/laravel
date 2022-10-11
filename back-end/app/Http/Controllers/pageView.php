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

        return view('page/pageView');
    }
}
