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
    <link rel="stylesheet" href="{{asset('style/home')}}/css/style.css"/>
    <link rel="shortcut icon" href="//common.cnblogs.com/favicon.ico" type="image/x-icon" />
    <title>{{$webName}}</title>
</head>
@include('home.header')
    <!-- About Us start -->
    <div id="about">
        <div class="container-fluid">
            <div class='row about-row'>
                <div class="col-lg-6 col-md-12">
                    <div class="about-slide-text">
                        <div class="slide-title">ABOUT US<span></span></div>
                        <h3>{{$about->title}}</h3>
                        {!! $about->content !!}
                        <div class="slide-introduction">QUE<span>INTRODUCTION</span></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 d-none d-lg-block about-slide-col">
                    <div class="about-slide-img">
                        <img src="{{asset('uploads')}}/{{$about->pic}}" alt="about"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us end -->
@include('home.footer')
