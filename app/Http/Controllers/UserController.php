<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function myprofile()
    {
        return view('profile');
    }

    public function profile()
    {
        return view('profile');
    }

    public function settings()
    {
        return view('settings');
    }

    public function members()
    {
        return view('members');
    }
}
