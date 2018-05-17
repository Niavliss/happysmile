<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends AbstractModel
{
    use Sluggable;
    use SoftDeletes;

    const FIELD_CREATED_AT = 'created_at';
    const FIELD_TITLE = 'title';
    const FIELD_PRIVACY = 'privacy';

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
        'title', 'content', 'type_media', 'user_id', 'privacy',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
