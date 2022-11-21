<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>pokeka</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/index.css">
    </head>
    <body>
        <div>
            <div class='description'>
                <p>本サイトの説明は<a href='/description'>こちら</a></p>
            </div>
            <form action="{{ route('posts.index') }}" method='GET'>
                <select type="text" name="order">
                    <option value='ASC'>昇順</option>
                    <option value='DESC'>降順</option>
                </select>
                <select type='text' name='type'>
                    <option value='name'>名前</option>
                    <option value='value_ave_grade2'>平均価格</option>
                    <option value='difference_grade2'>差額</option>
                    <option value='difference_per_grade2'>変化率</option>
                </select>
            　　<input type="search" class="form-control mr-sm-2" name="search"  value="{{request('search')}}" placeholder="キーワードを入力" aria-label="検索...">
                <input type="submit" value="並べ替え" class="submit-button">
            </form>
        </div>
        <div class='paginate'>
            {{ $cards->links() }}
        </div>
        <div class='cards'>
            @foreach ($cards as $card)
                <div class='card'>
                    <a href='/{{$card->id}}'><h2 class='name'>{{ $card->name }}</h2></a>
                    <a href='/{{$card->id}}'><img src='{{ $card->image }}' class='image'></a>
                    <h2 class='value_ave'>美品平均価格 : {{ $card->value_ave_grade2 }}円</h2>
                    <h2 class='difference'>美品差額 : {{ $card->difference_grade2 }}円</h2>
                    <h2 class='difference_per'>美品変化率 : {{ $card->difference_per_grade2 }}%</h2>
                </div>
            @endforeach
        </div>
    </body>
</html>
@endsection