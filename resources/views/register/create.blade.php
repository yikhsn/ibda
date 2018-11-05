<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/animated.css') }}" rel="stylesheet" type="text/css">


  </head>
  <body>

    <div class="row">
      <div class="col-md-2">
          <form method="POST" action="/register">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" type="text" name="name" id="name">    
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="email" name="email" id="email">    
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" type="password" name="password" id="password">    
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmed</label>
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">    
              </div>
            <button type="submit" class="btn btn-danger">Register</button>      
          </form>      
      </div>
      <div class="col-md-8">

      </div>
    </div>
    
  </body>
</html>