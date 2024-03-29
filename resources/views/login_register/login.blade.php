<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TBAR3 | Login</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ url('/design/lte/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/design/lte/plugins/font-awesome.css') }}">
  <link rel="stylesheet" href="{{ url('/design/lte/plugins/ionicons.css') }}">
  <link rel="stylesheet" href="{{ url('/design/lte/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ url('/design/lte/plugins/iCheck/square/blue.css') }}plugins/iCheck/square/blue.css">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="{{ url("/design/colo/css/mystyle.css") }}">

</head>
<body class="hold-transition login-page">
@if(count($errors->all())>0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $e)
        <li>{{$e}}</li>
      @endforeach
    </ul>
  </div>
@endif


@if(session()->has('added'))
  <div class="alert alert-success">
    <h2>{{session('added')}}</h2>
  </div>
@endif
<div class="login-box">
  <div class="login-logo">
    <a href="#" style=""><b>TBAR3</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">تسجيل الدخول</p>

    <form action="{{url('charity/login')}}" method="post">
      {{csrf_field()}}
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="البريد الإلكترونى">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="كلمة السر">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" ><span style="color:lightseagreen ;"> تذكرنى !</span>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">دخول</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">هل نسيت كلمة السر ؟</a><br>

  </div>

</div>


<script src="{{ url('/design/lte/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
<script src="{{ url('/design/lte/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/design/lte/plugins/iCheck/icheck.min.js') }}plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
