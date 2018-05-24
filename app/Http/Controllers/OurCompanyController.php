<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurCompanyController extends Controller
{
    public function cgu()
    {
        return view('termsandconditions');
    }

    public function privacypolicy()
    {
        return view('privacypolicy');
    }

    public function about()
    {
        return view('about');
    }
}
