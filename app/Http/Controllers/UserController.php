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
        $posts = Post::where('privacy', 1)->orderBy('created_at', 'asc')->get();
        $demands = DB::table('friends')->where('target_user_id', Auth::id())->get();
        $tablelength = $demands->count();
        $friendstables = [];
        $friends= null;
        if ($tablelength > 0) {
            foreach ($demands as $demand) {

                array_push($friendstables, $demand->user_id);

            };

            $friends = User::whereIn('id', $friendstables)->with('hasHappyFriend')->get();
        };
        return view('myprofile', ['user' => $user, 'posts' => $posts, 'friends' => $friends, 'demands']);
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        $posts = Post::where('privacy', 0)->orderBy('created_at', 'asc')->get();
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
        $user->hasHappyFriend()->attach($id);
        return back();
    }

    public function friendManager(Request $request)
    {
        $answer = $request->request->get('answer');
        $target_user_id = $request->request->get('target_user_id');
        $target_user = User::where('id',$target_user_id)->first();
        $happyfriends = DB::table('friends')->where('user_id','=', $target_user_id)
            ->where('target_user_id','=', Auth::id());
        if ($answer == 1) {
            $happyfriends->update(['status'=> 1]);

            $target_user->isHappyFriend()->attach(Auth::id());
            return back();
        }
        else {
            $happyfriends->update(['status'=> 2]);

            return back();
        }
    }
}
