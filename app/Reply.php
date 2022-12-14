<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
    'comment',
    'user_id',
    'post_id'
    ];
    public function post()
    {
        return $this->belongsTo('App\Post');
        
    }
    public function user()
    {
        return $this->belongsTo('App\User');
        
    }
}
