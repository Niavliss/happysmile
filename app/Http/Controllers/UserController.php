<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $user_id = Auth::id();
        $posts = Post::where('user_id', $user_id)->orderBy('created_at', 'asc')->get();

        return view('myprofile', ['user' => $user, 'posts' => $posts]);
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        $friendexist = $user->isfriend(Auth::id());
        $posts = Post::where('privacy', 0)->where('user_id',$id)->orderBy('created_at', 'asc')->get();

        return view('profile', ['user' => $user,'posts' => $posts, 'friendexist'=> $friendexist]);
    }

    public function settings()
    {
        $user = Auth::user();
        return view('settings', ['user' => $user]);
    }

    public function members()
    {
        $user = Auth::user();
        $profils = User::orderBy('created_at', 'asc')->take(16)->get();
        return view('members', ['profils' => $profils,'user' => $user]);
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

        if (!Hash::check($request->input('password'), $user->password)) {
            return back()
                ->withErrors(['password' => 'Mot de passe actuel invalide'])
                ->withInput();
        }

        $user->password = Hash::make($validatedData['new_password']);
        $user->save();

        $request->session()->flash('notification', 'Mot de passe changé!');

        return view('settings', ['user' => $user]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function askFriend($id)
    {
        $user = Auth::user();
        $user->friends()->attach($id);
        return back();
    }

    public function friendManager(Request $request)
    {
        $answer = $request->request->get('answer');
        $target_user_id = $request->request->get('target_user_id');
        $happyfriends = DB::table('friends')->where('user_id', '=', $target_user_id)
            ->where('target_user_id', '=', Auth::id());
//        dd($happyfriends);
        if ($answer === "yes") {
            $happyfriends->update(['status' => "1"]);

            return back();
        } elseif ($answer === "no") {

            $happyfriends->update(['status' => "2"]);

            return back();
        }
    }
}
