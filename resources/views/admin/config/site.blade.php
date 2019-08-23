@extends('admin.layout')
@section('title','网站配置')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                网站配置
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
    <form role="form" method="post" action="{{url('admin/config/sitestore')}}">
        @csrf
        <input type="hidden" name="title" value="网站配置"/>
        <input type="hidden" name="name" value="siteConfig"/>
        <div class="form-group">
            <label>网站名称</label>
            <input class="form-control" name="webName" value="{{isset($siteConfigData['webName'])?$siteConfigData['webName']:''}}">
        </div>
        <div class="form-group">
            <label>网站域名</label>
            <input class="form-control" name="webDomain" value="{{isset($siteConfigData['webDomain'])?$siteConfigData['webDomain']:''}}">
            <p class="help-block">例如：http://www.bing.com   (必须带上http://)</p>
        </div>
        <div class="form-group">
            <label>网站关键字</label>
            <input class="form-control" name="webKeyword" value="{{isset($siteConfigData['webKeyword'])?$siteConfigData['webKeyword']:''}}">
            <p class="help-block">例如：广告,文章，推广  (中间用逗号分割)</p>
        </div>
        <div class="form-group">
            <label></label>
            <input class="form-control" name="webKeyword" value="{{isset($siteConfigData['webKeyword'])?$siteConfigData['webKeyword']:''}}">
            <p class="help-block">例如：广告,文章，推广  (中间用逗号分割)</p>
        </div>
        <div class="form-group">
            <label>网站描述</label>
            <textarea class="form-control" rows="4" name="webDesc">{{isset($siteConfigData['webDesc'])?$siteConfigData['webDesc']:''}}</textarea>
        </div>
        <button type="submit" class="btn btn-default">修改</button>
    </form>

@endsection
