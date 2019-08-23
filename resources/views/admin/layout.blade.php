<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>千雀后台管理系统v1.0--@yield('title')</title>
    <!-- Bootstrap Styles-->
    <link href="{{asset('style/admin/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('style/admin/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{asset('style/admin/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('style/admin/assets/css/custom-styles.css')}}" rel="stylesheet" />
    <style>
        .loading{
            width:160px;
            height:56px;
            position: absolute;
            top:30%;
            left:50%;
            line-height:56px;
            color:#fff;
            padding-left:60px;
            font-size:15px;
            background: rgba(0, 0, 0, 0.5) no-repeat 10px 50%;
            opacity: 0.7;
            z-index:9999;
            -moz-border-radius:20px;
            -webkit-border-radius:20px;
            border-radius:20px;
            filter:progid:DXImageTransform.Microsoft.Alpha(opacity=70);
        }
    </style>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><i class="fa fa-gear"></i> <strong>千雀管理系统</strong></a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href={{route('manager.edit',['manager'=>session('loginManagerInfo')['id']])}}><i class="fa fa-gear fa-fw"></i> 修改信息</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{url('admin/logout')}}"><i class="fa fa-sign-out fa-fw"></i> 登出</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a href="{{url('admin')}}"><i class="fa fa-dashboard"></i>首页</a>
                </li>
                <li>
                    <a href="{{url('admin/category')}}"><i class="fa fa-desktop"></i>分类管理</a>
                </li>
                <li>
                    <a href="{{url('admin/product')}}"><i class="fa fa-qrcode"></i>产品管理</a>
                </li>
                <li>
                    <a href="{{url('admin/article')}}"><i class="fa fa-bar-chart-o"></i>文章列表</a>
                </li>
                <li>
                    <a href="{{url('admin/about')}}"><i class="fa fa-bar-chart-o"></i>关于我们</a>
                </li>
                <li>
                    <a href="{{url('admin/offer')}}"><i class="fa fa-bar-chart-o"></i>报价咨询</a>
                </li>
                <li>
                    <a href="{{url('admin/contact')}}"><i class="fa fa-bar-chart-o"></i>联系我们留言</a>
                </li>
                <li>
                    <a href="{{url('admin/designer')}}"><i class="fa fa-table"></i>设计师</a>
                </li>
                <li>
                    <a href="{{url('admin/manager')}}"><i class="fa fa-fw fa-file"></i>管理员</a>
                </li>
                <li>
                    <a href="{{url('admin/banner')}}"><i class="fa fa-fw fa-file"></i>轮播器</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i> 配置管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="{{url('admin/config/base')}}">基础配置</a>
                        </li>
                        <li>
                            <a href="{{url('admin/config/site')}}">网站配置</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div id="loading" style="display:none;">
                <div id="loading" class="loading">加载中......</div>
            </div>
            <div id="pjax-container" class="row">
                @yield('content')
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="{{asset('style/admin/assets/js/jquery-1.10.2.js')}}"></script>
<!-- Bootstrap Js -->
<script src="{{asset('style/admin/assets/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Js -->
<script src="{{asset('style/admin/assets/js/jquery.metisMenu.js')}}"></script>
<!-- Morris Chart Js -->
<script src="{{asset('style/admin/assets/js/morris/raphael-2.1.0.min.js')}}"></script>
<script src="{{asset('style/admin/assets/js/morris/morris.js')}}"></script>


<script src="{{asset('style/admin/assets/js/easypiechart.js')}}"></script>
<script src="{{asset('style/admin/assets/js/easypiechart-data.js')}}"></script>

<script src="{{asset('style/admin/assets/js/Lightweight-Chart/jquery.chart.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('style/admin/assets/js/custom-scripts.js')}}"></script>

<script src="{{asset('style/admin/assets/js/jquery-pjax.js')}}"></script>
<script>
    $(document).pjax('a','#pjax-container',{timeout:6000});
    $(document).on('pjax:send',function(){
        $('#loading').show();
    });
    $(document).on('pjax:complete',function(){
        $('#loading').hide();
    });


</script>


</body></html>
