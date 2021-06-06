<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sabaiba Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ URL::asset('/css/section5.css') }}" />
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
              <a href="{{url('section5')}}">About</a>
              <a href="{{url('section6')}}">Contact </a>
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

          <div class="row content">
        <div class="font">
            <div class="label">
            <h1 class="front">~~~ About Sabaiba ~~~</h1>
            <p>Since 1999, Internet Marketing Ninjas has mastered <br/>
            the art of creating expert content that goes viral, earns trusted links, <br/>
            and ranks at the top of Google. Looking to transform your content marketing strategy? <br/>
            Learn how our Ninja team can help by scheduling a FREE consultation today.<br/>
            
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


  function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }
</script>	

</body>
</html>