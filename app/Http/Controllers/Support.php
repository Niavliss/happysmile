<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Support extends Controller
{
    public function faq()
    {
        return view('faq');
    }

    public function reportanissue()
    {
        return view('reportanissue');
    }
}
