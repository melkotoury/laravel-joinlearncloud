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
            <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/responsiv.css') }}" rel="stylesheet">        
            <link href="{{ asset('assets/css/form.css') }}" rel="stylesheet">
        
            <!--========= ATTACH OWL SLIDER==============  -->
            <!-- Webfonts -->
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
         <!--  attach google analytics -->
                                
           <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                         
   
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
<form class="sign-up formcong">
    <h1 class="sign-up-title">Congratulations</h1>
    <?php 

    if (Auth::user()->userPoint->points >= 6000 && Auth::user()->userPoint->points < 12000) {
        $prize = "bronze";
    } elseif(Auth::user()->userPoint->points >= 12000 && Auth::user()->userPoint->points <20000) {
        $prize = "silver";
    }else{

        $prize = "gold";
    }
    

    ?>

    <h1 class="cong-acount">Now you have a {{ $prize }} account and {{ Auth::user()->userPoint->points/200 }} $ credit .</h1>
    <h2 class="sign-up-parcon">But Our plan is to start the service officially when we reach 5 million user so you can find people to interact with them on our
                                    social network, more content to benefit from and also our artificial intelligence algorithm will do well with you.
    </h2><h2 class="sign-up-parcon">Now we have 500 000 user and growing so rapidly. every day about 70 000 new account created in average. We will notify you over mail & phone when we reach our target.  </h2>
    <h2 class="sign-up-parcon">If you want to get all your money back and cancel your account. you can do it just click refund me.</h2>      

 <h2 class="sign-up-parcon">You can also earn more credit. Back to your profile and refer more friends. 
     </h2><br>

        <a id="modal-654926" href="#modal-container-654926" data-toggle="modal">
            <input type="submit" value="Refund Me" class="sign-up-button payupp">
        </a>

    
                
    <a href="{{ route('profile') }}" >
        <input type="button" value="Back To My Profile" class="sign-up-button payupp"></a>
  </form>


            </div>
        </div>
    </div>


        <!-- start Modal -->
            
            <div class="modal fade" id="modal-container-654926" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                             
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                ×
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                                Are you sure you want to do that?
                            </h4>
                        </div>
                        <div class="modal-body modalcontent">
                            If you cancelled your account now You can't get another one forever. 
                            your mail, IP address, PayPal account and credit card will be blocked. 
                            And also we will not accept new members after we reach 5 million user.
                        </div>
                        <div class="modal-footer">
                             
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                            </button> 
                            <a href="/showrefunded/{{ Request::get('paymentId').'/'.Request::get('PayerID')}}"
                              class="btn btn-primary">
                                Refund me anyway
                            </a>
                      

                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        <!-- end modal -->

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


        
</body>
</html>
