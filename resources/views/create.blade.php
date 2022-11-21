<!DOCTYPE HTML>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>pokeka</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/create.css">
    </head>
    <body>
        <form action="/{{$card->id}}/create/posts" method="POST">
            @csrf
            <div class="grade">
                <h2>状態</h2>
                <select name="post[grade_id]" class='choice_grade'>
                    <option value="1">PSA10</option>
                    <option value="2">傷なし</option>
                    <option value="3">傷あり</option>
                </select>
            </div>
            <div class="value">
                <h2>値段</h2>
                <input type="text" style="width: 200px;" class='input_value' name="post[value]" placeholder="値段を入力してください"/>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
	           　　 @endforeach
	        　　</ul>
	    　　</div>
	    　　@endif
            <div class="comment">
                <h2>コメント</h2>
                <textarea name="post[comment]" style="width: 600px; height: 300px;"  class='comment_space' placeholder="コメントを入力してください"></textarea>
            </div>
            <div class='submit'><input type="submit" style="width: 100px; height:40px" value="送信"/></div>
        </form>
        <div class="back">[<a href="/{{$card->id}}" class='back_text'>戻る</a>]</div>
    </body>
</html>
@endsection