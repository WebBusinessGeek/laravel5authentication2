<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5 Authentication</title>

    <!-- Bootstrap -->
    <link href="/angular1.3-bootstrap3.2/bootstrap-twit/css/bootstrap.min.css" rel="stylesheet">
    <link href="/angular1.3-bootstrap3.2/bootstrap-twit/css/bootstrap-theme.min.css" rel="stylesheet">

  </head>
  <body>
     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Laravel 5 AuthenticationPlay</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/auth/register">Signup</a></li>
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/auth/logout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<br/><br/>

    <div class="container">
      
      <h1>Hello, world!</h1>

      @if(Auth::check())
        {{Auth::user()->email}}
      @else
        {{'not logged in'}}
      @endif


      @yield('content')


    </div>

    
  </body>
</html>