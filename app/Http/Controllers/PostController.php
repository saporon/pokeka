<?php

namespace App\Http\Controllers;

use App\Post;
use App\Card;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Card $card)
    {
        return view('create')->with(['card' => $card]);
    }
    public function store(Card $card,Post $post,Request $request)
    {
        //$request->validate([
            //'value' => 'required',
        //],
        //[
            //'value.required' => 'この項目は必須です。',
            //'value.max' => '価格が範囲外です',
        //]);
        $input = $request['post'];
        $input += ['user_id' => $request->user()->id];
        $input += ['card_id' => $card->id];
        $post->fill($input)->save();
        return redirect('/' . $card->id);
    }
    public function delete(Post $post,Request $request)
    {
        if($request->user()->id === $post->user_id){
            $post->delete();
        }
    return redirect('/' . $post->card_id);
    }
    
}
