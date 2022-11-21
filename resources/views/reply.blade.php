<!DOCTYPE HTML>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>pokeka</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/reply.css">
    </head>
    </head>
    <body>
        <form action="/{{$card->id}}/reply/{{$post->id}}" method="POST">
            @csrf
            <div class="comment">
                <h2>コメント</h2>
                <textarea name="reply[comment]" style="width: 600px; height: 300px;" class='comment_space' placeholder="コメントを入力してください"></textarea>
                <input type = "hidden" name = "reply[post_id]" value = {{ $post->id }}>
                <input type = "hidden" name = "reply[user_id]" value = {{ Auth::user()->id }}>
            </div>
            <div class='submit'><input type="submit" style="width: 100px; height:40px" value="送信"/></div>
        </form>
        <div class="back">[<a href="/{{$card->id}}" class='back_text'>戻る</a>]</div>
    </body>
</html>
@endsection