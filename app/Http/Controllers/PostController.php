<?php

namespace App\Http\Controllers;

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
        $posts = Post::where('privacy', '=', 0)
            ->orderBy('created_at', 'asc')
            ->take(16)
            ->get();

        return view('categories', ['posts' => $posts]);
    }

    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function jokes()
    {
        $jokes = Post::where('type_media', '=', 'blague')->orderBy('created_at', 'asc')->take(16)->get();
        return view('categories/blagues', ['jokes' => $jokes]);
    }

    public function images()
    {
        $pics = Post::where('type_media', '=', 'image')->orderBy('created_at', 'asc')->take(16)->get();
        return view('categories/images', ['pics' => $pics]);
    }

    public function videos()
    {
        $videos = Post::where('type_media', '=', 'video')->orderBy('created_at', 'asc')->take(16)->get();
        return view('categories/videos', ['videos' => $videos]);
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
        Post::create($inputs);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
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
        //
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
        return view('publish');
    }
}
