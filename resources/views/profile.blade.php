<!DOCTYPE html>
<html>

<head>
<title>Learncloud | Profile</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<!-- ==========ATTACH ALL LINKS=========== -->

<!--=========ATTACH BOOTSTRAP============ -->
<link rel="stylesheet" type="text/css" href="{{ asset('profile/css/bootstrap.css') }}">

<!--========= ATTACH STYLE==============  -->
<link rel="stylesheet" type="text/css" href="{{ asset('profile/css/style.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('profile/css/animate.css') }}">

<!--========= ATTACH OWL SLIDER==============  -->
<link href="{{ asset('profile/css/owl.carousel.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('profile/image/favicon.ico') }}" type="image/x-icon">

<!-- ATTACH FONTAWESOME CSS -->
<link href="{{ asset('profile/font-awesome-4.3.0/css/font-awesome.css') }}" rel="stylesheet" type="text/css">

<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    {!! Html::style('js/sweetalert.css') !!}
<script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: "552495898269767"
                , status: true, // check login status
                cookie: true, // enable cookies to allow the server to access the session
                xfbml: false, // parse XFBML
                perms: 'read_stream'
                , access_token: "USER ACCESS TOkEN"
                , frictionlessRequests: true
            });
        };

        // Load the SDK Asynchronously
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/pt_BR/all.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>


<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- ====================================== -->

<!--  attach google analytics -->





</head>

<body>{!! Analytics::render() !!}


@if(Auth::user()->userPoint->points == 0 )
<?php  $points = 0 ?>
@elseif(Auth::user()->userPoint->points == 1000 )
<?php  $points = 5.5 ?>
@elseif(Auth::user()->userPoint->points == 2000 )
<?php  $points = 11 ?>
@elseif(Auth::user()->userPoint->points == 3000 )
<?php  $points = 16.5 ?>
@elseif(Auth::user()->userPoint->points == 4000 )
<?php  $points = 22 ?>
@elseif(Auth::user()->userPoint->points == 5000 )
<?php  $points = 27.5 ?>
@elseif(Auth::user()->userPoint->points == 6000)
<?php  $points = 33 ?>

@elseif(Auth::user()->userPoint->points == 7000 )
<?php  $points = 38.5 ?>
@elseif(Auth::user()->userPoint->points == 8000 )
<?php  $points = 44 ?>
@elseif(Auth::user()->userPoint->points == 9000 )
<?php  $points = 49.5 ?>
@elseif(Auth::user()->userPoint->points == 10000 )
<?php  $points = 60.5 ?>
@elseif(Auth::user()->userPoint->points == 11000 )
<?php  $points = 66 ?>
@elseif(Auth::user()->userPoint->points == 12000)
<?php  $points = 71 ?>

@elseif(Auth::user()->userPoint->points == 13000 )
<?php  $points = 74.1 ?>
@elseif(Auth::user()->userPoint->points == 14000 )
<?php  $points = 78.2 ?>
@elseif(Auth::user()->userPoint->points == 15000 )
<?php  $points = 82.4 ?>
@elseif(Auth::user()->userPoint->points == 16000 )
<?php  $points = 86.5 ?>
@elseif(Auth::user()->userPoint->points == 17000)
<?php  $points = 90.6 ?>
@elseif(Auth::user()->userPoint->points == 18000 )
<?php  $points = 94 ?>
@elseif(Auth::user()->userPoint->points == 19000 )
<?php  $points = 98 ?>
@elseif(Auth::user()->userPoint->points >= 20000 )
<?php  $points = 100 ?>
@endif

                                        <style type="text/css">
                                            .bluebar {
                                                width: {{ $points }}%;
                                            }
                                        </style>

                                         <input type="hidden" value="{{ url('/') }}" id="base_url">


                                        <script>

                                            function FacebookInviteFriends() {
                                                FB.ui({
                                                    method: 'send',
                                                   // link:$("#base_url").val(),
                                                    description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed      eiusmod  .',
                                                    //link:"http//www.nytimes.com/interactive/2015/04/15/travel/europe-favorite-streets.html"
                                                   // message:'lol message',
                                                    link: 'http://www.nytimes.com/interactive/2015/04/15/travel/europe-favorite-streets.html',

                                                });
                                            }
                                        </script>
                                        <section id="top">
                                            <!-- start section top-->

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-4">
                                                        <ul class="list-inline head">
                                                            <li>
                                                                <a href="" class="logo">
                                                                    <img src="{{ asset('profile/image/Shape1.png') }}" width="76px" height="65px" class="img-responsive" alt="learncloud">
                                                                </a>
                                                            </li>
                                                            <li class="space20">
                                                                <a href="" class="logo">
                                                                    <img src="{{ asset('profile/image/Type.png') }}" width="111px" height="26px"  class="img-responsive" alt="learncloud">
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-8">
                                                        <ul class="user pull-right space10">
                                                            <li id="name">
                                                                <a href="#"> 
@if(Auth::check())
@if(Auth::user()->image_name)
<span><img src="{{ Auth::user()->image_name }}" width="40px" height="40px" class="img-responsive img-circle img-user" alt="user_image"></span>
@elseif(Auth::user()->facebook_id != 0)
<span><img src="https://graph.facebook.com/v2.5/{{ Auth::user()->facebook_id }}/picture?type=normal" width="40px" height="40px"  class="img-responsive img-circle img-user" alt="user_image"></span>
@endif
<span class="fsize12 f600 whiteclr user-name">{{ Auth::user()->name }}</span>
<span class="lheight15  droplol"></span>
</a>
                                                            </li>

                                                            <ul class="account-info">
                                                                @if(Auth::user()->email == 'solyooo@yahoo.com')
                                                                <li>
                                                                    <a href="/home/admin">Admin</a>
                                                                </li>
                                                                @endif
                                                                <li>
                                                                    <a href="/">Log Out </a>
                                                                </li>
                                                                @endif;

                                                            </ul>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="space40"></div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="banner-head text-center ">
                                                            <h1 class="f300 whiteclr">
