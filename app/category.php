<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function children()
    {
        return $this->hasMany('Category', 'parent_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo('Category', 'parent_id');
    }
    //Get the Ad for the Category.
    public function ad()
    {
        return $this->hasMany('App\Ad');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'parent_id',
    ];
}
