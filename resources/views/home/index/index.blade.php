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
    <link rel="stylesheet" href="{{asset('style/home')}}/css/style.css"/>
    <title>{{$webName}}</title>
</head>
@include('home.header')
    <!-- Slider Image begin -->
    <div id="my-carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <ol class="carousel-indicators">
            <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#my-carousel" data-slide-to="1"></li>
            <li data-target="#my-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($banner as $v)
               @if($v->id==1)
                    <div class="carousel-item active">
                @else
                    <div class="carousel-item">
                @endif
                    <img class="d-block w-100" src="{{asset('uploads')}}/{{$v->pic}}" alt="First slide">
                    <div class="carousel-caption  text-center">
                        <h5>{!!  $v->title !!}</h5>
                        <p>{{$v->desc}}</p>
                        <a class="btn btn-more btn-outline-light btn-lg" href="{{url('home/about')}}">MORE</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Slider Image end -->
</div>
<!-- Home end -->
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
                    <button class="btn btn-default"><a href="{{url('home/about')}}" style="text-decoration: none;color:#E9C37A;">Read More</a></button>
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
<!-- Design team begin -->
<div id="design">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12 design-left">
                <div class="float-right text-center">
                    <h3>Design Team</h3>
                    <span class="design-left-icon"></span>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 design-right">
                <div class="row d-flex align-items-center">
                    @foreach($category as $v)
                        <div class="col-lg-4 col-md-12 my_card">
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
        </div>
    </div>
</div>
<!-- Design team end -->

<!-- Service start -->
<div id="service">
    <div class="container-fluid">
        <div class="row service-leader">
            <div class="col-lg-4 col-md-12 service-tile">
                <h2>{!! $service->title !!}</h2>
                <span></span>
            </div>
            <div class="col-lg-8 col-md-12 service-tile-content">
                <p>
                    {!! $service->content !!}
                </p>
            </div>
        </div>
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
</div>
<!-- Service end -->
<!-- Team Start -->
<div id="team">
    <div class="container-fluid team-up">
        <div class="container-fluid team-up-border">
            <div class="container-fluid team-container-width d-none d-lg-block">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="team-up-title">
                            <h3>Design Team</h3>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3"></div>
                    <div class="col-md-12 col-lg-3"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid team-up-img">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{!! $design->title !!}</h5>
                            <span></span>
                            <p class="card-text">{!! $design->content !!}</p>
                            <a href="#" class="float-right"><img src="{{asset('style/home')}}/images/logo-1.png"></a>
                        </div>
                    </div>
                </div>

              @foreach($designer2 as $v)
                <div class="col-sm-12 col-md-6 col-lg-3 team-active-img">
                    <img src='{{asset("uploads/$v->pic")}}' alt="team"/>
                    <h4>{{$v->name}}</h4>
                    <div>
                        <p>{{$v->name}}</p>
                        <span></span>
                        <p>{{$v->subtitle}}</p>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid team-down-border">
        <div class="container-fluid team-down">
            <div class="row">
                @foreach($designer4 as $v)
                    <div class="col-sm-12 col-md-6 col-lg-3 team-active-img">
                    <img src='{{asset("uploads/$v->pic")}}' alt="team"/>
                    <h4>{{$v->name}}</h4>
                    <div>
                        <p>{{$v->name}}</p>
                        <span></span>
                        <p>{{$v->subtitle}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid team-down-border">
        <div class="container-fluid team-down">
            <div class="row">
                @foreach($designer4l as $v)
                <div class="col-sm-12 col-md-6 col-lg-3 team-active-img">
                    <img src='{{asset("uploads/$v->pic")}}' alt="team"/>
                    <h4>{{$v->name}}</h4>
                    <div>
                        <p>{{$v->name}}</p>
                        <span></span>
                        <p>{{$v->subtitle}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid team-down-border team-down-none d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3"></div>
                <div class="col-sm-12 col-md-6 col-lg-3"></div>
                <div class="col-sm-12 col-md-6 col-lg-3"></div>
                <div class="col-sm-12 col-md-6 col-lg-3"></div>
            </div>
        </div>
    </div>
</div>
<!-- Team end -->
@include('home.footer')
