<?php

namespace App\Http\Controllers;

use App\Post;
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
        $posts = Post::all();

        return view('mon-profil', ['user' => $user], ['posts' => $posts]);
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        $posts = Post::all();
        return view('profile', ['user' => $user], ['posts' => $posts]);
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
