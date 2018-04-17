<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function profil()
    {
        return view('profil');
    }

    public function settings()
    {
        return view('settings');
    }

    public function home()
    {
        return view('home');
    }

    public function members()
    {
        return view('members');
    }
}
