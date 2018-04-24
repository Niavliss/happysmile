<?php

namespace App\Http\Controllers;

use App\Post;
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
        $posts = Post::all();

        return view('profile', ['user' => $user], ['posts' => $posts]);
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