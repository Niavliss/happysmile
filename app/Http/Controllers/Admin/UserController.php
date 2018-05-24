<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('admin.user.index', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return User|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pseudo' => 'required|string|min:6|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'birth' => 'required|date|before:today-13years|after:today-120years',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/user/create')
                ->withErrors($validator)
                ->withInput();
        };

        return User::create([
            'pseudo' => $request['pseudo'],
            'email' => $request['email'],
            'birth' => $request['birth'],
            'password' => Hash::make($request['password']),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user.show', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
//        $validator = Validator::make($request->all(), [
//            'pseudo' => 'required|string|min:6|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'birth' => 'required|date|before:today-13years|after:today-120years',
////            'password' => 'required|string|min:6',
////            'pic_path' => 'string'
//
//        ]);
//
//        if ($validator->fails()) {
//            return redirect('admin/user/edit/' . $user['id'])
//                ->withErrors($validator)
//                ->withInput();
//        }
        $user['pseudo'] = request('pseudo');
        $user['email'] = request('email');
        $user['birth'] = request('birth');
//        $user['password'] = request('password');
//        $user['pic_path'] = request('pic_path');

        $user->save();
        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
