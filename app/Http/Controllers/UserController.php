<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Image;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function myprofile()
    {
        $user = Auth::user();

        return view('profile', ['user' => $user]);
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

    public function upload_img(Request $request)
    {

        if ($request->hasFile('pic_path')) {
            $pic_path = $request->file('pic_path');
            $filename = time() . '.' . $pic_path->getClientOriginalExtension();
            Image::make($pic_path)->save(public_path('profile_pic/' . $filename));

            $user = Auth::user();
            $user->pic_path = $filename;
            $user->save();
        }
        return view('profile', array('user' => Auth::user()) );
    }
}
