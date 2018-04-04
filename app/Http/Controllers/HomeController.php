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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        return view('categories');
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
