<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <!-- Compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css"> -->
    <link type="text/css" rel="stylesheet" href="{{ url('assets/css/materialize.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/css/page-center.css') }}">
</head>
<body class="cyan">
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form method="POST" action="/auth/login" class="login-form">
        {!! csrf_field() !!}
        <div class="row">
          <div class="input-field col s12 center">
            <img src="{{ url('assets/images/login.jpg') }}" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Login Administrator System</p>
          </div>
        </div>
        @if ($errors->any())
            <div class="row">
                <div class="input-field col s12 margin">
                    <div class="card-panel red darken-1 margin white-text">
                        <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>        
                    </div>
                </div>
            </div>
        @endif
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input type="text" name="username" value="">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input type="password" name="password" id="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" name="remember" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>

    <!-- JavaScript -->
    <script type="text/javascript" src="{{ url('assets/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/materialize.js') }}"></script>
</body>
</html>