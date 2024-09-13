<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            font-family: 'Nunito', sans-serif;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            border-bottom: 2px solid #635400;
        }
        .navbar-brand {
            font-weight: 700;
        }
        .navbar-nav .nav-link {
            color: #ffffff !important;
        }
        .navbar-nav .nav-link:hover {
            color: #d4d4d4 !important;
        }
        #sidebar {
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
            transition: all 0.3s;
        }
        .sidebar-hidden {
            transform: translateX(-100%);
        }
        .sidebar-visible {
            transform: translateX(0);
        }
        .sidebar-heading {
            font-weight: 600;
            padding: 10px;
            text-transform: uppercase;
            color: #343a40;
        }
        .nav-link.active {
            background-color: #635400;
            color: #ffffff !important;
        }
        footer {
            background-color: #635400;
            color: #ffffff;
            border-top: 2px solid #635400;
            text-align: center;
            padding: 10px;
            margin-top: auto;
        }
        .container-fluid {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar with Toggle Button -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #635400">
        <div class="container-fluid">
           <a href="{{ route('admin.users.index') }}" class="navbar-brand">
                <h3 class="text-center text-white">{{config('app.name')}}</h3>
            </a>

            <div class="d-flex ms-auto">
                <button class="btn btn-primary" id="sidebarToggle">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid d-flex flex-column">
        <div class="row flex-grow-1">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar sidebar-hidden">
                <div class="position-sticky">
                    <h4 class="sidebar-heading">Sidebar</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.users.index') }}">
                                Users
                            </a>
                        </li>
                        <!-- Add more sidebar links here -->
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main role="main" class="col-md-9 ms-sm-auto col-lg-10 px-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer>
       <a href="{{ route('admin.users.index') }}" class="text-white">
            <p>&copy; {{ date('Y') }} {{config('app.name')}}. All rights reserved.</p>
        </a>

    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'UA-23581568-13');
    </script>

    <!-- Sidebar Toggle Script -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');

        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('sidebar-hidden');
            sidebar.classList.toggle('sidebar-visible');
        });
    </script>
</body>
</html>
