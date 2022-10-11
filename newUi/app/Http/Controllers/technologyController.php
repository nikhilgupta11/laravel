<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\technology;

class technologyController extends Controller
{
    public function index()
    {
        $data = technology::all();
        return view('pages/technology/technologyView')->with(compact('data'));
    }

    public function addData()
    {
        return view('pages/technology/addTechnology');
    }

    public function newtechnology(Request $req)
    {
        $data = new technology;
        $data->name = $req->name;
        $data->status = $req->status;

        $data->save();

        return view('admin/dashboard');
    }

    public function deletetechnology($id)
    {
        technology::find($id)->delete();

        return view('admin/dashboard');
    }

    public function updatetechnology($id)
    {
        $data = technology::find($id);

        return view('pages/technology/updateTechnology')->with(compact('data'));
    }

    public function updatetechnologydata(Request $req)
    {
        $data = technology::find($req->id);
        $data->name = $req->name;
        $data->status = $req->status;

        $data->save();

        return view('admin/dashboard');
    }
}
