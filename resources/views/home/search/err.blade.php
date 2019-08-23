<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="{{$webKeyword}}">
    <meta name="description" content="{{$webDesc}}">
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('style/home')}}/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style/home')}}/css/cate.css"/>
    <link rel="shortcut icon" href="//common.cnblogs.com/favicon.ico" type="image/x-icon" />
    <title>{{$webName}}</title>
</head>
@include('home.header')
<!-- Navigation end-->
<!-- Section start-->
<div id="design" class="container-fluid">
    <div class="row d-flex justify-content-center">
        <p>没有搜索到信息.....</p>
    </div>
</div>

<!-- Section end -->
@include('home.footer')
