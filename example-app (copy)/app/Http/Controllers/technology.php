<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\technologies;

class technology extends Controller
{
    public function index()
    {
        $data = technologies::all();
        return view('technology/technologyView')->with(compact('data'));
    }

    public function addData()
    {
        return view('technology/addTechnology');
    }

    public function newtechnology(Request $req)
    {
        $data = new technologies;
        $data->name = $req->name;
        $data->status = $req->status;

        $data->save();

        return view('admin/dashboard');
    }

    public function deletetechnology($id)
    {
        technologies::find($id)->delete();

        return view('admin/dashboard');
    }

    public function updatetechnology($id)
    {
        $data = technologies::find($id);

        return view('technology/updateTechnology')->with(compact('data'));
    }

    public function updatetechnologydata(Request $req)
    {
        $data = technologies::find($req->id);
        $data->name = $req->name;
        $data->status = $req->status;

        $data->save();

        return view('admin/dashboard');
    }
}
