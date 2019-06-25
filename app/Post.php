<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = "posts";
    protected $fillable = [
        'idUser', 'image', 'status',
    ];

    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function comment()
    {
    	return $this->hasMany('App\Comment', 'idPost', 'id');
    }
}
