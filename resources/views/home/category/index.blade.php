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
    <link rel="shortcut icon" href="//common.cnblogs.com/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('style/home')}}/css/cate.css"/>
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
<div id="design" class="container-fluid">
    <div class="row d-flex justify-content-center">
        @foreach($category as $v)
            <div class="col-lg-3 col-md-12 my_card">
                <div class="front">
                    <a href="{{url("home/product/$v->id/list")}}">
                        <img src="{{asset('uploads')}}/{{$v->pic}}">
                        <div class="my_card_content">
                            <h3>{!! $v->title !!}</h3>
                            <h4>{{$v->name}}</h4>
                            <span></span>
                        </div>
                    </a>
                </div>
                <div class="back">
                    <a href="{{url("home/product/$v->id/list")}}">
                        <img src="{{asset('uploads')}}/{{$v->pic}}">
                        <div class="my_card_content">
                            <h3>{!! $v->title !!}</h3>
                            <h4>{{$v->name}}</h4>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Section end -->
@include('home.footer')
