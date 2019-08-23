@extends('admin.layout')
@section('title','文章管理')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                添加文章
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
    <form role="form" method="post" action="{{url('admin/article')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>文章标题</label>
            <input class="form-control" name="title" value="">
        </div>
        <div class="form-group">
            <label>内容</label>
            <script id="contents" name="contents" type="text/plain"></script>
        </div>
        <div class="form-group">
            <label>上传图片</label>
            <input type="file" name="pic">
        </div>
        <button type="submit" class="btn btn-default">添加</button>
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
