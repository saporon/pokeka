<?php

namespace App\Http\Controllers;

use App\Reply;
use App\Card;
use App\Post;
use Illuminate\Http\Request;


class ReplyController extends Controller
{
    public function reply(Card $card,Post $post)
    {
        
        return view('reply')->with(['card' => $card,'post' => $post]);
    }
    public function store(Card $card,Reply $reply,Request $request)
    {
        $input = $request['reply'];
        $reply->fill($input)->save();
        return redirect('/' . $card->id);
    }
}
