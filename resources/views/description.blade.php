<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>pokeka</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/description.css">
    </head>
    <body>
        <div class='back'>[<a href='/'>戻る</a>]</div>
        <div class='description'>
            <p>本サイトはポケモンカードの情報共有サイトです<br>ユーザの投稿情報をもとに３日間の</p>
        </div>
        <ol>
            <li>平均価格</li>
            <li>最高、最低価格</li>
            <li>差額、変化率</li>
        </ol>
        <div class='description'>
            <p>を各カードPSA10、美品、傷ありの３種類ごとに算出します。</p>
        </div>
        <div class='description'>
        <p>以下の機能はログイン状態の場合のみ使用できます</p>
        </div>
        <ol>
            <li>カードの状態、価格、コメント投稿機能</li>
            <li>コメント返信機能</li>
            <li>投稿削除機能(同一ユーザーの投稿のみ)</li>
        </ol>
    </body>
</html>
@endsection