@extends('admin.layout')
@section('title','基础配置')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                基础配置
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
    <form role="form" method="post" action="{{url('admin/config/basestore')}}">
        @csrf
        <input type="hidden" name="title" value="基础配置"/>
        <input type="hidden" name="name" value="baseConfig"/>
        <div class="form-group" enctype="multipart/form-data">
            <label>公司名名称</label>
            <input class="form-control" name="baseCompanyName" value="{{isset($baseConfigData['baseCompanyName'])?$baseConfigData['baseCompanyName']:''}}">
        </div>
        <div class="form-group">
            <label>地址</label>
            <input class="form-control" name="baseCompanyAddr" value="{{isset($baseConfigData['baseCompanyAddr'])?$baseConfigData['baseCompanyAddr']:''}}">
        </div>
        <div class="form-group">
            <label>客服热线</label>
            <input class="form-control" name="baseCompanyTel" value="{{isset($baseConfigData['baseCompanyTel'])?$baseConfigData['baseCompanyTel']:''}}">
        </div>
        <div class="form-group">
            <label>邮箱</label>
            <input class="form-control" name="baseCompanyEmail" value="{{isset($baseConfigData['baseCompanyEmail'])?$baseConfigData['baseCompanyEmail']:''}}">
        </div>
        <div class="form-group">
            <label>备案号</label>
            <input class="form-control" name="baseCompanyNum" value="{{isset($baseConfigData['baseCompanyNum'])?$baseConfigData['baseCompanyNum']:''}}">
        </div>
        <button type="submit" class="btn btn-default">修改</button>
    </form>
@endsection
