@extends('templates/master')



@section('content')

    <h2>{{ $welcome }} </br>欢迎</h2>

    <p>Hello and welcome! 这里是Home of Run, 您可以在这里分享或查询出国事项的经验以及信息,我们也为您提供有关出国的各项服务。</p>

    <div class="intro">
    <div><h6><img src="images/icon/indexpagelogo/earth.svg" alt="earth" width="50" height="50"> 什么是润潮会？</h6>
    <div class="p"><p>润潮会是以简体中文为母语者（准备出国，正在出国，开始考虑出国）的网络互助会</p></div>
    </div>
    <div><h6><img src="images/icon/indexpagelogo/wh.svg" alt="?" width="50" height="50"></img>润潮会对会员意味着什么？</h6>
    <div class="p"><p>润潮会是会员的圈子、家园、可以栖息的大地</p></div></div>
    <div><h6><img src="images/icon/indexpagelogo/friend.svg" alt="firend" width="50" height="50"> 会员</h6>
    <div class="p"><p>润潮会是一个熟人圈子，不接受陌生人的加入申请。如果您想成为会员，必须有一位现任会员介绍</p></div></div>
     <div><h6><img src="images/icon/indexpagelogo/!.svg" alt="!" width="50" height="50">特别强调</h6>
    <div class="p"><p>润潮会是普通人扎根于平凡生活的互助会，这里拒绝一切意识形态，远离政治！</p></div></div>
    </div>
    <a href="/interview">美签面试经验</a>
    <a href="/helpme">帮我办理</a>
    
    


@endsection
