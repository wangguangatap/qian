@extends('admin.layout')
@section('title','管理员')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                编辑管理员
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
    <form role="form" method="post" action='{{url("admin/manager/{$manager->id}")}}'>
        @csrf
        @method('put')
        <div class="form-group">
            <label>用户名</label>
            <input class="form-control" name="username" value="{{$manager->username}}" readonly>
        </div>
        <div class="form-group">
            <label>密码</label>
            <input class="form-control" name="password" type="password">
        </div>
        <div class="form-group">
            <label>确认密码</label>
            <input class="form-control" name="repassword" type="password">
        </div>
        <div class="form-group">
            <label>邮箱</label>
            <input class="form-control" name="email" value="{{$manager->email}}">
        </div>
        <div class="form-group">
            <label>手机</label>
            <input class="form-control" name="tel" value="{{$manager->tel}}">
        </div>
        <div class="form-group">
            <label>状态</label>
            @if($manager->status==1)
            <label class="radio-inline">
                <input type="radio" name="status" id="optionsRadiosInline1" value="1"  checked>开启
            </label>
            @if($manager->id!=1)
            <label class="radio-inline">
                <input type="radio" name="status" id="optionsRadiosInline2" value="0" >禁用
            </label>
                @endif
                @else
                <label class="radio-inline">
                    <input type="radio" name="status" id="optionsRadiosInline1" value="1" >开启
                </label>
                @if($manager->id!=1)
                <label class="radio-inline">
                    <input type="radio" name="status" id="optionsRadiosInline2" value="0" checked>禁用
                </label>
                @endif
                @endif

        </div>
        <button type="submit" class="btn btn-default">修改</button>
    </form>
    <div class="row" style="margin-top:15px;">
        <div class="col-md-12" style="color:red;">
            <p><label>*</label>账号留空标示不修改密码！</p>
        </div>
    </div>
@endsection
