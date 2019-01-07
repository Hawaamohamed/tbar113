<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TBAR3 | Register</title>
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
<div class="login-box">
  <div class="login-logo">
    <a href="#" style="text-shadow: 2px 2px 8px lightseagreen"><b>TBAR</b>3</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg" style="color:lightseagreen ;">إنشاء حساب كجمعية</p>

    <form action="../../index2.html" method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="العنوان" >
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="رقم الموبيل" >
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="البريد الإلكترونى" >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="كلمة السر">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="تأكيد كلمة السر">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">

        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">تسجيل</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


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
