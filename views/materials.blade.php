@extends('templates/master')

@section('title')
赴美签证所需材料
@endsection


@section('header')
<h2>赴美签证所需材料</h2>
@endsection

@section('content')
    <p>美国签证办理材料主要分为两部分: DS160表格 以及 其他</p>

    <a href="/ds160">DS160表格填写指南</a>
    <a href="/other">其他所需材料总览</a>
    </br>

    <button type="button"><a href="/">返回上级</a></button>
    <button type="button"><a href="/">返回主页</a></button>


@endsection