<span class="blueclr "><strong> Your Status : </strong> </span>you should choose one of those
</h1>
                                                            <h5 class="sub-head f300 whiteclr">Pick your favourite success story</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="clearfix"></div>
                                                <div class="space30"></div>


                                                <div class="slider">
                                                    <!-- start slider -->
                                                    <div class="col-md-12 text-center">
                                                        <div id="owl-demo" class="owl-carousel owl-theme">


                                                            <div class="item">
                                                                <a href="" class="image">
                                                                    <img src="{{ asset('profile/image/elon-musk2.png') }}"  width="165px" height="165px" >
                                                                    <input type="hidden" value="Elon.jpg">

                                                                </a>
                                                                <div class="mask">
                                                                    <img src="{{ asset('profile/image/Checkmark-50.png') }}" width="165px" height="165px" class="mautomargin img-responsive" alt="learncloud" >
                                                                </div>
                                                                <div class="name">
                                                                    <h4 class="f600 mbtm0 blueclr ">Elon Musk</h4>
                                                                    <h5 class="whiteclr mtop0">CEO of Tesla Motors</h5>
                                                                </div>
                                                            </div>


                                                            <div class="item">
                                                                <a href="" class="image">
                                                                    <img src="{{ asset('profile/image/stevegobs1.png') }}"  width="165px" height="165px" >
                                                                    <input type="hidden" value="Jobs.jpg">

                                                                </a>
                                                                <div class="mask">
                                                                    <img src="{{ asset('profile/image/Checkmark-50.png') }}" width="165px" height="165px" class="mautomargin img-responsive" alt="learncloud" >
                                                                </div>
                                                                <div class="name">
                                                                    <h4 class="f600 mbtm0 blueclr ">Steve Jobs</h4>
                                                                    <h5 class="whiteclr mtop0">Apple Co-Founder</h5>
                                                                </div>
                                                            </div>



                                                            <div class="item">
                                                                <a href="" class="image">
                                                                    <img src="{{ asset('profile/image/bill-gates.png') }}"  width="165px" height="165px" >
                                                                    <input type="hidden" value="Bill.jpg">
                                                                </a>
                                                                <div class="mask">
                                                                    <img src="{{ asset('profile/image/Checkmark-50.png') }}" width="165px" height="165px" class="mautomargin img-responsive" alt="learncloud" >
                                                                </div>
                                                                <div class="name">
                                                                    <h4 class="f600 mbtm0 blueclr ">Bill Gates</h4>
                                                                    <h5 class="whiteclr mtop0">Microsoft Founder</h5>
                                                                </div>
                                                            </div>


                                                            <div class="item">
                                                                <a href="" class="image">
                                                                    <img src="{{ asset('profile/image/larry-page.png') }}"  width="165px" height="165px" >
                                                                    <input type="hidden" value="Page.jpg">
                                                                </a>
                                                                <div class="mask">
                                                                    <img src="{{ asset('profile/image/Checkmark-50.png') }}" width="165px" height="165px" class="mautomargin img-responsive" alt="learncloud" >
                                                                </div>
                                                                <div class="name">
                                                                    <h4 class="f600 mbtm0 blueclr ">Lary Page</h4>
                                                                    <h5 class="whiteclr mtop0">Google Co-Founder</h5>
                                                                </div>
                                                            </div>


                                                            <div class="item">
                                                                <a href="" class="image">
                                                                    <img src="{{ asset('profile/image/mark-zuckerberg.png') }}"  width="165px" height="165px" >
                                                                    <input type="hidden" value="Mark.jpg">
                                                                </a>
                                                                <div class="mask">
                                                                    <img src="{{ asset('profile/image/Checkmark-50.png') }}" width="165px" height="165px" class="mautomargin img-responsive" alt="learncloud" >
                                                                </div>
                                                                <div class="name">
                                                                    <h4 class="f600 mbtm0 blueclr ">Mark Zuckerburg</h4>
                                                                    <h5 class="whiteclr mtop0">Facebook CEO</h5>
                                                                </div>
                                                            </div>

                                                            <div class="item">
                                                                <a href="" class="image">
                                                                    <img src="{{ asset('profile/image/smile-sergey-brin-wallpapers.png') }}"  width="165px" height="165px" >
                                                                    <input type="hidden" value="Brin.jpg">
                                                                </a>
                                                                <div class="mask">
                                                                    <img src="{{ asset('profile/image/Checkmark-50.png') }}" width="165px" height="165px" class="mautomargin img-responsive" alt="learncloud" >
                                                                </div>
                                                                <div class="name">
                                                                    <h4 class="f600 mbtm0 blueclr ">Sergey Brin</h4>
                                                                    <h5 class="whiteclr mtop0">Google Co-Founder</h5>
                                                                </div>
                                                            </div>





                                                            <div class="item">
                                                                <a href="" class="image">
                                                                    <img src="{{ asset('profile/image/buffet1.png') }}"  width="165px" height="165px" >
                                                                    <input type="hidden" value="buffet.jpg">
                                                                </a>
                                                                <div class="mask">
                                                                    <img src="{{ asset('profile/image/Checkmark-50.png') }}" width="165px" height="165px" class="mautomargin img-responsive" alt="learncloud" >
                                                                </div>
                                                                <div class="name">
                                                                    <h4 class="f600 mbtm0 blueclr ">Warren Buffett</h4>
                                                                    <h5 class="whiteclr mtop0">Berkshire CEO</h5>
                                                                </div>
                                                            </div>




                                                            <div class="item">
                                                                <a href="" class="image">
                                                                    <img src="{{ asset('profile/image/dell1.png') }}"  width="165px" height="165px" >
                                                                    <input type="hidden" value="dell.jpg">
                                                                </a>
                                                                <div class="mask">
                                                                    <img src="{{ asset('profile/image/Checkmark-50.png') }}" width="165px" height="165px" class="mautomargin img-responsive" alt="learncloud" >
                                                                </div>
                                                                <div class="name">
                                                                    <h4 class="f600 mbtm0 blueclr ">Michael Dell</h4>
                                                                    <h5 class="whiteclr mtop0">Dell Founder</h5>
                                                                </div>
                                                            </div>






                                                            <div class="item">
                                                                <a href="" class="image">
                                                                    <img src="{{ asset('profile/image/jeffbezos1.png') }}"  width="165px" height="165px" >
                                                                    <input type="hidden" value="bezos.jpg">
                                                                </a>
                                                                <div class="mask">
                                                                    <img src="{{ asset('profile/image/Checkmark-50.png') }}" width="165px" height="165px" class="mautomargin img-responsive" alt="learncloud" >
                                                                </div>
                                                                <div class="name">
                                                                    <h4 class="f600 mbtm0 blueclr ">Jeff Bezos</h4>
                                                                    <h5 class="whiteclr mtop0">Amazon Founder</h5>
                                                                </div>
                                                            </div>





                                                            <div class="item">
                                                                <a href="" class="image">
                                                                    <img src="{{ asset('profile/image/uber1.png') }}"  width="165px" height="165px" >
                                                                    <input type="hidden" value="uber.jpg">
                                                                </a>
                                                                <div class="mask">
                                                                    <img src="{{ asset('profile/image/Checkmark-50.png') }}" width="165px" height="165px" class="mautomargin img-responsive" alt="learncloud" >
                                                                </div>
                                                                <div class="name">
                                                                    <h4 class="f600 mbtm0 blueclr ">Travis Kalanick</h4>
                                                                    <h5 class="whiteclr mtop0">Uber Co-Founder</h5>
                                                                </div>
                                                            </div>





                                                            <div class="item">
                                                                <a href="" class="image">
                                                                    <img src="{{ asset('profile/image/larryelison1.png') }}"  width="165px" height="165px" >
                                                                    <input type="hidden" value="elisson.jpg">
                                                                </a>
                                                                <div class="mask">
                                                                    <img src="{{ asset('profile/image/Checkmark-50.png') }}" width="165px" height="165px" class="mautomargin img-responsive" alt="learncloud" >
                                                                </div>
                                                                <div class="name">
                                                                    <h4 class="f600 mbtm0 blueclr ">Larry Ellison</h4>
                                                                    <h5 class="whiteclr mtop0">Oracle Founder</h5>
                                                                </div>
                                                            </div>



                                                        </div>

                                                        <div id="people-detail" class="hide">
                                                            <!-- start people detail -->
                                                            <div class="col-md-12">
                                                                <div class="status text-center">
                                                                    <!-- start status -->
                                                                    <h2 class="f300 whiteclr" id="foundertagline">
                                                "I will be the next <span class="blueclr f600">Steve Jobs"</span> 
                                                </h2>
                                                                </div>
                                                                <!-- end status -->
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="social text-center">
                                                                    <h6 class="whiteclr f600">SHARE IT WITH YOUR FRIENDS</h6>
                                                                </div>
                                                            </div>
                                                            <!-- end people-detail -->
                                                        </div>
                                                    </div>
                                                    <!-- end slider -->
                                                </div>
                                        </section>
                                        <!-- start section top-->


                                        <div class="space60"></div>

                                        <section id="service">
                                            <!-- start service -->
                                            <div class="container">
                                                <img src="{{ asset('profile/image/Line-Chart-50.gif') }}" class="mautomargin img-responsive" width="42px" height="42px" alt="learncloud">

                                                <div class="head text-center">
                                                    <h1 class="f300  darkgrey fsize30">
