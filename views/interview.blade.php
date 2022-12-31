@extends('templates/master')

@section('title')
美签面试经验
@endsection


@section('header')
<h2>美签面试经验总览</h2>
@endsection

@section('content')

    <a href="interview/filldp">分享您的经验</a>
    <p>赠人玫瑰, 手有余香。分享您的经验帮助更多的人 &#127801; 点击查看经验详情 &#11015;</p>
    </br>

    <button type="button"><a href="/">返回上级</a></button>
    <button type="button"><a href="/">返回主页</a></button>

     <div id='interview-index'>
        @foreach ($interviews as $interview)
            <a class='interview-link' href='/interview/readdp?id={{ $interview['id'] }}'>
                <div>
                    <div class='interview-category'>{{ $interview['category'] }}</div>
                    <div>{{ $interview['location']}}</div>
                    <div>{{ $interview['date']}}</div>
                    <div>{{ $interview['result']}}</div>
                    
                </div>
            </a>
        @endforeach 



@endsection
