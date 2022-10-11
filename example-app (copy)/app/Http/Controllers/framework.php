<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\frameworks;

class framework extends Controller
{
    public function index()
    {
        $data = frameworks::all();
        return view('framework/frameworkView')->with(compact('data'));
    }

    public function addData()
    {
        return view('framework/addFramework');
    }

    public function newframework(Request $req)
    {
        $data = new frameworks;
        $data->name = $req->name;
        $data->status = $req->status;

        $data->save();

        return view('admin/dashboard');
    }

    public function deleteframework($id)
    {
        frameworks::find($id)->delete();

        return view('admin/dashboard');
    }

    public function updateframework($id)
    {
        $data = frameworks::find($id);

        return view('framework/updateFramework')->with(compact('data'));
    }

    public function updateframeworkdata(Request $req)
    {
        $data = frameworks::find($req->id);
        $data->name = $req->name;
        $data->status = $req->status;

        $data->save();

        return view('admin/dashboard');
    }
}
