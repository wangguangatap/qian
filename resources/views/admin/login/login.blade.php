<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('style/admin/login')}}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('style/admin/login')}}/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>千雀后台管理系统</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('style/admin/login')}}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('style/admin/login')}}/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('style/admin/login')}}/css/demo.css" rel="stylesheet" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="" />
    <!--  Social tags      -->
    <meta name="keywords" content="">
    <meta name="description" content="">



</head>

<body class="login-page sidebar-collapse">
<!-- Navbar -->

<!-- End Navbar -->
<div class="page-header" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{asset('style/admin/login')}}/img/login.jpg)"></div>
    <div class="container">
        <div class="col-md-4 content-center">
            @if (session()->has('data'))
                <div class="alert alert-{{session('data')['class']}}">
                    {{session('data')['msg']}}
                </div>
            @endif
        </div>
        <div class="col-md-4 content-center">
            <div class="card card-login card-plain">
                <form class="form" method="post" action="{{url('admin/login/dologin')}}">
                    @csrf
                    <div class="header header-primary text-center">
                        <div class="logo-container">
                            <img src="{{asset('style/admin/login')}}/img/now-logo.png" alt="">
                        </div>
                    </div>
                    <div class="content">
                        <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                            <input type="text" class="form-control" name="username" placeholder="账号">
                        </div>
                        <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                            <input type="password" placeholder="密码" class="form-control" name="password"/>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">登陆</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('style/admin/login')}}/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="{{asset('style/admin/login')}}/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{asset('style/admin/login')}}/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('style/admin/login')}}/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('style/admin/login')}}/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{asset('style/admin/login')}}/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Share Library etc -->
<script src="{{asset('style/admin/login')}}/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('style/admin/login')}}/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>
