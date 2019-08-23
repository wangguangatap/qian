@extends('admin.layout')
@section('title','关于我们')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                编辑关于我们
            </h1>
        </div>
    </div>
    <div class="row">
        <div clas="col-md-12">
            @if (session()->has('doConfigValidateErr'))
                <div class="alert alert-danger">
                    <ul>
                        @foreach (session()->get('doConfigValidateErr') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('data'))
                <div class="alert alert-{{session('data')['class']}}">
                    {{session('data')['msg']}}
                </div>
            @endif
        </div>
    </div>
    <form role="form" method="post" action='{{url("admin/about/{$about->id}")}}' enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label>所属分类</label>
            <select class="form-control" name="flag">
                <option value="">请选择分类...</option>
                @if($about->flag==0)
                    <option value="0" selected>关于我们栏目简介</option>
                    <option value="1">首页服务栏目简介</option>
                    <option value="2">首页设计团队栏目简介</option>
                @elseif($about->flag==1)
                    <option value="0" >关于我们栏目简介</option>
                    <option value="1" selected>首页服务栏目简介</option>
                    <option value="2">首页设计团队栏目简介</option>
                @elseif($about->flag==2)
                    <option value="0" >关于我们栏目简介</option>
                    <option value="1">首页服务栏目简介</option>
                    <option value="2" selected>首页设计团队栏目简介</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            <label>文章标题</label>
            <input class="form-control" name="title" value="{{$about->title}}">
        </div>
        <div class="form-group">
            <label>内容</label>
            <script id="contents" name="contents" type="text/plain">{!! $about->content !!}</script>
        </div>
        <div class="form-group">
            <label>上传图片</label>
            <input type="file" name="pic" value="{{$about->pic}}">
            @if($about->pic)
            <img src="{{url('/')."/uploads/".$about->pic}}" style="height:50px">
            @endif
        </div>
        <button type="submit" class="btn btn-default">修改</button>
    </form>
    <script type="text/javascript" id="ne1" charset="utf-8" src="{{asset('style/admin')}}/neditor/neditor.config.js?v={{time()}}"></script>
    <script type="text/javascript" id="ne2"  charset="utf-8" src="{{asset('style/admin')}}/neditor/neditor.all.min.js?v={{time()}}"></script>
    <script type="text/javascript" id="ne3" charset="utf-8" src="{{asset('style/admin')}}/neditor/neditor.service.js?v={{time()}}"></script>
    <script>

        setTimeout(function(){
            var ue = UE.getEditor('contents', {
                autoHeight: false,
                autoWidth:true,
                initialFrameHeight:300,
            });
        },1000)

    </script>
@endsection
