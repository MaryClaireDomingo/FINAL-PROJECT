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
            <p>The Sabaiba Website was created in the year 2021. <br/>
                Sabaiba means “survivor” in Japanese language.  <br/>
                The team Sabaiba who created the website wants to have a site where <br/>
                the user can share their story and read others' stories.<br/>
                The difference of the Sabaiba website in other social media platforms is that the user <br/>
                can only read other’s posts, create their posts and delete them<br/>
                The creator of the website purposely doesn't add any comment section <br/>
                or any like icon because the purpose of the website is where the user can share their <br/>
                thoughts and feelings, not judging user can share their thoughts and feelings, not judging others’ story.<br/>
                The Sabaiba team believes that if we cannot tell someone what is bothering us or what is <br/>
                happening to us, you can type it in the website and post it. It is much better to let out your <br/>
                thoughts by writing than overthinking the problems.<br/>
                BUT THE SABAIBA TEAM STILL ENCOURAGES EVERYONE TO TALK TO SOMEONE AND OPEN UP. BE HAPPY :)<br/>
                <br/>
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