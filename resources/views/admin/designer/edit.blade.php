@extends('admin.layout')
@section('title','设计师管理')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                编辑设计师
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
    <form role="form" method="post" action='{{url("admin/designer/{$designer->id}")}}' enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label>分类名称</label>
            <input class="form-control" name="name" value="{{$designer->name}}">
        </div>
        <div class="form-group">
            <label>英文名称</label>
            <input class="form-control" name="subtitle" value="{{$designer->subtitle}}">
        </div>
        <div class="form-group">
            <label>图片</label>
            <input type="file" name="pic" value="{{$designer->pic}}"/>
            <img src="{{url('/')."/uploads/".$designer->pic}}" style="height:50px">
        </div>
        <div class="form-group">
            <label>排序</label>
            <input class="form-control" name="sort" value="{{$designer->sort}}">
        </div>
        <button type="submit" class="btn btn-default">修改</button>
    </form>
@endsection
