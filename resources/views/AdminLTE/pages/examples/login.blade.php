<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        @if($errors->has('message'))
      <div class="alert alert-danger">
        <span>{{ $errors->first('message') }}</span>
      </div>
    @endif
        <form action="/admins/login" method="post" enctype="multipart/form-data">
          @csrf
          <div class="input-group">
            @php 
                $rememberEmail;
        if ($errors->first('dataEmail')) {
          $rememberEmail = $errors->first('dataEmail');
        } else {
          $rememberEmail = old('email');
        }
        @endphp
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $rememberEmail }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <span class="text-danger">{{$errors->first('email')}}</span>
          <div class="mb-3"></div>
          <div class="input-group">
            <input type="password" class="form-control" placeholder="Password" name="password"
              value="{{ old('password') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <span class="text-danger">{{$errors->first('password')}}</span>
          <div class="mb-3"></div>
          <div class="row">

            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <br>
        <span class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </span>&nbsp;<span>or</span>&nbsp;
        <span class="mb-0">
          <a href="/admins/register" class="text-center">Register</a>
        </span>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>