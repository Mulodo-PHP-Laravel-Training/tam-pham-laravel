<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $table = 'posts';
    protected $fillable = ['title', 'alias', 'description', 'content', 'image', 'user_id', 'status', 'ordering'];
    private $rules = [
        'title' => 'required|max:50',
        'alias' => 'required',
        'content' => 'required',
        'user_id' => 'required|alpha_num',
    ];

    /**
     * 
     * get the comments of post
     * 
     */
    public function comments()
    {
    	return $this->hasMany('App\Comments', 'post_id', 'id');
    }

    /**
     * 
     * get the user that owner the post
     * 
     */
    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
