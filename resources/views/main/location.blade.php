<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <!-- Link ke gambar dari Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/location.css') }}">
    <title>Location</title>
</head>

<body>
    @include('main.partials.navbarMain')

    <div class="container">
        <h1 class="mt-5">{{ $title }}</h1>
        @foreach ($locations as $location)
            <div class="location-card">
                <div class="location-info">
                    <h2>{{ $location->name }}</h2>
                    <p>{{ $location->description }}</p>
                    <p><strong>Hours of Operation:</strong></p>
                    <p>Mon Sat 10:30am-9pm</p>
                    <p>Sunday 10:30am - 9pm</p>
                    <button class="btn btn-danger btn-order"><a href="https://wa.me/+6288807069499">RESERVATION
                            NOW</a></button>
                </div>
                <div class="location-map">
                    @if ($location->image)
                        <img src="{{ asset('storage/' . $location->image) }}" alt="Location Image">
                    @else
                        <img src="{{ asset('path/to/your/default/map/image.png') }}" alt="Default Map Image">
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    <footer class="site-footer">
        <div class="container3">
            <div class="row">
                <div class="col-md-3">
                    <!-- Bagian Delivery bagian footer -->
                    <div class="delivery">
                        <h3>Delivery Service</h3>
                        <div class="image">
                            <img src="{{ asset('image/gofood.jpg') }}" alt="GoFood">
                        <img src="{{ asset('image/grabfood.jpg') }}" alt="GrabFood">
                        <img src="{{ asset('image/shopee.jpg') }}" alt="Shopee">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Bagian tentang kami bagian footer -->
                    <div class="tentang-kami">
                        <h3>Golden Grain</h3>
                        <p>Jl. Letjen S. Parman No.1 3, RT.3/RW.8, Tomang, Kec. Grogol petamburan, Kota Jakarta Barat,
                            Daerah Khusus Ibukota Jakarta 11440</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Bagian Delivery faq bagian footer -->
                    <div class="faq">
                        <h3>FAQ</h3>
                        <p>Frequently Asked Question</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="social-media">
                        <h3>Social Media</h3>
                        <div class="social-icons">
                            <span class="facebook"><i class="ri-facebook-line"></i></span>
                            <span class="instagram"><i class="ri-instagram-line"></i></span>
                        </div>
                        <div class="by">
                            @2024 Powered by Golden Grain.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
