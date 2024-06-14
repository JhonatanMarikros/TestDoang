<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Home</title>
</head>

<body>
    @include('main.partials.navbarMain')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/banner.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/banner2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/banner3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- About Us Section -->
    <section id="about-us" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <p>Marugame Udon provides hand crafted udon bowls, tempura, and beverages from a theater kitchen,
                        allowing guests to watch as their food is prepared. Our udon noodles are made to order to ensure
                        that you are getting the best tasting Japanese food around.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('path/to/image.png') }}" class="img-fluid" alt="About Us Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Additional About Us Section -->
    <section id="about-us-2" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <h2>About Us</h2>
                    <p>Experience the best udon and tempura at Marugame Udon. Our commitment to quality and authentic
                        Japanese flavors is unmatched. Visit us to enjoy a delightful meal prepared fresh in our open
                        kitchen.</p>
                </div>
                <div class="col-md-6 order-md-1">
                    <img src="{{ asset('path/to/image2.png') }}" class="img-fluid" alt="About Us Image 2">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="footer-links">
                        <li><a href="#">Locations</a></li>
                        <li><a href="#">California / Texas Menu</a></li>
                        <li><a href="#">Hawaii Menu</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-center">
                    <p>Download our app for the best prices and loyalty perks.</p>
                    <a href="#"><img src="{{ asset('path/to/appstore.png') }}" alt="App Store"
                            class="app-badge"></a>
                    <a href="#"><img src="{{ asset('path/to/playstore.png') }}" alt="Google Play"
                            class="app-badge"></a>
                </div>
                <div class="col-md-4 text-right">
                    <ul class="social-links">
                        <li><a href="#"><img src="{{ asset('path/to/instagram.png') }}" alt="Instagram">
                                Instagram</a></li>
                        <li><a href="#"><img src="{{ asset('path/to/twitter.png') }}" alt="Twitter"> Twitter</a>
                        </li>
                        <li><a href="#"><img src="{{ asset('path/to/facebook.png') }}" alt="Facebook">
                                Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="content">
</div>
</body>

</html>
