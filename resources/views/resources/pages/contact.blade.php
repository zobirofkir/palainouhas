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
              <p class="breadcrumbs">
                  <span class="me-2">
                      <a href="index.html">Home <i class="fa fa-chevron-right"></i></a>
                  </span>
                  <span>Contact <i class="fa fa-chevron-right"></i></span>
              </p>
              <h1 class="mb-0 bread">Contact Us</h1>
          </div>
      </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
      <div class="row no-gutters justify-content-center">
          <div class="col-md-12">
              <div class="wrapper">
                  <div class="row g-0">
                      <!-- Contact Information -->
                      <div class="col-lg-6">
                          <div class="contact-wrap w-100 p-md-5 p-4">
                              <h3>Contact Us</h3>
                              <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                              <div class="row mb-4">
                                  <div class="col-md-4">
                                      <div class="dbox w-100 d-flex align-items-start">
                                          <div class="text">
                                              <p><span>Address:</span> 198 West 21st Street, Suite 721 New York, NY 10016</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="dbox w-100 d-flex align-items-start">
                                          <div class="text">
                                              <p><span>Email:</span> 
                                                  <a href="mailto:email@example.com">
                                                      [email@example.com]
                                                  </a>
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="dbox w-100 d-flex align-items-start">
                                          <div class="text">
                                              <p><span>Phone:</span> 
                                                  <a href="tel:+1235235598">+1235 2355 98</a>
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <form id="contactForm" name="contactForm" class="contactForm">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Create a message here"></textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <input type="submit" value="Send Message" class="btn btn-primary">
                                              <div class="submitting"></div>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                              <div class="w-100 social-media mt-5">
                                  <h3>Follow Us Here</h3>
                                  <p>
                                      <a href="https://facebook.com">Facebook</a>
                                      <a href="https://twitter.com">Twitter</a>
                                      <a href="https://instagram.com">Instagram</a>
                                  </p>
                              </div>
                          </div>
                      </div>
                      <!-- Map Section -->
                      <div class="col-lg-6 d-flex align-items-stretch">
                          <div id="map" class="bg-white"></div>
                      </div>
                  </div>
              </div>
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