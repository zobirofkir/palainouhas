<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ config('app.name') }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/tiny-slider.css">
<link rel="stylesheet" href="css/glightbox.min.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/datepicker.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg  ftco-navbar-light">
    @include('resources.components.navbar');
</nav>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');">
  <div class="overlay"></div>
  <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 pt-5 text-center">
              <p class="breadcrumbs"><span class="me-2"><a href="{{ url('/') }}">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
              <h1 class="mb-0 bread">Notre Blog</h1>
          </div>
      </div>
  </div>
</section>

@include('resources.components.blog')

  @include('resources.components.footer')

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/glightbox.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/datepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-23581568-13');
        </script>
</body>
</html>