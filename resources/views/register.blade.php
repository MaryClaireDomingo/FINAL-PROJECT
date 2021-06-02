<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>24/7 Sabaiba Register</title>
    <link rel="stylesheet" href="{{ URL::asset('/css/login.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/bootstrap.mini.js') }}"></script>
</head>
    <body>

        @if (session('success'))
            <script>
                alert('Successfully Created');
            </script>
        @endif

        @error('email')
            <script>
                alert('Please Enter Valid Email');
            </script>
        @enderror

        <div class="jumbotron">
            <div class="container">
                <header>
                  <form class ="slogin" method="post" action ="{{ route('register') }}">
                    @csrf
                    <h3 class = "h3"> log in </h3>
                    <input class="input" type = "text" name="name" placeholder = "Enter your name" required autofocus value="{{ old('name') }}"> <br> <br>
                    <input class="input" type = "text" name="email" placeholder = "Enter your email" required autofocus value="{{ old('email') }}"> <br> <br>
                    <input class="input" type = "password" name="password" placeholder = "Enter your Password" maxlength = "20" required> <br> <br>
                    <input class="input" type = "password" name="password_confirmation" placeholder = "Confirm Password" maxlength = "20" required> <br> <br>
                    <input class="login" type = "submit" value = "Register">
                    <div class="btn-choice">
                        <a href="{{ route('login') }}">Login to Sabaiba</a>
                      </div>
                  </form>
                </header>
            </div>
          </div>
    </body>
</html>