@extends('templates/master')

@section('title')
美签面试经验
@endsection


@section('header')
<h2>分享我的经验</h2>
@endsection

@section('content')

    <button type="button"><a href="/interview">返回上级</a></button>
    <button type="button"><a href="/">返回主页</a></button>

     @if ($dpSaved)
        <div class='alert alert-success'>提交成功！感谢分享！</div>
    @endif

    @if ($app->errorsExist())
        <div class='alert alert-danger'>糟糕！似乎您的填写有问题。</div>
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
    @endif

     <form id='new-dp-form' method='POST' action='/interview/savedp'>
        <h4>分享我的美签面试经验</h4>
        <div class='info'>签证类型、日期、地点、面签过程、签证结果为必填，其余为选填。</div>

        <div class='form-group'>
            <label for='category'>签证类型</label>
            <input type='text' class='form-control' name='category' id='category'
                value='{{ $app->old('category') }}'>
        </div>

        <div class='form-group'>
            <label for='date'>面签日期</label>
            <input type='text' class='form-control' name='date' id='date'
                value='{{ $app->old('date') }}'>
            <div class='info'>请以yyyy-mm-dd的格式填写</div>
        </div>

        <div class='form-group'>
            <label for='loaction'>面签地点</label>
            <input type='text' name='location' id='location' class='form-control'{{ $app->old('location') }}>
            <div class='info'>比如 北京/上海/广州 等...</div>
        </div>

        <div class='form-group'>
            <label for='vo'>VO/面签官</label>
            <input type='text' class='form-control' name='vo' id='vo'
                value='{{ $app->old('vo') }}'>
                <div class='info'>选填。请描述您的面签官的样貌特征</div>
        </div>

        <div class='form-group'>
            <label for='description'>面签过程</label>
            <textarea class='form-control' name='description' id='description'>
                {{ $app->old('description') }}</textarea>
        </div>

        <div class='form-group'>
            <label for='result'>面签结果</label>
            <input type='radio' name='result' id='approved' value='通过'>
            <label for='approved'>通过</label>

            <input type='radio' name='result' id='denied' value='拒绝'>
            <label for='denied'>拒绝</label>

            <input type='radio' name='result' id='checked' value='checked'>
            <label for='checked'>checked</label>
        </div>

        <div class='form-group'>
        <label for='background'>个人背景</label>
            <textarea class='form-control' name='background' id='background'>
                {{ $app->old('background') }}</textarea>
            
            <div class='info'>选填。请描述您办签证的背景。有助于帮助其他人理解您为什么被拒绝/通过/checked。</div>

        </div>

        <button type='submit' class='btn btn-primary'>提交</button>
    </form>



@endsection
