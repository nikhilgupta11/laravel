<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;


class userView extends Controller
{
    public function index()
    {
        $data = user::all();
        // // echo gettype($data);
        return view('user/userView')->with(compact('data'));
    }
    public function addData()
    {
        return view("user/addUser");
    }

    public function getdata()
    {
        return user::all();
    }

    public function postdata(Request $req)
    {
        $user = new user;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->firstname = $req->firstname;
        $user->lastname = $req->lastname;
        $user->contact = $req->contact;
        $user->image = $req->file('image')->store('public');
        $user->address = $req->address;
        $user->status = $req->status;
        $user->isvarify = $req->isvarify;

        $result = $user->save();
        print($result);
        if ($result) {
            return ["data"];
        } else {
            return ["failed"];
        }
    }
}
