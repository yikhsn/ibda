<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animated.css">
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