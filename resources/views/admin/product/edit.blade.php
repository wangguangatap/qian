@extends('admin.layout')
@section('title','产品管理')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                修改产品
            </h1>
        </div>
    </div>
    <div class="row" style="margin:0 0 10px 0;">
        <a class="btn btn-success" href='{{url('admin/product')}}'>返回产品列表</a>
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
    <form role="form" method="post" action='{{url("admin/product/{$product->id}")}}' enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label>产品名称</label>
            <input class="form-control" name="title" value="{{$product->title}}">
        </div>
        <div class="form-group">
            <label>所属分类</label>
            <select class="form-control" name="cid">
                <option value="">请选择分类...</option>
                @foreach($cate as $v)
                    <option value="{{$v->id}}" {{$v->id==$product->cid?"selected":""}}>{{$v->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>占用网格大小</label>
            <select class="form-control" name="flag">
                <option value="">请选择分类...</option>
                @if($product->flag==0)
                    <option value="0" selected>第一行三个正常网格大小</option>
                    <option value="1">横向占用两个网格</option>
                    <option value="2">纵向占用两个网格</option>
                    <option value="3">最后两个正常网格大小</option>
                @elseif($product->flag==1)
                    <option value="0" >第一行三个正常网格大小</option>
                    <option value="1" selected>横向占用两个网格</option>
                    <option value="2">纵向占用两个网格</option>
                    <option value="3">最后两个正常网格大小</option>
                @elseif($product->flag==2)
                    <option value="0" >第一行三个正常网格大小</option>
                    <option value="1">横向占用两个网格</option>
                    <option value="2"selected>纵向占用两个网格</option>
                    <option value="3">最后两个正常网格大小</option>
                @elseif($product->flag==3)
                    <option value="0">第一行三个正常网格大小</option>
                    <option value="1">横向占用两个网格</option>
                    <option value="2">纵向占用两个网格</option>
                    <option value="3" selected>最后两个正常网格大小</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            <label>是否推荐</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="tuijian" value="1">推荐
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>内容</label>
            <script id="contents" name="contents" type="text/plain">{!! $product->content !!}</script>
        </div>
        <div class="form-group">
            <label>上传图片</label>
            <input type="file" name="pic" value="{{$product->pic}}">
        </div>
        <div class="form-group">
            <label>原图</label>
            <img src="{{url('/')."/uploads/".$product->pic}}" style="height:60px"/>
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
        },1500)
    </script>
@endsection
