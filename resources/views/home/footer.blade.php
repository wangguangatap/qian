
<div id="contact">
    <div class="container-fluid contact-warpper">
        <div class="container-fluid contact-section">
            <div class="row contact-row">
                <div clss="col-lg-5 col-md-12">
                    <h3>Request a quick quote</h3>
                    <form method="post" action="{{url('home/offer/add')}}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="Name*" name="name">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" placeholder="email*" name="email">
                        </div>
                        <div class="form-group ">
                            <input class="form-control form-control-lg" type="phone" placeholder="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" cols="10" rows="6" name="message">Message</textarea>
                        </div>
                        <button type="submit" class="btn btn-more">Submit</button>
                    </form>
                </div>
                <div class="col-lg-2 col-md-12 b-none b-lg-block"></div>
                <div class="col-lg-5 col-md-12 contact-info">
                    <h1>{{$baseCompanyName}} </h1>
                    <div class="contact-info-text"><span class="contact-info-icon"></span><span>QUE  INTRODUCTION</span></div>
                    <div><span class="contact-info-icon"></span><span>{{$baseCompanyAddr}}</span></div>
                    <div><span class="contact-info-icon"></span><span>{{$baseCompanyEmail}}</span></div>
                    <div><span class="contact-info-icon"></span><span>{{$baseCompanyTel}}</span></div>
                    <div class="contact-weixin">
                        <img src="{{asset('style/home')}}/images/weixin.png" alt="weixin" class="float-left">
                        <img src="{{asset('style/home')}}/images/weixin1.png" alt="weixin" class="float-left">
                    </div>
                </div>
            </div>
            <div class="row contact-footer">
                <div class="col-md-12 text-center">
                   {{$baseCompanyNum}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us end-->

<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('style/home')}}/js/popper.min.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('style/home')}}/js/main.js"></script>
</body>
</html>
