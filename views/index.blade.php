@extends('templates/master')



@section('content')

    <h2>{{ $welcome }} </br>欢迎</h2>

    <p>Hello and welcome! 这里是Home of Run, 您可以在这里分享或查询出国事项的经验以及信息。由于网站在初期运营阶段, 目前只提供美国方面相关内容。</p>

    <a href="/materials">赴美签证所需材料</a>
    <a href="/interview">美签面试经验</a>
    <a href="/helpme">帮我办理</a>
    
    


@endsection
