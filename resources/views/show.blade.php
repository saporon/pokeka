<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>pokeka</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/show.css">
    </head>
    <body>
        <div class='back'>[<a href='/'>戻る</a>]</div>
            <div class='card'>
                <h2 class='name'>{{ $card->name }}</h2>
                <img src='{{ $card->image }}' class='image'>
                <h2 class='Value_ave'>美品平均価格 : {{ $card->value_ave_grade2 }}円</h2>
                <h2 class='Difference'>美品差額 : {{ $card->difference_grade2 }}円</h2>
                <h2 class='Difference_per'>美品変化率 : {{ $card->difference_per_grade2 }}%</h2>
            </div>
            
            <table border="3" class='table'>
                <tr>
                    <th class='table_title'><b>値段情報(３日間)</b></th>
                    <th>PSA10</th>
                    <th>美品</th>
                    <th>傷あり</th>
                </tr>
                <tr>
                    <td>最高価格</td>
                    <td>{{ $card->value_max_grade1 }}</td>
                    <td>{{ $card->value_max_grade2 }}</td>
                    <td>{{ $card->value_max_grade3 }}</td>
                </tr>
                <tr>
                    <td>最低価格</td>
                    <td>{{ $card->value_min_grade1 }}</td>
                    <td>{{ $card->value_min_grade2 }}</td>
                    <td>{{ $card->value_min_grade3 }}</td>
                </tr>
                <tr>
                    <td>平均価格</td>
                    <td>{{ $card->value_ave_grade1 }}</td>
                    <td>{{ $card->value_ave_grade2 }}</td>
                    <td>{{ $card->value_ave_grade3 }}</td>
                </tr>
                <tr>
                    <td>差額</td>
                    <td>{{ $card->difference_grade1 }}</td>
                    <td>{{ $card->difference_grade2 }}</td>
                    <td>{{ $card->difference_grade3 }}</td>
                </tr>
                <tr>
                    <td>変化率(%)</td>
                    <td>{{ $card->difference_per_grade1 }}</td>
                    <td>{{ $card->difference_per_grade2 }}</td>
                    <td>{{ $card->difference_per_grade3 }}</td>
                </tr>
            </table>
        <div class='table_text'>
            <p>毎日0時自動更新</p>
        </div>
        
        <!-- データをjavascriptに渡す -->
        <script>
        window.graph_labels= @json($label);
        window.graph_value_ave_grade1= @json($value_ave_grade1);
        window.graph_value_ave_grade2= @json($value_ave_grade2);
        window.graph_value_ave_grade3= @json($value_ave_grade3);
        </script>
        
        <!-- グラフを描画 -->
　　　　<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
		<script src="{{asset('js/graph.js')}}">
		var labels = @json($label);
		</script>
		<div style="top:60px; left:10px; width:1000px; height:500px;" class='graph'>
		    <canvas id="myChart"></canvas>
　　　　</div>
        
        <!-- コメント欄 -->
        <div class='comment-page'>
            <div class='comment_page_title'>&#x1f4ac;コメント</div>
            <button onclick="location.href='/{{$card->id}}/create'"　class='post-button'>&#x1f4dd;　コメント投稿</button>
            <div class='comments'>
            @foreach ($card_posts as $post)
                <div class='comment'>
                    <p class='user_name'>ユーザ名 : <b>{{$post->user->name}}</b></p>
                    <p class='contents'><span>価格 : {{$post->value}}</span> <span>状態 : {{$post->grade->grade}}</span> 投稿日時 : {{$post->created_at->format('Y-m-d  H:i')}}</p>
                    <p>{{$post->comment}}</p>
                    <button onclick="location.href='/{{$card->id}}/reply/{{$post->id}}'"　class='reply-button'>返信</button>
                    
                    <form action="/{{ $post->id }}/delete" id="form_delete" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class='delete-button'>削除</button>
                    </form>
                        @foreach ($post->replies as $reply)
                        <div class='border-top'></div>
                        <div class='reply'>
                            <p class='user_name_reply'><span>ユーザ名 : <b>{{$reply->user->name}}</b></span><span class='reply_time'>投稿日時 : {{$reply->created_at->format('Y-m-d  H:i')}}</span></p>
                            <p>{{$reply->comment}}</p>
                        </div>
                        @endforeach
                </div>
            @endforeach
            <div class='paginate'>
                {{ $card_posts->links() }}
            </div>
        </div>
        </div>
    </body>
</html>
@endsection
