<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\industry;

class industryController extends Controller
{
    public function index()
    {
        $data = industry::all();
        return view('pages/industry/industryView')->with(compact('data'));
    }

    public function addData()
    {
        return view('pages/industry/addIndustry');
    }

    public function newindustry(Request $req)
    {
        $data = new industry;
        $data->name = $req->name;
        $data->status = $req->status;

        $data->save();

        return view('admin/dashboard');
    }

    public function deleteindustry($id)
    {
        industry::find($id)->delete();

        return view('admin/dashboard');
    }

    public function updateindustry($id)
    {
        $data = industry::find($id);

        return view('pages/industry/updateIndustry')->with(compact('data'));
    }

    public function updateindustrydata(Request $req)
    {
        $data = industry::find($req->id);
        $data->name = $req->name;
        $data->status = $req->status;

        $data->save();

        return view('admin/dashboard');
    }
}
