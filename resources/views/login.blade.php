<!DOCTYPE html>

<html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Your SEO Optimized description goes here">
            <meta name="author" content="LearnCloud">   
            <link rel="shortcut icon" href="{{ asset('assets/icon/favicon.ico') }}" type="image/x-icon">   
            <title>LearnCloud</title>
            <!-- Stylesheets -->
            <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/ionicons.min.css') }}" rel="stylesheet">    
            <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/responsiv.css') }}" rel="stylesheet">        
            <link href="{{ asset('assets/css/form.css') }}" rel="stylesheet">
        
            <!--========= ATTACH OWL SLIDER==============  -->
            <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
            <!-- Webfonts -->
            <link href='http://fonts.googleapis.com/css?family=open:500,900italic,900,400italic,700italic,300,700,500italic,300italic,400' rel='stylesheet' type='text/css'>
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
         <!--  attach google analytics -->
                                
             </head>

<body>{!! Analytics::render() !!}
    <div class="full">
        <div class="row backclr">
          <div class="col-md-6">
            <div>

                  <div class="navbar-brand"><a href="{{ route('home') }}"></a></div>
                  <div class="logo-words"><a href="#"></a></div>
          </div>
          </div>
        </div>

        <div>
            <div class="row text-center">
 <!-- oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo -->

     {!! Form::open(['url' => route('login'),'class'=>'sign-up','files'=>'true']) !!}
<!-- <form class="sign-up">
 -->   
  <h1 class="sign-up-title">Sign In </h1>

    <!-- displaying validation errors --> 
          @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li class="alleft">{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
<!-- end displaying validation errors -->

    <!-- displaying validation errors --> 
          @if (Session::has('info'))
          <div class="alert alert-danger">
              <ul>
                      <li class="alleft">{{ Session::get('info') }}</li>
              </ul>
          </div>
      @endif
<!-- end displaying validation errors -->


    <input type="email" name="email" value="{{ Request::old('email')?: '' }}" class="sign-up-input" id="exampleInputEmail1" placeholder="Email">

    <input type="password" name="password" class="sign-up-input" placeholder="Choose a password">
        
    <div class="checkbox rememberme" >  
          <label >
            <input type="checkbox" name="remember"> Remember Me
          </label>
    </div> 

    <input type="submit" value="Log in" class="sign-up-button">

    {!! Form::close() !!}

          </div>
        </div>
    </div>

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
                    @ 2015 LearnCloud. All Right Reserved
                </span>
            </div>
        </div>
    </footer>
    <!-- Javascripts -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/My-Query.js') }}"></script>
    <script src="{{ asset('assets/js/form.js') }}"></script>

    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>
        new WOW().init();
    </script>
        
</body>
</html>
