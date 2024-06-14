<header class="header">

    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('path/to/logo.png') }}" alt="Marugame Udon" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/location">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/coupon">Coupon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger text-white" href="/login">Login/Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
