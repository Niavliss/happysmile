<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        return view('myprofile', ['user' => $user], ['posts' => $posts]);
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        $posts = Post::all();
        return view('profile', ['user' => $user], ['posts' => $posts]);
    }

    public function settings()
    {
        $user = Auth::user();
        return view('settings', ['user' => $user]);
    }

    public function members()
    {
        $profils = User::orderBy('created_at', 'asc')->take(16)->get();
        return view('members', ['profils' => $profils]);
    }

    public function publish(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min|max:255',
            'content' => 'required|min|max:255',
            'privacy' => '1'
        ]);

        $post = Post::create($validatedData);

        return view('publish');
    }
//
//    public function publish(Request $request)
//    {
//        return Post::create([
//            'title' => $request->input(),
//            'content' => $request['content'],
//            'privacy' => $request['privacy'],
//        ]);
//
//        $post = new Post()
//    }

    public function uploadImg(Request $request)
    {
        $pic_path = $request->file->store('userprofileimg', 'public');

        $user = Auth::user();
        $user->pic_path = $pic_path;
        $user->save();

        $request->session()->flash('notification', 'Photo de profil changée!');
        return view('settings', ['user' => $user]);
    }

    public function uploadPassword(Request $request)
    {
        $validatedData = $request->validate([
            'password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6|confirmed'
        ]);

        $user = Auth::user();

        if (! Hash::check($request->input('password'), $user->password)) {
            return back()
                ->withErrors(['password' => 'Mot de passe actuel invalide'])
                ->withInput();
        }

        $user->password = Hash::make($validatedData['new_password']);
        $user->save();

        $request->session()->flash('notification', 'Mot de passe changé!');

        return view('settings', ['user' => $user]);
    }
}
