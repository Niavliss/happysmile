<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Post[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Post::with('user')->where('privacy','=',0)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Post|\Illuminate\Database\Eloquent\Model
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['privacy'] = 0;
        $post= Post::create($inputs);

        return response()->json($post,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  Post  $post
     * @return Post|\Illuminate\Database\Eloquent\Model
     */
    public function show(Post $post)
    {
        if ($post->privacy == 0)
        {
            return $post;
        }
        else {
            return response()->json(['message'=>'Not Found !'],404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $post
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request, Post $post)
    {
//        dd($request);
        $post->update($request->all());

        return response()->json($post,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */

    public function delete(Post $post)
    {
        $post->delete();
        return response()->json(null,204);
    }
}
