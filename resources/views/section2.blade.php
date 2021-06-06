<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sabaiba Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ URL::asset('/css/section2.css') }}" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="jumbotron text-center" style="margin-bottom:0">
 
</div>
<div class="navigation">
            <div class="dropdown" style="float:right;">
              <a class="glyphicon glyphicon-menu-hamburger"></a>
              <div class="dropdown-content">
              <a href="{{url('section5')}}">About</a>
              <a href="{{url('section6')}}">Contact</a>
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

  <div class="row content">
        

        <div class="font">
          <div class="label">
            <p class="front">Might be your own Story</p>
          </div>

          @if (session('success'))
            <script>
              alert('Successfully Deleted');
            </script>
          @endif

          
          @if ($stories->count())
            @foreach ($stories as $story)
              @if ($story->type == "Inspirational")
                <div class="text-container">
                  <input type="text" disabled value="{{ $story->title }}">
                  <textarea rows="15" cols="50" disabled>{{ $story->body }}</textarea>
                  <form action="{{ route('delete', $story->id) }}" method="POST">
                    @csrf
                    <button> Delete Story </button>
                  </form>
                </div>                  
              @endif
            @endforeach
          @endif



        </div>
        
    </div>
</div>
      <a href="#top" class="goto">
  <span class="glyphicon glyphicon-chevron-up"></span></a>
</div>
    
  </div>
</div>

<footer class="container-fluid">
  
 
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
