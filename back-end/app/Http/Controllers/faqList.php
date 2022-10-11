<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;

class faqList extends Controller
{
    public function index()
    {
        return view("faq/viewFaq");
    }
    public function addFaq()
    {
        return view("faq/addFaq");
    }
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
