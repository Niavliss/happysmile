<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::with('user')->latest()->orderBy('title','desc')->get();

        return view('categories', ['posts' => $posts]);
    }

    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource by type_media
     * @param $typemedia
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sortByTypeMedia($typemedia)
    {
        $posts = Post::with('user')
            ->where('type_media','=',$typemedia)
            ->get();

        return view('categories', ['posts' => $posts]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories/publier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect('categories/publier')
                ->withErrors($validator)
                ->withInput();
        }

        $id = Auth::id();
        $inputs = $request->all();
        $inputs['user_id'] = $id;
        $inputs['privacy'] = 0;
        Post::create($inputs);
        return redirect('categories');
    }

    public function storePrivate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect('categories/publier')
                ->withErrors($validator)
                ->withInput();
        }

        $id = Auth::id();
        $inputs = $request->all();
        $inputs['user_id'] = $id;
        $inputs['privacy'] = 1;
        Post::create($inputs);
        return redirect('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $user = Auth::user();
        $post = Post::findOrFail($id);

        return view('post', ['post' => $post, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post/edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect('post/' . $post['id'] . '/editer')
                ->withErrors($validator)
                ->withInput();
        }
        $post['title'] = request('title');
        $post['content'] = request('content');
        $post->save();
        return redirect('/post/' . $post['id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function publish()
    {
        return view('publierProfil');
    }

    public function softDelete($id)
    {
        $post = Post::find($id);
        $post->delete();

        session()->flash('message', 'Votre post a bien été supprimé');

        return redirect()->route('front_categories');
    }
}
