<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sabaiba Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ URL::asset('/css/section6.css') }}" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" defer></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" defer ></script>

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
          <!-- </div> -->

        <div class="row content">
          <div class="font">
            <div class="label">
              <p class="front">Our Sabaiba Team</p>
                <div class="about-section">
<!-- </div> -->
            <!-- <h2 style="text-align:center">Our Sabaiba Team</h2> -->
              <div class="row">
                <div class="column">
                  <div class="card">
                    <img src="/images/busa.jpg" alt="busa" style="width:100%">
                    <div class="container">
                      <p>Ma. Fatricia Busa</p>
                      <p class="title">Bachelor of Science in </br> Computer Science</p>
                      <p>Third Year Student</p>
                    
                    </div>
                  </div>
                </div>


              
                <div class="column">
                  <div class="card">
                    <img src="/images/jen.jpg" alt="jen" style="width:100%">
                    <div class="container">
                      <p>Jenniveb Dancil</p>
                      <p class="title">Bachelor of Science in </br> Computer Science</p>
                      <p>Third Year Student</p>
                      <!-- <p>jane@example.com</p> -->
                     <!--  <p><button class="button">Contact</button></p> -->
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img src="/images/claire.jpg" alt="claire" style="width:100%">
                    <div class="container">
                      <p>Mary Claire Domingo</p>
                      <p class="title">Bachelor of Science in </br> Computer Science</p>
                      <p>Third Year Student</p>
                      <!-- <p>jane@example.com</p> -->
                     <!--  <p><button class="button">Contact</button></p> -->
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img src="/images/grasya.jpg" alt="grace" style="width:100%">
                    <div class="container">
                      <p>Mary Grace Espinosa</p>
                      <p class="title">Bachelor of Science in </br> Computer Science</p>
                      <p>Third Year Student</p>
                      <!-- <p>jane@example.com</p> -->
                     <!--  <p><button class="button">Contact</button></p> -->
                    </div>
                  </div>
                </div>

                </div>        
            </div>    
          </div>
        </div>
          <a href="#top" class="goto">
            <span class="glyphicon glyphicon-chevron-up"></span></a>
      </div>
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