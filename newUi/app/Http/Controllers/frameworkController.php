<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\framework;

class frameworkController extends Controller
{
    public function index()
    {
        $data = framework::all();
        return view('pages/framework/frameworkView')->with(compact('data'));
    }

    public function addData()
    {
        return view('pages/framework/addFramework');
    }

    public function newframework(Request $req)
    {
        $data = new framework;
        $data->name = $req->name;
        $data->status = $req->status;

        $data->save();

        return view('admin/dashboard');
    }

    public function deleteframework($id)
    {
        framework::find($id)->delete();

        return view('admin/dashboard');
    }

    public function updateframework($id)
    {
        $data = framework::find($id);

        return view('pages/framework/updateFramework')->with(compact('data'));
    }

    public function updateframeworkdata(Request $req)
    {
        $data = framework::find($req->id);
        $data->name = $req->name;
        $data->status = $req->status;

        $data->save();

        return view('admin/dashboard');
    }
}
