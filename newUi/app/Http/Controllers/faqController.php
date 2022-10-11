<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;

class faqController extends Controller
{
    public function index()
    {
        $data = faq::all();
        return view("pages/faq/viewFaq")->with(compact('data'));
    }
    public function addFaq()
    {
        return view("pages/faq/addFaq");
    }
    public function updatefaq($id)
    {
        $data = faq::find($id);
        return view('pages/faq/updateFaq')->with(compact('data'));
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
}
