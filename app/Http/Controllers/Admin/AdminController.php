<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Post;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminAccess()
    {
        $users = User::orderBy('pseudo', 'asc')->get();
        $posts = Post::orderBy('created_at', 'asc')->get();
        return view('Admin.admin', ['users' => $users, 'posts' => $posts]);
    }

    public function showUsers()
    {
        $users = User::orderBy('pseudo', 'asc')->get();
        return view('Admin.users', ['users' => $users]);
    }

    public function showPosts()
    {
        $posts = Post::orderBy('created_at', 'asc')->get();
        return view('Admin.posts', ['posts' => $posts]);
    }

    public function showCommentaries()
    {
        $data=Comment::all()->get();
        return view('Admin.commentaries', ['data' => $data]);
    }

    public function showFeedbacks()
    {
        $data=Feeback::all()->get();
        return view('Admin.feebacks', ['data' => $data]);
    }
}
