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
    <link rel="stylesheet" href="{{asset('style/home')}}/css/contact.css"/>
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
<!-- Section start -->
<div id="contactus">
    <div class="row">
        <div class="col-lg-12">
            <h5 class="text-center">QUE INTRODUCTION</h5>.
            <h4 class="text-center">We Are Passionate And Always Produce Better Results For Interiors.</h4>
            <form method="post" action="{{url('admin/contact/add')}}">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <input type="text" class="form-control" name="name" placeholder="Name*">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <input type="text" class="form-control" name="email" placeholder="Email*">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <input type="text" class="form-control" name="interested" placeholder="Service you interested in">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <input type="text" class="form-control"name="title" placeholder="Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row desc_footer">
        <div class="col-lg-6 col-md-12">
            <h3>Newyork  Office</h3>
            <p class="d-flex align-items-center">
                <span class="kong"></span><span class="desc_list">{{$baseCompanyAddr}}</span>
            </p>
            <p class="d-flex align-items-center">
                <span class="kong"></span><span class="desc_list">{{$baseCompanyEmail}}</span>
            </p>
            <p class="d-flex align-items-center">
                <span class="kong"></span><span class="desc_list">{{$baseCompanyTel}}</span>
            </p>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="desc_title">
                {{$baseCompanyName}}
            </div>
            <div class="d-flex align-items-center desc_title_list ">
                <span class="kong"></span><span class="desc_list">{{$baseCompanyAddr}}</span>
            </div>
            <div class="desc_img d-flex justify-content-between">
                <img src="{{asset('style/home')}}/images/weixin.png">
                <img src="{{asset('style/home')}}/images/weixin.png">
            </div>
        </div>
    </div>

</div>
<!-- Section end -->

@include('home.footer')
