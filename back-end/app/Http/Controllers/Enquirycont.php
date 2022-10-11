<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enquiry;
use PHPUnit\Framework\Test;

class Enquirycont extends Controller
{
    public function index()
    {
        return view("enquiry/enquiry");
    }

    public function getenquiry()
    {
        return enquiry::all();
    }

    public function postenquiry(Request $req)
    {
        $enquiry = new enquiry;
        $enquiry->name = $req->name;
        $enquiry->email = $req->email;
        $enquiry->description = $req->description;
        $enquiry->contact = $req->contact;

        $result = $enquiry->save();

        if ($result) {
            return ["data"];
        } else {
            return ["failed"];
        }
    }
}
