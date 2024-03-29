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

	<script>
		function test()
		{
			alert("search") ;
		}

        // Material Select Initialization
        $(document).ready(function() {
        $('.mdb-select').materialSelect();
        });

        function handleSelect(elm)
        {
            window.location = elm.value ;
        }
    </script>
    <style>
        select , option
        {
            border: 0;
            color: darkcyan;
            font-size: 15px;
            font-weight: bold;
            text-align: right;
            padding: 10px;
            font-family: Calibri , arial;
            direction: rtl ;
        }
    </style>

</head>

<body>

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
									<i onclick="test()" class="fa fa-search" style="right:160px;cursor: pointer"></i>
									<input type="email" class="form-control" style="color: darkcyan;font-family: Calibri , arial;font-size: 15px ; display: inline; width: 200px;text-align: right;padding: 0 5px 0 40px" placeholder="... بحث">
								</li>
								<li><a href="{{url('/about_us')}}">من نحن</a></li>
								<li><a href="{{url('/persons')}}">الحالات</a></li>
								<li><a href="{{url('/home')}}">الرئيسية</a></li>
								<li>
                                    <select  onchange="handleSelect(this)" class="mdb-select md-form">
                                        <option value="home">اسم الجمعية</option>
                                        <option value="profile">الصفحة الشخصية</option>
                                        <option value="logout">تسجيل الخروج</option>
                                        <option value="1">جمعية</option>
                                        <option value="1">جمعية</option>
                                        <option value="1">جمعية</option>
                                        <option value="1">جمعية</option>
                                        <option value="1">جمعية</option>
                                        <option value="1">جمعية</option>
                                        <option value="1">جمعية</option>
                                        <option value="1">جمعية</option>
                                        <option value="1">جمعية</option>
                                        <option value="1">جمعية</option>
                                        <option value="1">جمعية</option>
                                        <option value="1">جمعية</option>
                                        <option value="1">جمعية</option>
                                    </select>
                                </li>
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
		<div class="hamburger_close" style="padding: 0;top: 20px;right: 17px;"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
                <li style="border-bottom: 1px solid #ccc;">
                    <select style="color:black;font-weight: bold;margin: 100px 0 0 0;" onchange="handleSelect(this)" class="mdb-select md-form">
                        <option style="color:black;font-weight: bold;" value="home">اسم الجمعية</option>
                        <option style="color:black;font-weight: bold;" value="profile">الصفحة الشخصية</option>
                        <option style="color:black;font-weight: bold;" value="logout">تسجيل الخروج</option>
                        <option style="color:black;font-weight: bold;" value="1">جمعية</option>
                        <option style="color:black;font-weight: bold;" value="1">جمعية</option>
                        <option style="color:black;font-weight: bold;" value="1">جمعية</option>
                        <option style="color:black;font-weight: bold;" value="1">جمعية</option>
                        <option style="color:black;font-weight: bold;" value="1">جمعية</option>
                        <option style="color:black;font-weight: bold;" value="1">جمعية</option>

                    </select>
                </li>
				<li style="padding-right:10px;margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/home')}}"> الرئيسية</a></li>
				<li style="padding-right:10px;margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/persons')}}"> الحالات</a></li>
				<li style="padding-right:10px;margin: 10px 0px;border-bottom: 1px solid #ccc;"><a href="{{url('/about_us')}}">من نحن</a></li>
				<li style="padding-right:10px;margin: 10px 0px;border-bottom: 1px solid #ccc;margin-bottom: 100px">
					<i onclick="test()" class="fa fa-search" style="right:160px;cursor: pointer"></i>
					<input type="email" class="form-control" style="color: darkcyan;font-family: Calibri , arial;font-size: 15px ; display: inline; width: 200px;text-align: right;padding: 0 5px 0 40px;margin-bottom: 10px;" placeholder="... بحث">		
				</li>
			</ul>

		</div>
	</div>
