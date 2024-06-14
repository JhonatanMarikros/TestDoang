<header class="header">
  <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
      <div class="container">
          <a class="navbar-brand" href="#">
              <img src="{{ asset('path/to/logo.png') }}" alt="Marugame Udon" class="navbar-logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Menu</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Location</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Coupon</a>
                  </li>
                  @guest
                      <li class="nav-item">
                          <a class="nav-link btn btn-danger text-white" href="{{ route('login') }}">Login/Register</a>
                      </li>
                  @else
                      <li class="nav-item">
                          <a class="nav-link" href="#">Welcome, {{ Auth::user()->name }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link btn btn-danger text-white" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>
                      </li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  @endguest
              </ul>
          </div>
      </div>
  </nav>
</header>
