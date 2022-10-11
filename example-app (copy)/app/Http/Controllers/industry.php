<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\industery;

class industry extends Controller
{
    public function index()
    {
        $data = industery::all();
        return view('industery/industeryView')->with(compact('data'));
    }

    public function addData()
    {
        return view('industery/addIndustery');
    }

    public function newindustry(Request $req)
    {
        $data = new industery;
        $data->name = $req->name;
        $data->status = $req->status;

        $data->save();

        return view('admin/dashboard');
    }

    public function deleteindustry($id)
    {
        industery::find($id)->delete();

        return view('admin/dashboard');
    }

    public function updateindustry($id)
    {
        $data = industery::find($id);

        return view('industery/updateIndustery')->with(compact('data'));
    }

    public function updateindustrydata(Request $req)
    {
        $data = industery::find($req->id);
        $data->name = $req->name;
        $data->status = $req->status;

        $data->save();

        return view('admin/dashboard');
    }
}
