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
             <link href="{{ asset('assets/css/intlTelInput.css') }}" rel="stylesheet">

            <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/responsiv.css') }}" rel="stylesheet">        
            <link href="{{ asset('assets/css/form.css') }}" rel="stylesheet">
            <style type="text/css">
              
              .iti-flag {
                background-image: url("{{ asset('image/flags.png') }}");
                        }

              .phone{

                display: block !important;
              }          

            </style>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

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
          <div class="col-md-6">
            <p class="loginlink">Already Member <a href="/login" class="btn btn-primary">Log In</a></p>
          </div>
        </div>

       <div>
            <div class="row text-center">

     {!! Form::open(['url' => route('sign_up'),'class'=>'sign-up','files'=>'true']) !!}
     {!! Form::token() !!}
  <h1 class="sign-up-title">Sign up in seconds </h1>

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

    <h2 class="sign-up-par">If you are a course author, book author, industry expert,
    entrepreneur or you can teach any thing you will have a free life time
                       access just sign up as a teacher before </h2><div id="timer">
                                            <span id="days"></span>days
                                            <span id="hours"></span>hours
                                            <span id="minutes"></span>minutes
                                            <span id="seconds"></span>seconds
                                          </div><br> 
    <input type="text" name="name" class="sign-up-input" value="{{ Request::old('full_name')?: '' }}" placeholder="Full Name?" autofocus required>
    <select class="sign-up-input" name="type" required>
      <option value="">Select Type</option>
      <option value="student" {{ (Request::old('type')=='student') ? 'selected': '' }}>Student</option>
      <option value="teacher" {{ (Request::old('type')=='teacher') ? 'selected': '' }}>Teacher</option>
    </select>
    <input type="email" name="email" value="{{ Request::old('email')?: '' }}" class="sign-up-input" id="exampleInputEmail1" placeholder="Email" required>
    <input type="tel" name="phone"  value="{{ Request::old('phone')?: '' }}" class="sign-up-input .iti-flag" id="phone" placeholder="Add Your Phone Number" required><br>
    <input type="password" name="password" class="sign-up-input" placeholder="Choose a password" required>
    <input type="password" name="password_confirmation" class="sign-up-input" placeholder="Repeat Your password">
       <div class="upphoto"><img id="blah" src="{{ asset('assets/images/user_profile.png') }}" class="img-thumbnail" alt="your image" />
        <label for="upload-file" class="btn btn-success btn-default upload__label">Choose Your Photo</label>
    <input type="file" value="{{ Request::old('photo')?: '' }}" id="upload-file" name="photo" class="button--upload__file" onchange="readURL(this);"></div>
    <h2 class="sign-up-par">Click submit to know little about LearnCloud features before going to your profile</h2>
        <div class="checkbox rememberme" >  
          <label >
            <input type="checkbox" name="remember"> Remember Me
          </label>
    </div> 
    <input type="hidden" name="id" value="{{ $id }}">
    <input type="hidden" id="country" name="country" value="">
    <input type="hidden" name="code" value="{{ $code }}">
    <input type="submit" id="submit" value="Submit Your Info" class="sign-up-button">

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
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign in</h4>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">back</button>
        <button type="button" class="btn btn-primary">login</button>
      </div>
    </div>
  </div>
</div>
    <!-- Javascripts -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
    <script src="{{ asset('assets/js/form.js') }}"></script>

<!--     <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
 -->


    <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>

    <script type="text/javascript">
        
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }



    </script>

    <script type="text/javascript">
      $("#submit").intlTelInput();
       $(".intl-tel-input .country-list").width($(".intl-tel-input input").outerWidth());


    </script>
    <script>

               $(function(){


               $("#phone").click(function() {

               var phone = $("#phone").intlTelInput("getSelectedCountryData").name+' '+$("#phone").intlTelInput("getSelectedCountryData").                                                   dialCode;
               $("#country").val(phone);


               });

                /* ajaxForm is a function existed in new plugin called  */
                /* "http://malsup.github.com/jquery.form.js" */
                /* use it while uploading image */
                
            });


    </script>
        
</body>
</html>
