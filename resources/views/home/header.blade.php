<body data-spy="scroll" data-target="#navbarResponsive">
<!-- Home start -->
<div id="home">
    <!-- Navigation start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-navbar">
        <a class="navbar-brand" href="#"><img src="{{asset('style/home')}}/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" id="navMenu">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('home')}}"><span id="homeClick">Home</span> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('home/category/index')}}"><span id="designClick">Design</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('home/article')}}"><span id="serviceClick">Service</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('home/about')}}"><span id="aboutClick">About Us</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('home/contact')}}"><span id="contactClick">Contact Us</span></a>
                </li>
                <li class="nav-item d-none d-lg-block" data-toggle="modal" data-target="#searchModal">
                    <span class="oi oi-magnifying-glass"></span>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navigation end-->
    <div class="modal fade" id="searchModal">
        <div class="modal-dialog" style="position:fixed;top:40%;left:50%;transform:translate(-50%,-50%);">
            <div class="modal-content">
                <!-- 模态框主体 -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{url('home/search')}}">
                            @csrf
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1" name="searchName">
                                    <option selected  value="0">服务案例</option>
                                    <option value="1">设计案例</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  value="" placeholder="请输入搜索内容....." name="searchContent"/>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <button type="submit" class="btn btn-warning">search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
