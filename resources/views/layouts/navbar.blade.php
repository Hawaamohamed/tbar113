<!DOCTYPE html>

<html lang="en">

<head>
	<title>TBAR3</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="website help charities">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="{{ url("/design/images/1.jpg") }}">

    <link rel="stylesheet" href="{{ url("/design/dash/style.css") }}">

	<link rel="stylesheet" type="text/css" href="{{ url("/design/card/font.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/card/bootstrap.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/card/card.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/colo/css/bootstrap4/bootstrap.min.css") }}">
	<link href="{{ url("/design/colo/plugins/font-awesome-4.7.0/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/colo/css/main_styles.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/colo/css/responsive.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/colo/css/mystyle.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ url("/design/persons.css") }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="{{ url("/design/lte/dist/css/AdminLTE.min.css") }}">
	<link rel="stylesheet" href="{{ url("/design/lte/dist/css/skins/_all-skins.min.css") }}">
	<link rel="stylesheet" href="{{ url("/design/lte/plugins/iCheck/flat/blue.css") }}">
	<link rel="stylesheet" href="{{ url("/design/lte/plugins/morris/morris.css") }}">
	<link rel="stylesheet" href="{{ url("/design/lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css") }}">
	<link rel="stylesheet" href="{{ url("/design/lte/plugins/datepicker/datepicker3.css") }}">
	<link rel="stylesheet" href="{{ url("/design/lte/plugins/daterangepicker/daterangepicker-bs3.css") }}">
	<link rel="stylesheet" href="{{ url("/design/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}">

	<!-- Added By Hawaa -->
		<link rel="stylesheet" href="{{ url("/design/colo/css/core-style.css") }}">


		<script src="{{ url("/design/colo/js/jquery-3.3.1.min.js") }}"></script>
		<script src="{{ url("/design/colo/js/jquery-3.2.1.min.js") }}"></script>
		<script src="{{ url("/design/colo/css/bootstrap4/popper.js") }}"></script>

		<link rel="stylesheet" href="{{ url("/design/colo/css/core-style.css") }}">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<script>
	$(document).ready(function(){
		$("<i class='fa fa-search'></i>").insertBefore(".search");
		$(".fa-search").parent('div').css('position','relative');
	 $(".fa-search").css({
		'right': '1px',
		'position':'absolute',
		'color':'white',
		'top':'1px',
		'width':'30px',
		'height':'32px',
		'background':'#28b8b9',
		'padding':'10px 7px 3px 3px',
		'cursor':'pointer',
		'border-right': 'none',
		'font-size': '16px',
		//'right':$(this).parent('div').find(':input').innerWidth()
	  //'right':$(this).parent('div').find(':input').innerWidth()-($(this).parent().find(':input').innerWidth())
	});


		if(window.location=='http://localhost/tbar3/public/home')
		{
		  $(".navbar li a.home").css({
				'color':'white',
				'background':'rgb(40, 184, 185)',
				'transition':'all .2s ease-in-out'
			})
		}else if(window.location=='http://localhost/tbar3/public/persons')
		{
		  $(".navbar li a.persons").css({
				'color':'white',
				'background':'rgb(40, 184, 185)',
				'transition':'all .2s ease-in-out'
			})
		}else if(window.location=='http://localhost/tbar3/public/login')
		{
		  $(".navbar li a.login").css({
				'color':'white',
				'background':'rgb(40, 184, 185)',
				'transition':'all .2s ease-in-out'
			})
		}else if(window.location=='http://localhost/tbar3/public/register')
		{
		  $(".navbar li a.register").css({
				'color':'white',
				'background':'rgb(40, 184, 185)',
				'transition':'all .2s ease-in-out'
			})
		}else if(window.location=='http://localhost/tbar3/public/charity_register')
		{
		  $(".navbar li a.charity_register").css({
				'color':'white',
				'background':'rgb(40, 184, 185)',
				'transition':'all .2s ease-in-out'
			})
		}else if(window.location=='http://localhost/tbar3/public/about_us')
		{
		  $(".navbar li a.about_us").css({
				'color':'white',
				'background':'rgb(40, 184, 185)',
				'transition':'all .2s ease-in-out'
			})
		}
		$(".navbar li a").hover(function(event){
	    // event.preventDefault();
		$(this).addClass('active').parent().siblings().find('a').removeClass('active');
	    });
	});
	</script>
		<script>
			function test()
			{
				alert("search") ;
			}
		</script>
		<style>
     .active{
			 color:rgb(40, 184, 185);
			 width:100%;
			 background:;
			 transition:all .2s ease-in-out;
		 }

		</style>
</head>

<body class="">

<div class="super_container">

	<header class="header trans_300">

		<div class="main_nav_container">

			<div class="container">

				<div class="row">

					<div class="col-lg-12 text-right">

						<div class="logo_container">

							<img src="{{ url("/design/images/1.jpg") }}">

						</div>

						<nav class="navbar" >

							<ul class="navbar_menu">
								<li>
								 <div>
									<input type="email" class="form-control search" style="color: darkcyan;font-family: Calibri , arial;font-size: 15px ; display: inline; width: 200px;text-align: right;padding: 0 34px 0 3px;border-radius: 0;height: 34px;" placeholder="... بحث">
								 </div>
								</li>
								<li><a href="{{url('/about_us')}}" class='about_us'>من نحن</a></li>
								<li><a href="{{url('/register_charity')}}" class='charity_register'>أنضم كجمعية</a></li>
								<li><a href="{{url('/register')}}" class='register'>أنضم كمتبرع</a></li>
								<li><a href="{{url('/login')}}" class='login'>تسجيل الدخول</a></li>
								<li><a href="{{url('/persons')}}" class='persons'>الحالات</a></li>
								<li><a href="{{url('/home')}}" class='home'>الرئيسية</a></li>
							</ul>

							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li style="padding-right:10px;margin: 10px 0px;margin-top:70px;border-bottom: 1px solid #ccc;"><a href="{{url('/home')}}"> الرئيسية</a></li>
				<li style="padding-right:10px;margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/persons')}}"> الحالات</a></li>
				<li style="padding-right:10px;margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/login')}}"> تسجيل الدخول</a></li>
				<li style="padding-right:10px;margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/register')}}">أنضم كمتبرع</a></li>
				<li style="padding-right:10px;margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/register_charity')}}">أنضم كجمعية</a></li>
				<li style="padding-right:10px;margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/about_us')}}">من نحن</a></li>
			  <li style="padding-right:10px;margin: 10px 0px;border-bottom: 1px solid #ccc;margin-bottom: 100px">
				<div>
				  <input type="email" class="form-control search" style="color: darkcyan;font-family: Calibri , arial;font-size: 15px ; display: inline; width: 200px;text-align: right;padding: 0 34px 0 40px;margin-bottom: 10px;" placeholder="... بحث">
        </div>
				</li>
			</ul>

		</div>
	</div>
