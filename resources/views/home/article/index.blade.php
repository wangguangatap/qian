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
    <link rel="stylesheet" href="{{asset('style/home')}}/css/detail.css"/>
    <link rel="shortcut icon" href="//common.cnblogs.com/favicon.ico" type="image/x-icon" />
    <title>{{$webName}}</title>
</head>
@include('home.header')
<div class="jumbotron jumbotron-fluid" style="background: url({{asset('uploads')}}/{{$banner->pic}}) no-repeat center; background-size:100% 100%;">
    <div class="container-fluid">
        <h1 class="display-4">{{$banner->title}}</h1>
        <p class="lead">{{$banner->desc}}</p>
    </div>
</div>
</div>
<!-- Navigation end-->
<!-- Section start-->
<div id="section" style="margin-top: 20px;">
    <div class="container-fluid section-card">
        <div class="article_title text-center" style="margin:40px 0 0 0"><h2>{{$article->title}}</h2></div>
        <div class="article_create_time text-center" style="margin:20px 0 40px 0"><p>发布时间：{{$article->created_at}}</p></div>
        <div>
            {!! $article->content!!}
        </div>
    </div>
</div>
<!-- Section end -->
@include('home.footer')
