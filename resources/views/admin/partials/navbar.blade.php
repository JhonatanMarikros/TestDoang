<nav class="navbar navbar-expand-lg bg-danger">
  <div class="container">
    <a class="navbar-brand">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" {{ ($title === 'Home') ? 'active' : '' }} href="/adminhome">Home</a>
        <a class="nav-link" {{ ($title === 'Makanan') ? 'active' : '' }} href="/adminmakanan">Makanan</a>
        <a class="nav-link" {{ ($title === 'Minuman') ? 'active' : '' }} href="/adminminuman">Minuman</a>
        <a class="nav-link" {{ ($title === 'Location') ? 'active' : '' }} href="/adminlocations">Location</a>
        <a class="nav-link" {{ ($title === 'Coupon') ? 'active' : '' }} href="/admincoupon">Coupon</a>
      </div>
    </div>
  </div>
</nav>