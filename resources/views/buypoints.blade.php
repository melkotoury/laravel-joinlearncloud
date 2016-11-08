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
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        
            <!--========= ATTACH OWL SLIDER==============  -->
            <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
            <!-- Webfonts -->
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

         @if(  ((   ( 6 - (Auth::user()->userPoint->points /1000))    * 5))  >=0   )
             <?php $bronze = ((( 6 - (Auth::user()->userPoint->points /1000)) * 5)) ; ?>
              @else
            <?php $bronze = 0; ?>
        @endif


          @if(((( 12 - (Auth::user()->userPoint->points /1000)) * 5))>0)
                <?php $silver = ((( 12 - (Auth::user()->userPoint->points /1000)) * 5)) ; ?>
                    @else
                <?php $silver = 0; ?>
         @endif


             @if(((( 20 - (Auth::user()->userPoint->points /1000)) * 5))>0)
                    <?php $gold = ((( 20 - (Auth::user()->userPoint->points /1000)) * 5)) ; ?>
                        @else
                   <?php $gold = 0; ?>
         @endif



        <div>
            <div class="row text-center">
<form class="sign-up formcon" action="/home/accesspaypal">
    <h1 class="sign-up-title">Confirmation</h1>
    <h2 class="sign-up-par">Now you will pay <select id="selected" name="select" class="sign-up-input opsize">
        <option value="bronze" > {{$bronze}} $</option>
        <option value="silver" selected> {{ $silver }} $</option>
        <option value="gold">   {{ $gold }} $</option>
    </select> to get <span id="account_selected">silver</span> account .  </h2>   <input type="submit" value="Pay Now" class="sign-up-button payup">
                
            <h2 class="sign-up-par"><br>You can back to your profile and refer more friends to pay less , 
            </h2><br>
<a href="{{ route('profile') }}" >
    <input type="button" value="Back To My Profile" class="sign-up-button payup"></a>
  </form>


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



    <script type="text/javascript">
        
        /*global $, smoothScroll*/
            var
             selected = document.getElementById('selected'),
             account  = document.getElementById('account_selected');


            selected.onchange = function(){
                
                "use strict";
                var sel;
                if(selected.value != ''){
                  
                    if (selected.value == 'bronze') {
                        sel = "bronze";
                    } else if (selected.value == 'silver' )
                    {
                        sel = "silver";
                    }else
                    {
                        sel = "gold";
                    }
                    console.log(sel);
                    console.log(selected.value);
                account.innerHTML = sel;
                }else{
                 account.innerHTML = 'silver';
                   
                }
            }



    </script>
   

        
</body>
</html>