Why 500,000</span> user has created an account on <span class="blueclr">LearnCloud</span><br>
<span class="fsize20">and why should you?</span>
</h1>
                                                </div>
                                                <div class="space50"></div>

                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="service-box mtop20">
                                                            <!-- start service -->
                                                            <img src="{{ asset('profile/image/Statistics-100.png') }}" class="img-responsive mautomargin" width="88px" height="84px" alt="learncloud">


                                                            <div class="service-content text-center space30">
                                                                <!-- start service content -->
                                                                <p class="darkgrey fsize20 mtop20">{!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->profileone : 'lol' !!}</p>
                                                            </div>
                                                            <!-- start service content -->
                                                        </div>
                                                        <!-- end service-box -->
                                                    </div>

                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="service-box mtop20">
                                                            <!-- start service -->
                                                            <img src="{{ asset('profile/image/Watch-100.png') }}" class="img-responsive mautomargin" width="80px" height="80px" alt="learncloud">


                                                            <div class="service-content text-center space30">
                                                                <!-- start service content -->
                                                                <p class="darkgrey fsize20 mtop20">{!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->profiletwo : 'lol' !!}</p>
                                                            </div>
                                                            <!-- start service content -->
                                                        </div>
                                                        <!-- end service-box -->
                                                    </div>

                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="service-box ">
                                                            <!-- start service -->
                                                            <img src="{{ asset('profile/image/Rating-100.png') }}" class="img-responsive mautomargin" width="88px" height="88px" alt="learncloud">


                                                            <div class="service-content text-center space30">
                                                                <!-- start service content -->
                                                                <p class="darkgrey fsize20 mtop20">{!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->profilethree : 'lol' !!}</p>
                                                            </div>
                                                            <!-- start service content -->
                                                        </div>
                                                        <!-- end service-box -->
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- end service sec...-->

                                        <div class="space40"></div>


                                        <section id="counter" class="text-center">
                                            <!-- start counter sec.. -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4 class="whiteclr notethree">Time Is Running Out  <span class="blueclr fsize22">3 Days Only </span> To Get your Account After That Learncloud Will Be Closed For You.</h4>
                                                    </div>
                                                </div>

                                                <div class="space20"></div>

                                                <div class="row whiteclr">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-2 col-xs-3">
                                                        <div class="day">
                                                            <h1 class="f300 m0 fsize80"><span class="num" id="days">  </span></h1>
                                                            <h2 class="f300 m0"> <span class="fsize18">Days</span></h2>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-xs-3">
                                                        <div class="hour">
                                                            <h1 class="f300 m0 fsize80"><span class="num" id="hours">  </span></h1>
                                                            <h2 class="f300 m0"> <span class="fsize18">Hours</span></h2>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-xs-3">
                                                        <div class="minute">
                                                            <h1 class="f300 m0 fsize80"><span class="num" id="minutes">  </span></h1>
                                                            <h2 class="f300 m0"> <span class="fsize18">Minutes</span></h2>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-xs-3">
                                                        <div class="SECOND">
                                                            <h1 class="f300 m0 fsize80"><span class="num" id="seconds">  </span></h1>
                                                            <h2 class="f300 m0"> <span class="fsize18">Seconds</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                </div>

                                                <div class="space40"></div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4 class="whiteclr uppercase"></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- end counter sec... -->

                                        <div class="space70"></div>

                                        <section id="advertise">
                                            <!-- start advertise sec...-->
                                            <div class="container">
                                                <img src="{{ asset('profile/image/Advertising-50.png') }}" class="mautomargin img-responsive" width="42px" height="34px" alt="learncloud">
                                                <div class="space50"></div>


                                                <div class="head text-center">
                                                    <h1 class="f300  darkgrey fsize30">
