<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sabaiba Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ URL::asset('/css/index.css') }}" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" defer></script>
</head>

<body>

<div class="jumbotron text-center" style="margin-bottom:0">
 
</div>
<div class="navigation">
<div class="dropdown" style="float:right;">
              <a class="glyphicon glyphicon-menu-hamburger"></a>
              <div class="dropdown-content">
              <a href="{{url('section5')}}">About Us</a>
              <a href="{{url('section6')}}">Contact Us</a>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"> Logout </button>
              </form>
              </div>
          </div>
            <a href="{{url('index')}}">How Are you Today?</a>
            <a href="{{url('section2')}}" >Inspirational Story</a>
            <a href="{{url('section3')}}" >Laugh for a Moment</a>
            <a href="{{url('section4')}}" >Negative Thoughts</a>
          </div>
<div class="container-fluid">


  @if (session('success'))
    <script>
      alert('Successfully Posted');
    </script>
  @endif


    <div class="row content">
        <div class="font">
            <div class="label">
            <p class="font">How are you Today? Please Share your thought</p><hr class="hr">
            </div>
        </div>
        <div class="text-container">
          <form action="{{ route('inspirational') }}" method="POST">
            @csrf
            <input name="title" type="text" placeholder="Title here..." required>
            <textarea name="body" rows="10" cols="50" placeholder="Enter your Story here..." required></textarea>
            <button>Submit Inspiration Story</button>
          </form>
          
          <form action="{{ route('laugh') }}" method="POST">
            @csrf
            <input name="title" type="text" placeholder="Title here..." required>
            <textarea name="body" rows="10" cols="50" placeholder="Enter your Story here..." required></textarea>
            <button>Submit Laugh for a moment</button>
          </form>

          <form action="{{ route('negative') }}" method="POST">
            @csrf
            <input name="title" type="text" placeholder="Title here..." required>
            <textarea name="body" rows="10" cols="50" placeholder="Enter your Story here..." required></textarea>
            <button>Submit Negative Thoughts</button>
          </form>

        </div>
    </div>
</div>
      <a href="#top" class="goto">
  <span class="glyphicon glyphicon-chevron-up"></span></a>
</div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
 
</footer>
<script>            
	$(document).ready(function() {
		var duration = 500;
		$(window).scroll(function() {
			if ($(this).scrollTop() > 500) {
				$('.goto').fadeIn(duration);
			} else {
				$('.goto').fadeOut(duration);
			}
		});

		$('.goto').click(function(event) {
			event.preventDefault();
			$('html').animate({scrollTop: 0}, duration);
			return false;
		})
	});
</script>	

</body>
</html>
