@extends('admin.layout')
@section('title','设计师管理')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                添加设计师
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
    <form role="form" method="post" action="{{url('admin/designer')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>设计师姓名</label>
            <input class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>头衔</label>
            <input class="form-control" name="subtitle">
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
