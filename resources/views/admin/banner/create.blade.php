@extends('admin.layout')
@section('title','轮播器')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                添加轮播图
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
    <form role="form" method="post" action="{{url('admin/banner')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>轮播图标题</label>
            <input class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>轮播图内容描述</label>
            <input class="form-control" name="desc">
        </div>
        <div class="form-group">
            <label>链接</label>
            <input class="form-control" name="href">
        </div>
        <div class="form-group">
            <label>图片</label>
            <input class="form-control" name="pic" type="file">
        </div>
        <div class="form-group">
            <label>排序</label>
            <input class="form-control" name="sort"/>
        </div>
        <div class="form-group">
            <label>轮播图所属位置</label><br/>
            <label class="radio-inline">
                <input type="radio" name="flag" id="optionsRadiosInline1" value="0" checked>首页轮播图
            </label>
            <label class="radio-inline">
                <input type="radio" name="flag" id="optionsRadiosInline2" value="1" >列表页巨幕
            </label>
            <label class="radio-inline">
                <input type="radio" name="flag" id="optionsRadiosInline2" value="2" >详情页巨幕
            </label>
        </div>
        <div class="form-group">
            <label>是否显示</label><br/>
            <label class="radio-inline">
                <input type="radio" name="isshow" id="optionsRadiosInline1" value="0" checked>不显示
            </label>
            <label class="radio-inline">
                <input type="radio" name="isshow" id="optionsRadiosInline2" value="1" >显示
            </label>
        </div>
        <button type="submit" class="btn btn-default">添加</button>
    </form>
@endsection
