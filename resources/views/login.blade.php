<!DOCTYPE html>
<html lang="en">
<head>
  <title>24/7 Sabaiba Login </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ URL::asset('/css/login.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}" />
  <script type="text/javascript" src="{{ URL::asset('/js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('/js/bootstrap.mini.js') }}"></script>
  
</head>
<body>
  <div class="jumbotron">
    <div class="container">
        <header>
          <form class ="slogin" method="post" action ="studprocess.php">
            <h3 class = "h3"> log in </h3>
            <input class="input" type = "text" name = "username" placeholder = "Enter your email" required autofocus> <br> <br>
            <input class="input" type = "password" name = "password" placeholder = "Enter your Password" maxlength = "20" required> <br> <br>
            <input class="login" type = "submit" value = "log in">
          </form>
        </header>

</div>
  </div>
</body>
</html>
