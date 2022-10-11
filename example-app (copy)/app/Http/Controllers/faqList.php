<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;

class faqList extends Controller
{
    public function index()
    {
        $data = faq::all();
        return view("faq/viewFaq")->with(compact('data'));
    }
    public function addFaq()
    {
        return view("faq/addFaq");
    }
    public function updatefaq($id)
    {
        $data = faq::find($id);
        return view('faq/updateFaq')->with(compact('data'));
    }
    public function updatefaqdata(Request $req)
    {
        $faqs = faq::find($req->id);
        $faqs->question = $req->question;
        $faqs->answer = $req->answer;
        $faqs->status = $req->status;

        $faqs->save();

        return view('admin/dashboard');
    }
    public function addnewFaq(Request $req)
    {
        $faqs = new faq;
        $faqs->question = $req->question;
        $faqs->answer = $req->answer;
        $faqs->status = $req->status;

        $faqs->save();

        return view('admin/dashboard');
    }

    // API
    public function getfaq()
    {
        return faq::all();
    }
    public function postfaq(Request $req)
    {
        $faqs = new faq;
        $faqs->question = $req->question;
        $faqs->answer = $req->answer;
        $faqs->status = $req->status;

        $result = $faqs->save();

        if ($result) {
            return ["data"];
        } else {
            return ["failed"];
        }
    }
}
