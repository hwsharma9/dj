<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  {{ HTML::style('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}
  <!-- Font Awesome -->
  {{ HTML::style('public/admin/bower_components/font-awesome/css/font-awesome.min.css') }}
  <!-- Ionicons -->
  {{ HTML::style('public/admin/bower_components/Ionicons/css/ionicons.min.css') }}
  <!-- Theme style -->
  {{ HTML::style('public/admin/dist/css/AdminLTE.min.css') }}
  <!-- iCheck -->
  {{ HTML::style('public/admin/plugins/iCheck/square/blue.css') }}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ URL::to('/admin/admin-login')}}"><b>Admin</b> Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

      {{ Form::open(array('url'=>'/admin/admin-login-action')) }}
      <div class="form-group has-feedback">
        {{ Form::text('email',Input::old('email'),['class'=>'form-control','placeholder'=>'Email']) }}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {{ Form::password('password',['class'=>'form-control','placeholder'=>'Password'],Input::old('password')) }}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          {{ Form::submit('Sign In',['class'=>'btn btn-primary btn-block btn-flat']) }}
        </div>
        <!-- /.col -->
      </div>
    {{ Form::close() }}

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
{{ HTML::script('public/admin/bower_components/jquery/dist/jquery.min.js') }}
<!-- Bootstrap 3.3.7 -->
{{ HTML::script('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}
</body>
</html>
