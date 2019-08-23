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
    <link rel="stylesheet" href="{{asset('style/home')}}/css/service.css"/>
    <link rel="shortcut icon" href="//common.cnblogs.com/favicon.ico" type="image/x-icon" />
    <title>{{$webName}}</title>
    <style>
        .page-link{
            color: #D1A247;
        }
        .page-item.active .page-link{
            background-color: #D1A247;
            border-color: #D1A247;
        }
    </style>
</head>

@include('home.header')
</div>
<!-- Navigation end-->
<!-- Section start-->
<!-- Service start -->
<div id="service">
    <div class="container-fluid">
        <div class="row service-card">
            @foreach($article as $v)
                <div class='col-lg-4 col-md-12'>
                    <a href='{{url("home/article/{$v->id}")}}'>
                        <div class="my-card" style="background: url({{asset('uploads')."/".$v->pic}}) no-repeat left;background-size:100% 100%;">
                            <div class="my-card-warpper">
                                <div class="my-card-content">
                                    <h4>{!! $v->title !!}</h4>
                                    <p class="my-card-date">{{$v->created_at}}</p>
                                    <p>{!! str_limit($v->content,150,'.....') !!}</p>
                                </div>
                                <span class="my-card-icon">
                            <span></span>
                        </span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        {{$article->links()}}
    </div>
</div>
<!-- Service end -->
<!-- Section end -->
@include('home.footer')
