<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $table = 'comments';
    protected $fillable = ['content', 'post_id', 'user_id'];
    private $rules = [
        'content' => 'required',
        'user_id' => 'required|alpha_num',
        'post_id' => 'required|alpha_num',
    ];

    /**
     * 
     * get the post that owner the comment
     * 
     */
    public function post()
    {
    	return $this->belongsTo('App\Posts', 'post_id', 'id');
    }

    /**
     * 
     * get the user that owner the comment
     * 
     */
    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
