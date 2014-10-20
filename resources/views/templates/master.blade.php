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