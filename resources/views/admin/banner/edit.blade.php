@extends('admin.layout')
@section('title','轮播器')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                编辑轮播图
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
    <form role="form" method="post" action='{{url("admin/banner/{$banner->id}")}}' enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label>轮播图标题</label>
            <input class="form-control" name="title" value="{{$banner->title}}">
        </div>
        <div class="form-group">
            <label>轮播图内容描述</label>
            <input class="form-control" name="desc" value="{{$banner->desc}}">
        </div>
        <div class="form-group">
            <label>链接</label>
            <input class="form-control" name="href" value="{{$banner->href}}">
        </div>
        <div class="form-group">
            <label>图片</label>
            <input class="form-control" name="pic" type="file" value="{{$banner->pic}}">
            原图<img src="{{url('/')."/uploads/".$banner->pic}}" style="height:50px">
        </div>
        <div class="form-group">
            <label>排序</label>
            <input class="form-control" name="sort" value="{{$banner->sort}}"/>
        </div>
        <div class="form-group">
            <label>轮播图所属位置</label><br/>
            @if($banner->flag==0)
                <label class="radio-inline">
                    <input type="radio" name="flag" id="optionsRadiosInline1" value="0" checked>首页轮播图
                </label>
                <label class="radio-inline">
                    <input type="radio" name="flag" id="optionsRadiosInline2" value="1" >列表页巨幕
                </label>
                <label class="radio-inline">
                    <input type="radio" name="flag" id="optionsRadiosInline2" value="2" >详情页巨幕
                </label>
            @elseif($banner->flag==1)
                <label class="radio-inline">
                    <input type="radio" name="flag" id="optionsRadiosInline1" value="0" >首页轮播图
                </label>
                <label class="radio-inline">
                    <input type="radio" name="flag" id="optionsRadiosInline2" value="1" checked>列表页巨幕
                </label>
                <label class="radio-inline">
                    <input type="radio" name="flag" id="optionsRadiosInline2" value="2" >详情页巨幕
                </label>
            @elseif($banner->flag==2)
                <label class="radio-inline">
                    <input type="radio" name="flag" id="optionsRadiosInline1" value="0" >首页轮播图
                </label>
                <label class="radio-inline">
                    <input type="radio" name="flag" id="optionsRadiosInline2" value="1" >列表页巨幕
                </label>
                <label class="radio-inline">
                    <input type="radio" name="flag" id="optionsRadiosInline2" value="2" checked>详情页巨幕
                </label>
            @endif

        </div>
        <div class="form-group">
            <label>是否显示</label><br/>
            @if($banner->isshow==1)
                <label class="radio-inline">
                    <input type="radio" name="isshow" id="optionsRadiosInline1" value="0" >不显示
                </label>
                <label class="radio-inline">
                    <input type="radio" name="isshow" id="optionsRadiosInline2" value="1" checked>显示
                </label>
            @else
                <label class="radio-inline">
                    <input type="radio" name="isshow" id="optionsRadiosInline1" value="0" checked>不显示
                </label>
                <label class="radio-inline">
                    <input type="radio" name="isshow" id="optionsRadiosInline2" value="1" >显示
                </label>
            @endif
        </div>
        <button type="submit" class="btn btn-default">修改</button>
    </form>
@endsection
