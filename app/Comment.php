<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //Get the Ad for the comments.
    public function ad()
    {
        return $this->belongsTo('App\Ad');
    }
    //Get the User for the comments.
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'ad_id',
    ];
}
