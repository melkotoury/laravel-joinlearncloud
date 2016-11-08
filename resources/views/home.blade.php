<!DOCTYPE html>
<html lang="en">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="LearnCloud is the first artificial intelligence platform that can understand you, guide you,make you succeed in ways you never thought possible. it will ensure that you have full understanding of your craft and you will be on the road to success!">
            <meta name="author" content="LearnCloud">   
            <link rel="shortcut icon" href="{{ asset('assets/icon/favicon.ico') }}" type="image/x-icon"> 
  
            <title>LearnCloud</title>
            <!-- Stylesheets -->
            <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/ionicons.min.css') }}" rel="stylesheet">    
            <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/responsiv.css') }}" rel="stylesheet">        
            <!--========= ATTACH OWL SLIDER==============  -->
            <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

            <script>
                   $(document).ready(function() {

                        $("#header").height($(window).height());
                    });
        
            </script>
            
                <!--  attach google analytics -->
            
            
            <!-- Webfonts -->
            <link href='http://fonts.googleapis.com/css?family=Open Sans:500,900italic,900,400italic,700italic,300,700,500italic,300italic,400' rel='stylesheet' type='text/css'>
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        </head>
<body>{!! Analytics::render() !!}
    <!-- header -->
    <section id="header">
        <div class="logo wow fadeIn imglogo" >
        </div>
        <h1 class="wow fadeInLeft jumbotron">{!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->homeone : 'lol' !!}
        </h1>
        <div class="learnmore">
        <a class="btn_trans "  href="#text-Hello-World"> LEARN MORE </a>
        </div>
    </section>
    <!-- /header -->
    <!--Text-->
    <section  id="text-Hello-World">
        <div  class="container">
            <div class="row text-center">
            <div class="col-lg-12">
                <h1 class="Hello-world">Hello World</h1>
            </div>
            <div class="col-lg-12 text-center">
                <div class="col-lg-12 you ">
                    <div class="positining">

                <p class="lead text-world ">
                    
                 {!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->hometwo : 'lol'  !!}
                </p>
                    </div>
                    </div>
            </div>
        </div>
        </div>
    </section>
