<!DOCTYPE html>
<html>
	<head>
		<title>Learncloud | Features</title>

			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
		    <!-- ==========ATTACH ALL LINKS=========== -->

			 <!--=========ATTACH BOOTSTRAP============ -->
			 <link rel="stylesheet" type="text/css" href="{{ asset('features/css/bootstrap.css') }}">

			 <!--========= ATTACH STYLE==============  -->
			 <link rel="stylesheet" type="text/css" href="{{ asset('features/css/style.css') }}"> 

			  <link rel="shortcut icon" href="{{ asset('features/image/favicon.ico') }}" type="image/x-icon">   

        
			  <!-- ATTACH FONTAWESOME CSS -->
			<link href="{{ asset('features/font-awesome-4.3.0/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
		  	
		  	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
			<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
		    <!--[if lt IE 9]>
		      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		    <![endif]-->

		    <!-- ====================================== -->
             <!--  attach google analytics -->
                        
       

	</head>

	<body>{!! Analytics::render() !!}
		<section id="top"><!-- start section top-->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-1"></div>

					<div class="col-md-11">
						<a href="">
						<img src="{{ asset('features/image/Logo1.png') }}" width="196px" height="65px" class="img-responsive" alt="">
						</a>
					</div>
				</div>

				


				<div class="row">
					<div class="col-md-1"></div>

					<div class="col-md-4 col-sm-12 ">
						<div class="top-content space80">
							<h1 class="whiteclr head f300 fsize45">Virtual Classroom</h1>

							<p class="whiteclr lheight25 fsize18 lspace1 space30">{!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->featureone : 'lol' !!}</p>

							<div class="space50"></div>

							<a data-scroll data-options='{ "speed": 2500, "updateURL": false }'  href="#center" class="whiteclr topbtn">LEARN MORE</a>
						</div>
					</div>

					<div class="col-md-7 col-sm-12 padright0">
						<div class="topimg pull-right">
							<img src="{{ asset('features/image/Layer-21.png') }}" width="668px" height="452px" class="img-responsive" alt="">
						</div>
					</div>
				</div>
			</div>	
		</section>	<!-- start section top-->


		<section id="center"><!-- start section center-->
			<div class="container-fluid padleft0">
				<div class="row">
					<div class="col-md-12">
						<h1 class="fsize45 whiteclr text-center f300">Other <strong>LearnCloud</strong> Features</h1><br>


						<div class="slider mbot">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
										  <!-- Indicators -->
										  <ol class="carousel-indicators">
										    <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
										   		<div class="text-center whiteclr">
										   			<img src="{{ asset('features/image/Laptop-50.png') }}" width="50px" height="50px" class="img-responsive mautomargin" alt="laptop">
										   				<h5>MOOCS</h5>
										   		
										   		</div>
										    </li>
										    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
										    	<div class="text-center whiteclr">
										   			<img src="{{ asset('features/image/Broadcasting-50.png') }}" width="50px" height="50px"  class="img-responsive mautomargin" alt="">
										   				<h5>SOCIAL NETWORK</h5>
										   			
										   		</div>
										    </li>
										    <li data-target="#carousel-example-generic" data-slide-to="2" class="">
										    	<div class="text-center whiteclr">
										   			<img src="{{ asset('features/image/Literature-50.png') }}" width="50px" height="50px"  class="img-responsive mautomargin" alt="">
										   				<h5>BOOKS</h5>
										   			
										   		</div>
										    </li>
										  </ol>

										  <div class="space150"></div>

										  <!-- Wrapper for slides -->
										  <div class="carousel-inner">
										    <div class="item  active">
										      	<div class="row">
													<div class="col-md-6  col-sm-12">
														<div class="topimg">
															<img src="{{ asset('features/image/moocs.png') }}" width="1120px" height="850px"  class="img-responsive" alt="">
														</div>
													</div>

													<div class="col-md-4 col-sm-12">
														<div class="slider-content  space80 text-left">
															<h1 class="whiteclr head f300 fsize45">MOOCS</h1>

															<p class="whiteclr lheight25 fsize18 lspace1 space30">{!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->featuretwo : 'lol' !!}</p>

															<div class="space50"></div>

														</div>
													</div>
														<div class="col-md-1"></div>
												</div>


										      <div class="carousel-caption">
										   			<div class="content">
										   			<!-- 	<h1 class="f600">WELCOME TO OUR HOMES!</h1> -->
										   				
										   			</div>	
										   	   </div>
										    </div>
										    <div class="item">
										      	<div class="row">
													<div class="col-md-6 col-sm-12">
														<div class="topimg">
															<img src="{{ asset('features/image/social.png') }}" width="1120px" height="850px"  class="img-responsive" alt="">
														</div>
													</div>

													<div class="col-md-4 col-sm-12">
														<div class="slider-content space80 text-left">
															<h1 class="whiteclr head f300 fsize45">Social Network</h1>

															<p class="whiteclr lheight25 fsize18 lspace1 space30">{!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->featurethree : 'lol' !!} </p>

															<div class="space50"></div>

														</div>
													</div>
														<div class="col-md-1"></div>
												</div>
										      <div class="carousel-caption">
												<div class="content">
										   			
										   			</div>	
										      </div>
										    </div>

										    <div class="item ">
										      	<div class="row">
													<div class="col-md-6 col-sm-12">
														<div class="topimg">
															<img src="{{ asset('features/image/books.png') }}" width="1120px" height="850px"  class="img-responsive" alt="">
														</div>
													</div>

													<div class="col-md-4 col-sm-12">
														<div class="slider-content space80 text-left">
															<h1 class="whiteclr head f300 fsize45">Books</h1>

															<p class="whiteclr lheight25 fsize18 lspace1 space30">{!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->featurefour : 'lol' !!}</p>

															<div class="space50"></div>

														</div>
													</div>
														<div class="col-md-1"></div>
												</div>
										      <div class="carousel-caption">
										    	<div class="content">
										   				
										   			</div>	  	
										  	  </div>
										    </div>

										  </div>

										  <!-- Controls -->
										  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
										  <i class="fa fa-angle-left"></i>
										  </a>
										  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
										   <i class="fa fa-angle-right"></i>
										  </a>
										</div>
									</div>	
								</div>
						</div>
					</div>
				</div>
			</section><!-- end section center-->


		<section id="bottom"><!-- start section bottom-->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="bottom-content text-center">
							<img src="{{ asset('features/image/Logo.png') }}" width="166px" height="151px"  class="img-responsive mautomargin" alt="">

							<h1 class="fsize45 f300 head whiteclr realvalu">What Is Real Value Of LearnCloud?</h1>

							<p class="lheight30 lspace1 fsize18 whiteclr space60"> {!! \Learncloud\SiteSetting::find(1) != null ? \Learncloud\SiteSetting::find(1)->featurefive : 'lol' !!}</p>

							<div class="space70"></div>

							<a href="{{ route('profile') }}" class="whiteclr bottombtn"> Go To Your Profile </a>
						</div>
					</div>
				</div>
			</div>
		</section><!-- end section bottom-->

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



	
			<!-- ATTACH BOOTSTRAP JS========= -->

		<script type="text/javascript" src="{{ asset('features/js/jquery.js') }}"></script>
		<script type="text/javascript" src="{{ asset('features/js/bootstrap.js') }}"></script>
		<script type="text/javascript" src="{{ asset('features/js/jquery.smartmenus.js') }}"></script>
		<script type="text/javascript" src="{{ asset('features/js/jquery.smartmenus.bootstrap.js') }}"></script>
		<script src="{{ asset('features/js/custom.js') }}"></script>
		<script src="{{ asset('features/js/smooth-scroll.min.js') }}"></script>


	
	</body>
</html>	

