@extends('templates/master')

@section('title')
经验详情
@endsection


@section('header')
<h2>经验详情</h2>
@endsection

@section('content')

    <a href="interview/filldp">分享您的经验</a>
    <p>赠人玫瑰, 手有余香。分享您的经验帮助更多的人 &#127801; </p>
    </br>

    <button type="button"><a href="/interview">返回上级</a></button>
    <button type="button"><a href="/">返回主页</a></button>

     <ul>
        <li>签证类型: {{ $dp['category'] }}</li>
        <li>面签日期: {{ $dp['date'] }}</li>
        <li>使馆地点: {{  $dp['location'] }}</li>
        <li>VO（面试官）: {{ $dp['vo'] }}</li>
        <li><p>{{ $dp['description'] }}</p></li>
        <li>面试结果：{{ $dp['result'] }}</li>
        <li><p>{{ $dp['background']}}</li>
    </ul>




@endsection