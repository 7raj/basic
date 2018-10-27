<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    //Get the User for the Ad.
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    //Get the Category for the Ad.
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    //Get the Comment for the Ad.
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'category_id',
    ];
}