Collect points to get your account<br>
& <br>
Earn credit</span>
</h1>
                                                </div>
                                                <div class="space50"></div>


    <div class="row">
        <div class="col-md-7">
            <div class="point-table">
                <div>
                    <table class="table">
                        <tr>
                            <td>
                                <div class="category">
                                    <span><img src="{{ asset('profile/image/Add-User-24.gif') }}" width="22px" height="16px" alt="add"> </span>
                                    <span class="f600"> Invite 1 Student</span>
                                </div>
                            </td>

                            <td>
                                <div class="point">
                                    <span class="f800">Get 1000 Points</span>
                                </div>
                            </td>

                            <td>
                                <div class="invited">
                                    <span class="f600 blueclr">{{ Auth::user()->userPoint->invited_points }} &nbsp; Students Invited</span>
                                </div>
                            </td>
                        </tr>

                        <!-- <div class="space40"></div>	 -->

                        <tr>
                            <td>
                                <div class="category">
                                    <span><img src="{{ asset('profile/image/Add-User-24.gif') }}" width="22px" height="16px" alt="add"> </span>
                                    <span class="f600"> Invite 1 Teacher</span>
                                </div>
                            </td>

                            <td>
                                <div class="point">
                                    <span class="f800">Get 5000 Points</span>
                                </div>
                            </td>

                            <td>
                                <div class="invited">
                                    <span class="f600 blueclr">0 &nbsp; Teachers Invited</span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="category">
                                    <span><i class="fa fa-facebook-official fsize22"></i> </span>
                                    <span class="f600">Connect facebook</span>
                                </div>
                            </td>

                            <td>
                                <div class="point">
                                    <span class="f800">Get 1000 Points</span>
                                </div>
                            </td>

                            <td>
                                <div>

                                    <form id="fshared" name="facebookshared" method="POST" action="/home/facebook/share">
                                         
                                        <input type="hidden" id="ajax" name="ajax" value="ajax">
                                        <button type="submit" id="clicksubmit" class=" invite invite-facebook f600 whiteclr" style="height:100%;background-color:#3B5999;width:100%;"> <i class="fa fa-facebook" style="fontsize:18px;color:white;margin-right:6px;margin-top:3px;"></i> Share</button>
                                        <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">

                                    </form>

                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="category">
                                    <span><i class="fa fa-twitter-square fsize22"></i></span>
                                    <span class="f600">Connect twitter</span>
                                </div>
                            </td>

                            <td>
                                <div class="point">
                                    <span class="f800">Get 1000 Points</span>
                                </div>
                            </td>

                            <td>
                                <div>
                                        <form class="tshared" name="twittershared" method="POST" action="{{ route('twitter.share') }}">
                                       
                                            <button onclick="window.open('https://twitter.com/intent/tweet?text=Hello%20world', '_blank', 'location=yes,scrollbars=yes,status=yes');"
                                              type="submit"  id="clicktweet" class="f600 whiteclr invite invite-twitter" style="height:100%;background-color:#3B5999;width:100%;"> <i class="fa fa-twitter" style="fontsize:18px;color:white;margin-right:6px;margin-top:3px;">
                                            </i> Tweet </button>
                                        <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">
                                       </form>
                                </div>
                            </td>
                        </tr>

                                        <td>
                                            <div class="category">
                                                <span><img src="{{ asset('profile/image/Add-User-24.gif') }}" width="22px" height="16px" alt="add"> </span>
                                                <span class="f600"> Share Your Status</span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="point">
                                                <span class="f800">Get 1000 Points</span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="invite">
                                                <a class="invitetwo" data-scroll data-options='{ "speed": 3500, "updateURL": false }' href="#top"><span class="f600 whiteclr">Choose & Share</span></a>
                                            </div>

                                        </td>

                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-5">
                            <div class="invitation text-center">
                                <h2 class="darkgrey head">Better & faster invitation</h2> 
                                @if(Agent::isDesktop())
                                <h4 class="sub-head f300 lht">Here you can easily invite your Facebook friends just write your message & tag them .</h4>
                                <div class="space20"></div>

                                <button class="invitebtn sendmessenger" onclick="FacebookInviteFriends();">
                                    <i class="fa fa-facebook" style="font-size:18px;color:white;margin-right:6px;"></i> Send To Facebook
                                </button>
                                @else
<!--                                                                             <a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share">Share via Whatsapp</a>
-->
                                <h4 class="sub-head f300 lht">Here you can easily invite your Whatsapp friends just click send & tag them .</h4>
                                <div class="space20"></div>

                                <a href="whatsapp://send?text=I Wanna Achieve Success SO I Need You To Support Me On {{ url('/') }} " data-action="share/whatsapp/share" class="invitebtn invite-whatsapp">
                                    <i class="fa fa-whatsapp" style="font-size:18px;color:white;margin-right:6px;"></i> Send To Whatsapp
                                </a>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="space30"></div>

                    <div class="share">
                        <!-- start share -->
                        <div class="row">
                            <div class="col-md-1"></div>

                            <div class="col-md-4 col-sm-5">
                                <span class="darkgrey fsize16 f600">Share your referral code with your friends
