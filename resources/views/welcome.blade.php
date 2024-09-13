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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    @include('resources.components.navbar')
</nav>
    
<section class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
                <span class="subheading">Profitez de vos merveilleuses vacances avec une expérience de luxe exceptionnelle!</span>
                <h1 class="mb-4">Endroit le plus relaxant</h1>
                <p>
                    <a href="#" class="btn btn-primary p-4 py-3" data-bs-toggle="modal" data-bs-target="#tourModal1">
                        Faites Un Tour <span class="ion-ios-arrow-round-forward"></span>
                    </a> 
                </p>
            </div>
        </div>
    </div>
</section>

@include('resources.components.take-tour')

@include('resources.components.reservation')

@include('resources.components.abouts')


@include('resources.components.services')


@include('resources.components.rooms')

@include('resources.components.tour')

@include('resources.components.menu')

@include('resources.components.single-blog')

<section class="ftco-gallery">
<div class="container-fluid">
<div class="row g-3">
<div class="col-md" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
<a href="images/gallery-1.jpg" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url(images/gallery-1.jpg);">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
</a>
</div>
<div class="col-md" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
<a href="images/gallery-1.jpg" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url(images/gallery-2.jpg);">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
</a>
</div>
<div class="col-md" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
<a href="images/gallery-3.jpg" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url(images/gallery-3.jpg);">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
</a>
</div>
<div class="col-md" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
<a href="images/gallery-4.jpg" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url(images/gallery-4.jpg);">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
</a>
</div>
<div class="col-md" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
<a href="images/gallery-5.jpg" class="gallery-wrap img d-flex align-items-center justify-content-center glightbox" style="background-image: url(images/gallery-5.jpg);">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
</a>
</div>
</div>
</div>
</section>

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