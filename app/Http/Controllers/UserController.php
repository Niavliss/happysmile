<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function myprofile()
    {
        $user = Auth::user();

        return view('mon-profil', ['user' => $user]);
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('profile', ['user' => $user]);
    }

    public function settings()
    {
        return view('settings');
    }

    public function members()
    {
        $profils =User::orderBy('created_at', 'asc')->take(16)->get();
        return view('members', ['profils' => $profils]);
    }
}