on social media</span>
                                <div class="input-group ">
                                    <!-- <a href="" class="pro whiteclr backblue">Provider<i class="fa fa-angle-down"></i></a> -->
                                    <input type="text" class="form-control" id="copyTarget"  value="{{ URL::to('/') }}/{{Auth::id()}}/{{Auth::user()->referral_code}}" style="  height: 45px;">
                                    <span class="input-group-btn fsize16"  id="copyButton">
<!-- <button class="btn backgrey greyclr" type="button"><i class="fa fa-search"></i></button> -->
COPY
</span>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-2 space30">
                                <img src="{{ asset('profile/image/OR.gif') }}"  width="128px" height="68px" class="img-responsive mautomargin" alt="learncloud" >
                            </div>


                            <div class="col-md-4 col-sm-5">
                                <span class="darkgrey fsize16 f600">Invite by mail</span>
                                <div class="input-group space20">

                         <form method="post" id="sendform" action="{{ url('/sendmail') }}">
                            <input type="text" name="email" class="form-control" id="emailfield" placeholder="Type Your Friend's Mail" style="                                                                                     height: 45px;">
                        </form>
                                    <span class="input-group-btn fsize16">
                   <button class="greyclr" form="sendform" type="submit" id="sendemail">
                   <img src="{{ asset('profile/image/Sent-241.png') }}" width="20px" height="18px" alt="learncloud"></button>                         
                                     </span>
                                </div>
                            </div>
                        </div>

                        <div class="space80"></div>

                        <div class="conatiner">
                            <div class="row ">
                                <div class="col-md-6 space100">
                                    <div class="process-graph space20">

                                        <span class="amo tooltip-inner ">YOU'RE HERE </br>
{{ Auth::user()->userPoint->points }} POINTS</span>
                                        <div class="dotted-line">
                                            <!-- <img src="image/Shape-2-copy.png" class="img-responsive"> -->
                                            <div class="bluebar">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="trophy">
                                                <div class="col-md-3 col-sm-2 col-xs-3 process-box mautomargin"></div>

                                                <div class="col-md-3 col-sm-3 col-xs-3 process-box ">
                                                    <div class="text-center">
                                                        <img src="{{ asset('profile/image/trophy-1005.png') }}" width="66px" height="66px" alt="trofy" class="img-responsive mautomargin">
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-3 col-xs-3 process-box ">
                                                    <div class="text-center">
                                                        <img src="{{ asset('profile/image/trophy-1006.png') }}"  width="66px" height="66px" alt="trofy" class="img-responsive mautomargin">
                                                    </div>
                                                </div>

                                                <div class="col-md-3 col-sm-3 col-xs-3 process-box">
                                                    <div class="text-center  f600">
                                                        <img src="{{ asset('profile/image/trophy-1007.png') }}"  width="66px" height="66px" alt="trofy" class="img-responsive mautomargin">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 space30">
                                    <div class="user-point-box">
                                        <!-- start user point box -->
                                        <h5 class="head fsize16 mtop0 padtop20">
<span class="f600 fsize22">750,000 </span> ahead of you including Elon musk, Mark Zuckerburg  and other<br> great people.
</h5>


                                        <div class="row">


                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <div class="points text-center">
                                                    <!--start points -->
                                                    <img src="{{ asset('profile/image/elon-musk3.png') }}" width="100px" height="100px"   class="img-responsive mautomargin img-circle" alt="learncloud">

                                                    <div class="space10"></div>

                                                    <img src="{{ asset('profile/image/trophy-100-copy.png') }}" class="img-responsive mautomargin trophy1" width="20px" height="19px"  alt="learncloud">

                                                    <h5 class="blueclr f600">
Elon Musk<br>
39000 Points
</h5>
                                                </div>
                                                <!-- end points -->
                                            </div>


                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <div class="points text-center">
                                                    <!--start points -->
                                                    <img src="{{ asset('profile/image/mark-zuckerberg2.png') }}" width="100px" height="100px"  class="img-responsive mautomargin img-circle" alt="learncloud">

                                                    <div class="space10"></div>

                                                    <img src="{{ asset('profile/image/trophy-100-copy.png') }}" width="20px" height="19px"   class="img-responsive mautomargin trophy1" alt="learncloud">

                                                    <h5 class="blueclr f600">
M.Zuckerberg<br>
35000 Points
</h5>
                                                </div>
                                                <!-- end points -->
                                            </div>

                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <div class="points text-center">
                                                    <!--start points -->
                                                    <img src="{{ asset('profile/image/eliza.png') }}" width="100px" height="100px"  class="img-responsive mautomargin img-circle" alt="learncloud">

                                                    <div class="space10"></div>

                                                    <img src="{{ asset('profile/image/trophy-100-copy.png') }}" width="20px" height="19px"   class="img-responsive mautomargin trophy1" alt="learncloud">

                                                    <h5 class="blueclr f600">
E.Holmes<br>
33000 Points
</h5>
                                                </div>
                                                <!-- end points -->
                                            </div>

                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <div class="points text-center">
                                                    <!--start points -->
                                                    <img src="{{ asset('profile/image/jerry.png') }}" width="100px" height="100px"  class="img-responsive mautomargin img-circle" alt="learncloud">

                                                    <div class="space10"></div>

                                                    <img src="{{ asset('profile/image/trophy-100-copy.png') }}" width="20px" height="19px"   class="img-responsive mautomargin trophy1" alt="learncloud">

                                                    <h5 class="blueclr f600">
Jerry Banfield<br>
29000 Points
</h5>
                                                </div>
                                                <!-- end points -->
                                            </div>

                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <div class="points text-center">
                                                    <!--start points -->
                                                    <img src="{{ asset('profile/image/soly2.png') }}" width="100px" height="100px"  class="img-responsive mautomargin img-circle" alt="learncloud">

                                                    <div class="space10"></div>

                                                    <img src="{{ asset('profile/image/trophy-100-copy.png') }}" width="20px" height="19px"   class="img-responsive mautomargin trophy1" alt="learncloud">

                                                    <h5 class="blueclr f600">
