@extends('admin.layout')
@section('title','管理员')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                添加管理员
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
    <form role="form" method="post" action="{{url('admin/manager')}}">
        @csrf
        <div class="form-group">
            <label>用户名</label>
            <input class="form-control" name="username">
        </div>
        <div class="form-group">
            <label>密码</label>
            <input class="form-control" type="password" name="password">
        </div>
        <div class="form-group">
            <label>确认密码</label>
            <input class="form-control" type="password" name="repassword">
        </div>
        <div class="form-group">
            <label>邮箱</label>
            <input class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>手机</label>
            <input class="form-control" name="tel">
        </div>
        <div class="form-group">
            <label>状态</label>
            <label class="radio-inline">
                <input type="radio" name="status" id="optionsRadiosInline1" value="1" >开启
            </label>
            <label class="radio-inline">
                <input type="radio" name="status" id="optionsRadiosInline2" value="0" checked>禁用
            </label>
        </div>
        <button type="submit" class="btn btn-default">添加</button>
    </form>
@endsection
