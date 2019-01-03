<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('template/docs/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register - Omah Koding</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Omah Koding</h1>
      </div>
      <div class="login-box register">
        <form class="login-form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>REGISTER</h3>
          <div class="form-group">
            <label class="control-label">Name</label>
            <input class="form-control" id="name" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>               
          </div>
          <div class="form-group">
            <label class="control-label">E-mail Address</label>
            <input class="form-control" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>                
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>            
            <input class="form-control" id="password" type="password" placeholder="Password" name="password" required>
          </div>
          <div class="form-group">
            <label class="control-label">Confirm Password</label>            
            <input class="form-control" id="password-confirm" type="password" placeholder="Password Confirm" name="password_confirmation" required>
          </div>          
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>REGISTER</button>
          </div>
        </form>        
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('template/docs/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{asset('template/docs/js/popper.min.js') }}"></script>
    <script src="{{asset('template/docs/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('template/docs/js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script type="text/javascript" src="{{asset('template/docs/js/plugins/chart.js') }}"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>