Soliman Majmoud<br>
45000 Points
</h5>
                                                </div>
                                                <!-- end points -->
                                            </div>



                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <div class="points text-center">
                                                    <!--start points -->
                                                    <img src="{{ asset('profile/image/bre.png') }}" width="100px" height="100px"  class="img-responsive mautomargin img-circle" alt="learncloud">

                                                    <div class="space10"></div>

                                                    <img src="{{ asset('profile/image/trophy-100-copy.png') }}" width="20px" height="19px"   class="img-responsive mautomargin trophy1" alt="learncloud">

                                                    <h5 class="blueclr f600">

Bree Turner<br>
28000 Points
</h5>
                                                </div>
                                                <!-- end points -->
                                            </div>

                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <div class="points text-center">
                                                    <!--start points -->
                                                    <img src="{{ asset('profile/image/kelly.png') }}" width="100px" height="100px"  class="img-responsive mautomargin img-circle" alt="learncloud">

                                                    <div class="space10"></div>

                                                    <img src="{{ asset('profile/image/trophy-100-copy.png') }}" width="20px" height="19px"   class="img-responsive mautomargin trophy1" alt="learncloud">

                                                    <h5 class="blueclr f600">
kelly Gray<br>
25000 Points
</h5>
                                                </div>
                                                <!-- end points -->
                                            </div>

                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <div class="points text-center">
                                                    <!--start points -->
                                                    <img src="{{ asset('profile/image/tony.png') }}" width="100px" height="100px"  class="img-responsive mautomargin img-circle" alt="learncloud">

                                                    <div class="space10"></div>

                                                    <img src="{{ asset('profile/image/trophy-100-copy.png') }}" width="20px" height="19px"   class="img-responsive mautomargin trophy1" alt="learncloud">

                                                    <h5 class="blueclr f600">
