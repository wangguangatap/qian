@extends('admin.layout')
@section('title','分类管理')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                添加分类
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
    <form role="form" method="post" action="{{url('admin/category')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>分类名称</label>
            <input class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>英文名称</label>
            <input class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>图片</label>
            <input type="file" name="pic"/>
        </div>
        <div class="form-group">
            <label>排序</label>
            <input class="form-control" name="sort">
        </div>
        <button type="submit" class="btn btn-default">添加</button>
    </form>
@endsection
