<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function getPaginateByLimitType($search,$type,$order,int $limit_count = 45)
    {
        
        // 検索に該当するものに絞り項目と並べ替えを指定して表示
        return $this->where('name', 'LIKE', "%{$search}%")->orderBy($type, $order)->paginate($limit_count);
        
    }
    public function posts()   
    {
        return $this->hasMany('App\Post');  
    }
    public function post()
    {
        return $this->belongsTo('App\Post');
        
    }
    public function card_values()   
    {
        return $this->hasMany('App\Card_value');  
    }
}
