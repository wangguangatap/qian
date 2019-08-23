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
    <link rel="stylesheet" href="{{asset('style/home')}}/css/product.css"/>
    <link rel="shortcut icon" href="//common.cnblogs.com/favicon.ico" type="image/x-icon" />
    <title>{{$webName}}</title>
    <style>
        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
            border:none;
            color:#DC9214;
        }
        .nav-tabs .nav-link{
            color:#212529;
            border-bottom: none;
        }
        .nav-tabs{
            border: none;
        }
    </style>
</head>

@include('home.header')
<!-- Section start -->
<div class="jumbotron jumbotron-fluid" style="background: url({{asset('uploads')}}/{{$banner->pic}}) no-repeat center; background-size:100% 100%;">
    <div class="container-fluid">
        <h1 class="display-4">{{$banner->title}}</h1>
        <p class="lead">{{$banner->desc}}</p>
    </div>
</div>
</div>
<!-- Navigation end-->
<!-- Section start -->
<div id="design">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-12 design-left">
                <h4>{{isset($category->name)?$category->name.'项目':''}}</h4>
                <h3>Design team</h3>
            </div>
            <div class="col-lg-auto d-none d-lg-block"></div>
            <div class="col-lg-9 col-md-12 design-right">
                <div class="float-lg-right">
                    <ul class="nav nav-tabs">
                        @for($i=1;$i<=$productTabNum;$i++)
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-{{$i}}" >VIEW ALL</a>
                        </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content py-3">
            @for($i=1;$i<=$productTabNum;$i++)
                @if($i ==1)
                    <div id="tab-{{$i}}" class="tab-pane active" role="tabpanel">
                @else
                     <div id="tab-{{$i}}" class="tab-pane" role="tabpanel">
                 @endif

                <div class="row design-img">
                    @foreach(array_slice(array_slice($product->all(),($i-1)*7,7),0,3) as $v)
                    <div class="col-lg-4 col-md-12">
                        <a href='{{url("home/product/{$v->id}/show")}}'>
                        <div class="design-img-col">
                            <img src='{{asset("uploads/$v->pic")}}' alt="">
                            <h3 class="design-img-left-text">{{$v->title}}</h3>
                            <div class="design-img-out">
                                <div>
                                    <img src="{{asset('style/home')}}/images/icon.png" alt="">
                                    <h4>
                                        {{$v->title}}
                                    </h4>
                                    <h5>
                                        {{$v->category->name}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="row design-img">
                    @foreach(array_slice(array_slice($product->all(),($i-1)*7,7),3,1) as $v)
                    <div class="col-lg-4 col-md-12">
                        <a href='{{url("home/product/{$v->id}/show")}}'>
                        <div class="design-img-col ">
                            <img src='{{asset("uploads/$v->pic")}}' alt="">
                            <h3 class="design-img-left-text"> {{$v->title}}</h3>
                            <div class="design-img-out design-img-col4">
                                <div>
                                    <img src="{{asset('style/home')}}/images/icon.png" alt="">
                                    <h4>
                                        {{$v->title}}
                                    </h4>
                                    <h5>
                                        {{$v->category->name}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            @foreach(array_slice(array_slice($product->all(),($i-1)*7,7),4,1) as $v)
                            <div class="col-lg-12 col-md-12 design-img-col2">
                                <a href='{{url("home/product/{$v->id}/show")}}'>
                                    <div class="design-img-col">
                                        <img src='{{asset("uploads/$v->pic")}}' alt="">
                                        <h3 class="design-img-left-text">  {{$v->title}}</h3>
                                        <div class="design-img-out design-img-col8">
                                            <div>
                                                <img src="{{asset('style/home')}}/images/icon.png" alt="">
                                                <h4>
                                                    {{$v->title}}
                                                </h4>
                                                <h5>
                                                    {{$v->category->name}}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            @foreach(array_slice(array_slice($product->all(),($i-1)*7,7),5,2) as $v)
                                <div class="col-lg-6 col-md-12">
                                    <a href='{{url("home/product/{$v->id}/show")}}'>
                                        <div class="design-img-col">
                                            <img src='{{asset("uploads/$v->pic")}}' alt="">
                                            <h3 class="design-img-left-text">{{$v->title}}</h3>
                                            <div class="design-img-out">
                                                <div>
                                                    <img src="{{asset('style/home')}}/images/icon.png" alt="">
                                                    <h4>
                                                        {{$v->title}}
                                                    </h4>
                                                    <h5>
                                                        {{$v->category->name}}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
<!-- Section end -->
@include('home.footer')