Tony Hsieh<br>
22000 Points
</h5>
                                                </div>
                                                <!-- end points -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end user point box -->
                                </div>
                            </div>
                            <div class="space60"></div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="buy text-center">
                                        <h3 class=" blackclr f300">

        @if( Auth::user()->userPoint->points < 6000)
        Now you have {{ Auth::user()->userPoint->points }} points and <span class="blueclr f600">{{ Auth::user()->userPoint->points/200 }} $ credit</span> but you can't get an account
        Invite more friends or buy an account <span class="blueclr f600">1000 point = </span><span class="blueclr f600"> 5$</span>.

        @elseif( Auth::user()->userPoint->points >= 6000 &&  Auth::user()->userPoint->points < 12000)
        <span class="blueclr f600"> CONGRATS : </span> Now you have <span class="blueclr f600"> {{ Auth::user()->userPoint->points/200 }} $ credit</span> and Bronze account we will call you when we reach 5 million user and start LearnCloud oficially .
        Invite more friends or buy more points to earn more credit <span class="blueclr f600">1000 point</span><span class="blueclr f600"> = 5$</span>.

        @elseif( Auth::user()->userPoint->points >= 12000 &&  Auth::user()->userPoint->points < 20000)
        <span class="blueclr f600"> CONGRATS : </span> Now you have<span class="blueclr f600"> {{ Auth::user()->userPoint->points/200 }} $ credit</span> and Silver account we will call you when we reach 5 million user and start LearnCloud oficially .
        Invite more friends or buy more points to earn more credit <span class="blueclr f600">1000 point</span><span class="blueclr f600"> = 5$</span>.

        @elseif( Auth::user()->userPoint->points >= 20000 )
        <span class="blueclr f600"> CONGRATS : </span> Now you have <span class="blueclr f600">{{ Auth::user()->userPoint->points/200 }} $ credit</span> and Gold account we will call you when we reach 5 million user and start LearnCloud oficially .
        Invite more friends or buy more points to earn more credit <span class="blueclr f600">1000 point</span><span class="blueclr f600"> = 5$</span>.

        @endif





    </h3>
                                                                                    <br>
                                                                                    <br>

                                                                                    <a class="buybtn space10" style="color:white;" href="{{ route('buypoints') }}">
        BUY MORE POINTS</a>



                                                                                    <div class="space20"></div>


                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-xs-8 col-xs-offset-3 col-sm-offset-5 col-md-offset-5">
                                                                                <div class="paypal text-center">
                                                                                    <span><img src="{{ asset('profile/image/Paypal-24.png') }}" width="18px" height="18px"   class="space10" alt="paypal"></span>
                                                                                    <span class="lheight15 text-left">Pay with PayPal<br>
        Money back guaraantee</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end share -->
                                                            </div>
                                                        </section>
                                                        <!-- end advertise sec..-->

                                                        <div class="space70"></div>


                                                        <section id="price">
                                                            <!-- start price  sec..-->
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-4 pad0 space20">
                                                                        <div class="price-table bronz">
                                                                            <!-- start price table -->
                                                                            <div class="text-center">
                                                                                <div class="plan-name whiteclr">
                                                                                    <h2 class="f800 m0">BRONZE</h2>
                                                                                </div>
                                                                        @if(((( 6 - (Auth::user()->userPoint->points /1000)) * 5))>0)
                                                                                <?php $bronze = ((( 6 - (Auth::user()->userPoint->points /1000)) * 5)) ; ?>
                                                                                    @else
                                                                                 <?php $bronze = 0; ?>
                                                                        @endif


                                                                                        <div class="plan-price">
                                                                                            <h3 class="m0"><span class="fsize30 f800">{{ $bronze }} $</span><span class="fsize18"></span></h3>
                                                                                        </div>

                                                                                        <div class="space30"></div>

                                                                                        <div class="plan-list">
                                                                                            <ul>
                                                                                                <li>30$ Credit</li>
                                                                                                <li>Access To Influencers</li>
                                                                                                <li>Free Lifetime Access</li>
                                                                                                <li>Unlimited Access To Our Videos </li>
                                                                                                <li>Unlimited Access To Our Books</li>
                                                                                                <li>Personal Way To Success</li>
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="price-btn space30">
                                                                                            <a href="{{ route('buypoints') }}" class="btn">CHOOSE</a>
                                                                                        </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end pricetable -->
                                                                    </div>

                                                                    <div class="col-md-4 pad0 space20">
                                                                        <div class="price-table gold">
                                                                            <!-- start price table -->
                                                                            <div class="text-center">
                                                                                <div class="plan-name whiteclr">
                                                                                    <h2 class="f800 m0">GOLD</h2>
                                                                                </div>
                                                                                @if(((( 20 - (Auth::user()->userPoint->points /1000)) * 5))>0)
                                                                                <?php $gold = ((( 20 - (Auth::user()->userPoint->points /1000)) * 5)) ; ?>
                                                                                    @else
                                                                                    <?php $gold = 0; ?>
                                                                                        @endif


                                                                                        <div class="plan-price">
                                                                                            <h3 class="m0"><span class="fsize30 f800">{{ $gold }} $</span><span class="fsize18"></span></h3>
                                                                                        </div>

                                                                                        <div class="space20"></div>

                                                                                        <div class="plan-list">
                                                                                            <ul>
                                                                                                <li>100$ Credit</li>
                                                                                                <li>Access To Influencers</li>
                                                                                                <li>Free Lifetime Access</li>
                                                                                                <li>Unlimited Access To Our Videos </li>
                                                                                                <li>Unlimited Access To Our Books</li>
                                                                                                <li>Personal Way To Success</li>
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="price-btn space30">
                                                                                            <a href="{{ route('buypoints') }}" class="btn">CHOOSE</a>
                                                                                        </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end pricetable -->
                                                                    </div>

                                                                    <div class="col-md-4 pad0 space20">
                                                                        <div class="price-table silver">
                                                                            <!-- start price table -->
                                                                            <div class="text-center">
                                                                                <div class="plan-name whiteclr">
                                                                                    <h2 class="f800 m0">SILVER</h2>
                                                                                </div>
                                                                                @if(((( 12 - (Auth::user()->userPoint->points /1000)) * 5))>0)
                                                                                <?php $silver = ((( 12 - (Auth::user()->userPoint->points /1000)) * 5)) ; ?>
                                                                                    @else
                                                                                    <?php $silver = 0; ?>
                                                                                        @endif

                                                                                        <div class="plan-price">
                                                                                            <h3 class="m0"><span class="fsize30 f800">{{ $silver }} $</span><span class="fsize18"></span></h3>
                                                                                        </div>

                                                                                        <div class="space30"></div>

                                                                                        <div class="plan-list">
                                                                                            <ul>
                                                                                                <li>60$ Credit</li>
                                                                                                <li>Access To Influencers</li>
                                                                                                <li>Free Lifetime Access</li>
                                                                                                <li>Unlimited Access To Our Videos </li>
                                                                                                <li>Unlimited Access To Our Books</li>
                                                                                                <li>Personal Way To Success</li>
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="price-btn space30">
                                                                                            <a href="{{ route('buypoints') }}" class="btn">CHOOSE</a>
                                                                                        </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end pricetable -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <!-- end price  sec..-->

                                                        <div class="space100"></div>


                                                        <section id="center">
                                                            <!-- start section center-->

                                                        </section>
                                                        <!-- end section center-->


                                                        <section id="bottom">
                                                            <!-- start bootom sec.... -->
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-1"></div>

                                                                    <div class="col-md-6 col-sm-12 ">
                                                                        <div class="top-content space80">{!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->profilefour : 'lol' !!}
                                                                           
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-5 col-sm-12 padright0 space50">
                                                                        <div class="topimg pull-right">
                                                                            <img src="{{ asset('profile/image/Layer-21.png') }}" class="img-responsive" width="668px" height="452px" alt="learncloud">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <!-- end bootm sec/... -->

                                                        <!-- setion loading -->

                                                        <section class="loading">
                                                            <div class="sk-folding-cube">
                                                                <div class="sk-cube1 sk-cube"></div>
                                                                <div class="sk-cube2 sk-cube"></div>
                                                                <div class="sk-cube4 sk-cube"></div>
                                                                <div class="sk-cube3 sk-cube"></div>
                                                            </div>
                                                        </section>

                                                        <!-- end section loading -->


                                                        <input type="hidden" id="image_uri" name="image_uri" value="{{ asset('images/facebook.png') }}">
                                                        <input type="hidden" id="base_uris" name="base_uri" value="{{ url('/') }}">

                                                        <!-- ATTACH BOOTSTRAP JS========= -->
                                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
                                                        <script src="http://malsup.github.com/jquery.form.js"></script>


                                                        <script type="text/javascript" src="{{ asset('profile/js/bootstrap.js') }}"></script>
                                                        <script src="{{ asset('profile/js/owl.carousel.min.js') }}"></script>
                                                        <script src="{{ asset('profile/js/viewportchecker.js') }}"></script>
                                                        <script src="{{ asset('profile/js/custom.js') }}"></script>
                                                        <script src="{{ asset('profile/js/smooth-scroll.min.js') }}"></script>
                                                        <script src="{{ asset('profile/js/plugins.js') }}"></script>
                                                        {!! Html::script('js/sweetalert.min.js') !!}




                                                        <!-- for page scroll effect script -->
                                                        <script type="text/javascript">
                                                            $(document).ready(function () {
                                                                $('#service').addClass("hideme").viewportChecker({
                                                                    classToAdd: 'visible animated fadeIn'
                                                                    , offset: 100
                                                                });

                                                                $('#counter').addClass("hideme").viewportChecker({
                                                                    classToAdd: 'visible animated fadeIn'
                                                                    , offset: 10
                                                                });

                                                                $('#advertise').addClass("hideme").viewportChecker({
                                                                    classToAdd: 'visible animated fadeIn'
                                                                    , offset: 10
                                                                });

                                                                $('#price').addClass("hideme").viewportChecker({
                                                                    classToAdd: 'visible animated bounceIn  '
                                                                    , offset: 10
                                                                });


                                                                $('.topimg').addClass("hideme").viewportChecker({
                                                                    classToAdd: 'visible animated fadeInLeft '
                                                                    , offset: 10
                                                                });
                                                                $('.top-content').addClass("hideme").viewportChecker({
                                                                    classToAdd: 'visible animated fadeInRight '
                                                                    , offset: 10
                                                                });
                                                            });
                                                        </script>
                                                        <script type="text/javascript">
                                                            $(document).ready(function () {

                                                                var owl = $("#owl-demo");

                                                                owl.owlCarousel({

                                                                    itemsCustom: [
[0, 1]
, [450, 2]
, [600, 2]
, [700, 3]
, [1000, 4]
, [1200, 6]
, [1400, 6],

]
                                                                    , navigation: true, // Show next and prev buttons
                                                                    slideSpeed: 300
                                                                    , paginationSpeed: 400
                                                                    , autoPlay: true,

                                                                    navigationText: [
"<img src='{{ asset('profile/image/Expand-Arrow-50-copy.png') }}'>"
, "<img src='{{ asset('profile/image/Expand-Arrow-50.png') }}'>"
]

                                                                });

                                                            });
                                                        </script>
                                                        <script type="text/javascript">
                                                            /*global $, smoothScroll*/

                                                            $(function () {

                                                                "use strict";

                                                                // Make Div Height Same As Window Height


                                                                // Initialize Smooth Scroll

                                                                smoothScroll.init();

                                                            });
                                                        </script>
                                                        <script type="text/javascript">
                                                            $(document).ready(function () {

                                                                $("#name").click(function () {
                                                                    $(".account-info").slideToggle();
                                                                });




                                                                $(".owl-item .item").click(function () {

                                                                    $(".owl-item .item").each(function () {
                                                                        $(this).find(".mask").removeClass("active");
                                                                    });

                                                                    $(this).find(".mask").addClass("active");

                                                                    var fname = $(this).find(".name h4").text();
                                                                    //alert(fname);

                                                                    $("#foundertagline").find("span").html(fname + ' "');

                                                                    $("#people-detail").addClass("show");


                                                                });



                                                            });
                                                        </script>


                                                        <!-- ATTACH COUNTER JS========= -->
                                                        <script>
                                                            // myFunction();



                                                            var timer;

                                                            var compareDate = new Date();
                                                            compareDate.setDate(compareDate.getDate() + 3); //just for this demo today + 7 days

                                                            timer = setInterval(function () {
                                                                timeBetweenDates(compareDate);
                                                            }, 1000);

                                                            function timeBetweenDates(toDate) {
                                                                var dateEntered = toDate;
                                                                var now = new Date();
                                                                var difference = dateEntered.getTime() - now.getTime();

                                                                if (difference <= 0) {

                                                                    // Timer done
                                                                    clearInterval(timer);

                                                                } else {

                                                                    var seconds = Math.floor(difference / 1000);
                                                                    var minutes = Math.floor(seconds / 60);
                                                                    var hours = Math.floor(minutes / 60);
                                                                    var days = Math.floor(hours / 24);

                                                                    hours %= 24;
                                                                    minutes %= 60;
                                                                    seconds %= 60;

                                                                    $("#days").text(days);
                                                                    $("#hours").text(hours);
                                                                    $("#minutes").text(minutes);
                                                                    $("#seconds").text(seconds);
                                                                }
                                                            }
                                                        </script>

                                                       

                                                        <!-- ajax handling -->
                            <script type="application/javascript">
                                                           
                                     $(document).ready(function () {

                                                                            
                                /* ajaxForm is a function existed in new plugin called  */
                                                /* "http://malsup.github.com/jquery.form.js" */
                                                /* use it while uploading image */
                                $('#fshared').ajaxForm({

                                beforeSend:function() {
                                    
                                   
                                },

                                success:function (data) {

                                   var base_url = $("#base_url").val();

                                    FB.ui({
                                            method: 'feed',
                                            display: 'popup',
                                            mobile_iframe: true,
                                            name: 'Support {{Auth::user()->name}} To Find His Key To Succss On LearnCloud',
                                            link: base_url+'/',
                                            picture: base_url+"/merged_images/store/"+data,
                                            caption: 'LearnCloud',
                                            description: 'LearnCloud is the first artificial intelligence platform that can understand you, guide you,make you succeed in ways you never thought possible. it will ensure that you have full understanding of your craft and you will be on the road to success!',
                                            access_token: 'user access token'
                                        },
                                        function (response) {
                                            if (response && response.post_id) {

                                                // HERE YOU CAN DO WHAT YOU NEED
                                                swal({ 
                                                          title: "Congrats!",
                                                          text: "Now You Have Got 1000 Point. Click Submit To Get Your Award And Please hang on for a while until page loaded... !",
                                                          type: "success", 
                                                          confirmButtonText: "Submit" }, function(inputValue){
                                                          console.log("You wrote", inputValue);
                                                          window.location.reload(); // <--- You need to call this
                                                     });

                                            } else {
                                                sweetAlert("Oops...", "Failed To Share .You Should Share it Again!", "error");
                                            }
                                        }
                                    );

                                                                }

                                });


                                             $('.tshared').ajaxForm({

                                                    beforeSend:function() {
                                                        
                                                       
                                                    },

                                                    success:function (data) {
                                                                               
                                                                  
                                                                }

                                       });

                                                            });
                      </script>


                       <script type="text/javascript">
                          
                    
                    $(document).ready(function () {


                        $('#sendform').submit(function(event) {

                                        event.preventDefault();

                                        var base_url = $('#base_url').val();
                                        var url      = base_url+'/sendmail';
                                        var email     = $('#emailfield').val();

                                        $.ajax({
                                            url: url,
                                            type: 'post',
                                            data:{'email':email},
                                            dataType: "json",

                                            success:function(data) {
                                               
                                               swal("Good job!", "Email Sent Successfuly!", "success")
                                            
                                            },
                                            error:function(error) {
                                              
                                                sweetAlert("Oops...", "Invalid Email Address!", "error");
                                           
                                            }
                                        });

                         });

                 });       


                      </script>
 

</body>

</html>