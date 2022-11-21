<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card_value extends Model
{
    public function card()
    {
        return $this->belongsTo('App\Card');
        
    }
    public function grade()
    {
        return $this->belongsTo('App\Grade');
        
    }
}
