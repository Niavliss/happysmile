<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    use HasApiTokens, Notifiable;
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pseudo', 'email', 'password', 'birth',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'target_user_id')
            ->withPivot('status')->withTimestamps();
    }

    public function friendsOn()
    {
        return $this->belongsToMany(User::class, 'friends', 'target_user_id', 'user_id')
            ->withPivot('status')->withTimestamps();
    }

//    public function myFriends(){
//        return DB::table('users')
//            ->join('friends', 'users.id', '=', 'friends.target_user_id')
//            ->where('friends.user_id', $this->id)
//            ->get();
//    }
//
//    public function myFriendsOnDemand(){
//        return DB::table('users')
//            ->join('friends', 'users.id', '=', 'friends.user_id')
//            ->where('friends.target_user_id', $this->id)
//            ->where('friends.status', '0')
//            ->get();
//    }

    public function allFriendsValid()
    {
        $firsts = $this->friends;

        $seconds = $this->friendsOn;

        $allfriends = $firsts->merge($seconds)->where('pivot.status', '1')->sortByDesc('pivot.updated_at');

        return $allfriends;
    }

    public function isfriend($id)
    {
        $isfriend = 0;

        $user = User::findOrFail($id);

        $firsts = $this->friends;

        $seconds = $this->friendsOn;

        $allfriends = $firsts->merge($seconds);

        foreach ($allfriends as $allfriend) {
            if ($user->id === $allfriend->id) {
                $isfriend = 1;
                return $isfriend;
            }
        }
        return $isfriend;
    }

//
//    public function allFriendsValid(){
//        $first = DB::table('users')
//            ->join('friends', 'users.id', '=', 'friends.target_user_id')
//            ->where('friends.user_id', $this->id)
//            ->where('friends.status', '1')
//            ->orderBy('friends.created_at', 'desc');
//
//        $users =DB::table('users')
//            ->join('friends', 'users.id', '=', 'friends.user_id')
//            ->where('friends.target_user_id', $this->id)
//            ->where('friends.status', '1')
//            ->orderBy('friends.created_at', 'desc')
//            ->union($first)
//            ->get();
//
//        return $users;
//    }


}