<!--text-->

    <section id="top success_story" class="slide text-center">
    
    <!-- start section top-->
        <h2 class="wow bounceInDown h2 hstory ">
            <span>It is </span>your only way to another success story
        </h2>
        <div class="full-slider">
	    <div class="container">
    		<div class="row">
                    <div class="slider"><!-- start slider -->
                    <div class="col-md-12 text-center">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                           
                            
                            
                            <div class="item div-one">
                                <div class="divvv divvv-hovr">
                                    <img class="imgg steve-img" width="165px" height="165px"  src="{{ asset('image/stevegobs1.png') }}">
                                </div>
                                    <div class="name steve">
                                         <h4 class="f800 mbtm0 blueclr  f800 newsoly">Steve Jobs</h4>
                                        <h5 class="whiteclr mtop0">Apple Co-Founder</h5>
                                    </div>
                            </div>
                           
                            <div class="item div-one">
                                <div id="divws" class="divvv">
                                    <img  class="imgg elon-img" width="165px" height="165px"   src="{{ asset('image/elon-musk2.png') }}">
                                </div>
                                    <div class="name elon">
                                        <h4 class="f600 mbtm0 blueclr f800 newsoly">Elon Musk</h4>
                                        <h5 class="whiteclr mtop0">CEO of Tesla Motors</h5>
                                    </div>
                            </div>
                            
                            
                             <div class="item div-one">
                                <div id="divws" class="divvv">
                                    <img class="imgg Soliman-img" width="165px" height="165px" src="{{ asset('image/solybek2.jpg') }}">
                                </div>
                                <div class="name Soliman">
                                    <h4 class="f800 mbtm0 blueclr  f800 newsoly"><span class="minimize">Soliman Mahmoud</span></h4>
                                        <h5 class="whiteclr mtop0">Learncloud Founder</h5>
                                    </div>
                            </div>
                            
                            <div class="item div-one">
                                <div id="divws" class="divvv">
                                    <img class="imgg bill-img" width="165px" height="165px"  src="{{ asset('image/bill-gates.png') }}">
                                </div>
                                <div class="name bill">
                                        <h4 class="f800 mbtm0 blueclr  f800 newsoly">Bill Gates</h4>
                                        <h5 class="whiteclr mtop0">Microsoft Founder</h5>
                                </div>
                            </div>
                            
                        
                            
                            <div class="item div-one">
                                <div id="divws" class="divvv">
                                    <img class="imgg Mark-img" width="165px" height="165px"  src="{{ asset('image/mark-zuckerberg.png') }}">
                                </div>
                                <div class="name Mark">
                                     <h4 class="f800 mbtm0 blueclr  f800 newsoly">Mark Zuckerburg</h4>
                                    <h5 class="whiteclr mtop0">Facebook CEO</h5>
                                    </div>
                            </div>
                           
                              <div class="item div-one">
                                <div id="divws" class="divvv">
                                    <img class="imgg Jeff-img"  width="165px" height="165px" src="{{ asset('image/jeffbezos1.png') }}">
                                </div>
                                <div class="name Jeff">
                                        <h4 class="f800 mbtm0 blueclr  f800 newsoly">Jeff Bezos</h4>
                                        <h5 class="whiteclr mtop0">Amazon Founder</h5>
                                    </div>
                            </div>
                            
                            
                            <div class="item div-one">
                                <div id="divws" class="divvv">
                                    <img class="imgg Soliman-img" width="165px" height="165px" src="{{ asset('image/larryelison1.png') }}">
                                </div>
                                <div class="name Soliman">
                                         <h4 class="f800 mbtm0 blueclr  f800 newsoly">Larry Ellison</h4>
                                        <h5 class="whiteclr mtop0">Oracle Founder</h5>
                                    </div>
                            </div>
                            
                            
                            <div class="item div-one">
                                <div id="divws" class="divvv">
                                <img class="imgg lary-img" width="165px" height="165px" src="{{ asset('image/larry-page.png') }}">
                                </div>
                                <div class="name lary">
                                        <h4 class="f800 mbtm0 blueclr  f800 newsoly">Lary Page</h4>
                                        <h5 class="whiteclr mtop0">Google Co-Founder</h5>
                                </div>
                            </div>
                            <div class="item div-one">
                                <div id="divws" class="divvv">
                                <img class="imgg travis-img"  width="165px" height="165px" src="{{ asset('image/uber1.png') }}">
                                </div>
                                    <div class="name travis">
                                         <h4 class="f800 mbtm0 blueclr  f800 newsoly">travis Kalanick</h4>
                                        <h5 class="whiteclr mtop0">Uber Co-Founder</h5>
                                    </div>
                            </div>
                        
                            
                            <div class="item div-one">
                                <div id="divws" class="divvv">
                                <img class="imgg michael-img"  width="165px" height="165px" src="{{ asset('image/dell1.png') }}">
                                </div>
                                    <div class="name michael">
                                         <h4 class="f800 mbtm0 blueclr  f800 newsoly">Michael Dell</h4>
                                        <h5 class="whiteclr mtop0">Dell Founder</h5>
                                    </div>
                            </div>
                     
                            
                           
                            
                            <div class="item div-one">
                                <div id="divws" class="divvv">
                                    <img class="imgg Soliman-img"  width="165px" height="165px" src="{{ asset('image/bobiger1.png') }}">
                                </div>
                                <div class="name Soliman">
                                         <h4 class="f800 mbtm0 blueclr  f800 newsoly">Bob Iger</h4>
                                        <h5 class="whiteclr mtop0">The Walt Disney CEO</h5>
                                    </div>
                            </div>
                            
                            <div class="item div-one">
                                <div id="divws" class="divvv">
                                    <img class="imgg Soliman-img" width="165px" height="165px"  src="{{ asset('image/buffet1.png') }}">
                                </div>
                                <div class="name Soliman">
                                         <h4 class="f800 mbtm0 blueclr  f800 newsoly">Warren Buffett</h4>
                                        <h5 class="whiteclr mtop0">Berkshire CEO</h5>
                                    </div>
                            </div>
                           
                            
                            
                        
                        </div>
                    </div>
                    </div><!-- end slider -->
                </div> 
            </div>
        </div>
            
        </section>	<!-- start section top-->

            <section id="service" class="serv"><!-- start service -->
			<div class="container">
				<img src="{{ asset('image/Line-Chart-50.gif') }}" width="42px" height="42px" class="top-oo mautomargin img-responsive" alt="chart">
				<div class="head text-center">
					<h1 class="f300  darkgrey fsize30 shouldh">
						Why 500,000 user has created an account on LearnCloud?<br>
						<span class="shouldhspan">And why should you?</span>
					</h1>
				</div>
				<div class="space50"></div>
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="service-box"><!-- start service -->
							<img src="{{ asset('image/Statistics-100.png') }}" width="88px" height="84px" class="img-responsive mautomargin" alt="">
							<div class="service-content text-center space30"><!-- start service content -->
                                {!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->homethree : 'lol' !!}
							</div><!-- start service content -->
						</div><!-- end service-box -->
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="service-box"><!-- start service -->
							<img src="{{ asset('image/Watch-100.png') }}" width="80px" height="80px" class="img-responsive mautomargin" alt="">
							<div class="service-content text-center space30"><!-- start service content -->
                                {!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->homefour : 'lol' !!}

							</div><!-- start service content -->
						</div><!-- end service-box -->
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="service-box"><!-- start service -->
							<img src="{{ asset('image/Rating-100.png') }}" width="88px" height="88px" class="img-responsive mautomargin" alt="">
							<div class="service-content text-center space30"><!-- start service content -->
                             {!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->homefive : 'lol' !!}

							</div><!-- start service content -->
						</div><!-- end service-box -->
					</div>
				</div>
			</div>	
		</section>
                <!-- end service sec...-->
    <!-- /success story -->
                <!--Contact-->
                <section class="book text-center contact">
                    <div class="fields">
                        <div class="container">
                            <p class="lead fsize26 space24 letspace"><span class="colorred">Note : </span> we accept new members for a limited time</p>
                            <div class="row">
                                <!--start book form-->
                                
                                
                                
                                   
                                        <div class="col-sm-12">
                                              <div class="rmid">    <!-- CTA - Sign in -->
                                                <div class="sign_in_wrap mautomargin">

                                                        <a class="btn_fb form-control input-lg" href="{{ route('linktracker', ['id' => $id,'code'=>$code,'source'=>'facebook']) }}"> 
                                                        <span class="ion-social-facebook"></span> &nbsp;&nbsp;&nbsp;Sign in with Facebook                       
                                                        </a>

                                                        <a class="btn_tw form-control input-lg" href="{{ route('linktracker', ['id' => $id,'code'=>$code,'source'=>'twitter']) }}"> Sign in with Twitter <span class="ion-social-twitter"></span>
                                                        </a>
                                                        
                                            <!-- Button trigger modal -->
                                                <a class="btn_email form-control input-lg"  href="{{ route('sign_up', ['id' => $id,'code'=>$code]) }}">Sign Up With Mail <span class="ion-email"></span>
                                                </a>
                                            </div>
                                                  </div>  <!-- /sign_in_wrap -->
                                          </div>
                                <!--End book Form-->
                            </div>
                        </div>

                    </div>
                </section>    
    <!-- footer -->
    <footer id="footer">
        <div class="container">
            <div class="col-md-3 f_left">
                <span class="f_follow">
                    Follow us on:
                </span>
                <div class="f_social_logos">
                    <a href="#" class="f_fb_icon">
                        <i class="ion-social-facebook"></i>
                    </a>
                    <a href="#" class="f_tw_icon">
                        <i class="ion-social-twitter"></i>
                    </a>
                    <a href="#" class="f_g_icon">
                        <i class="ion-social-googleplus"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-9 f_right">
                <span class="f_copyright">
                    @ 2015 LearnCloud. All Right Reserved<br>
                    for press : solyooo398523@gmail.com
                    
                </span>
            </div>
        </div>
    </footer>


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


    <!-- Javascripts -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <script type="text/javascript">
        
        // Loading Screen

$(window).load(function () {
    
    "use strict";
    
    // Loading Elements
    
    $(".loading .sk-folding-cube").fadeOut(2000, function () {
        
        // Show The Scroll

        $("body").css("overflow", "auto");
        
        $(this).parent().fadeOut(2000, function () {
            
            $(this).remove();
        });
    });
});

    </script>
    <script>
        new WOW().init();
    </script>
        
    <!-- Smooth scroll to anchor -->
    <script>
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
    
    	<script type="text/javascript">


		      $(document).ready(function() {
		 
		  var owl = $("#owl-demo");
		 
		  owl.owlCarousel({
		     
		      itemsCustom : [
		        [0, 1],
		        [450, 2],
		        [600, 2],
		        [700, 3],
		        [1000, 4],
		        [1200, 6],
		        [1400,6 ],
		       
		      ],
		        navigation : true, // Show next and prev buttons
		      slideSpeed : 30,
		      paginationSpeed : 400,
		      autoPlay :true,
		       
		      navigationText: [
		      "<img src='image/Expand-Arrow-50-copy.png'>",
         "<img src='image/Expand-Arrow-50.png'>"
		      ]
		 
		  });
		 
		});
    </script>
</body>

</html>
