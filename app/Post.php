<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
    'comment',
    'value',
    'user_id',
    'grade_id',
    'card_id'
    ];
    public function grade()
    {
        return $this->belongsTo('App\Grade');
        
    }
    public function card()
    {
        return $this->belongsTo('App\Card');
        
    }
    public function user()
    {
        return $this->belongsTo('App\User');
        
    }
    public function replies()   
    {
        return $this->hasMany('App\Reply');  
    }
    public function cards()
    {
        return $this->HasMany('App\Card');
        
    }
}
