<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css" />
  <title>Hamburger te reisi</title>
</head>
<body>

<nav class="custom-navbar">
  <div class="container d-flex align-items-center justify-content-between py-3">
    <div class="nav__logo">
      <a href="#"><img src="images/logo.png" alt="logo" style="width: 140px;"></a>
    </div>

    <input type="checkbox" id="menu-toggle" class="menu-toggle d-none" />
    <label for="menu-toggle" class="nav__menu__btn d-lg-none">
      <i class="ri-menu-line"></i>
    </label>

    <ul class="nav__links mb-0 list-unstyled">
      <li><a href="#home">HOME</a></li>
      <li><a href="#special">SPECIAL</a></li>
      <li><a href="#menu">MENU</a></li>
      <li><a href="#event">EVENTS</a></li>
      <li><a href="#contact">CONTACT US</a></li>
    </ul>
  </div>
</nav>

  <header class="header py-5" id="home">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-start">
          <h2 class="hero-sub p-3 border border-dashed mb-4">GREAT TASTE OF BURGER</h2>
          <h1 class="hero-title">BURGER <span class="d-block text-secondary">WEEK</span></h1>
        </div>
        <div class="col-md-6">
          <img src="images/header.png" class="img-fluid" alt="header">
        </div>
      </div>
    </div>
  </header>

  <section class="container py-5" id="special">
    <div class="row g-3">
      <div class="col-md-6"><div class="banner-card b1 p-4 rounded shadow"><h4>MOST POPULAR</h4></div></div>
      <div class="col-md-3"><div class="banner-card b2 p-4 rounded shadow"><h4>MORE FUN</h4></div></div>
      <div class="col-md-3"><div class="banner-card b3 p-4 rounded shadow"><h4>FRESH & CHILI</h4></div></div>
    </div>
  </section>

  <section class="container py-5 text-center" id="menu">
    <h3 class="bg-warning d-inline-block px-4 py-1 mb-3">ALWAYS TASTY</h3>
    <h2 class="section-header">CHOOSE & ENJOY</h2>
    <div class="row g-4 mt-4">
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-3">
          <img src="images/ChickenBurger.png" class="card-img-top mx-auto" style="max-width:200px">
          <div class="card-body">
            <h4>Chicken Burger</h4>
            <p>The timeless perfection of our Chicken Burger.</p>
            <button class="btn btn-danger px-4">ORDER NOW</button>
          </div>

          <div class="card h-100 border-0 shadow-sm p-3">
          <img src="images/ChickenBurger.png" class="card-img-top mx-auto" style="max-width:200px">
          <div class="card-body">
            <h4>Chicken Burger</h4>
            <p>The timeless perfection of our Chicken Burger.</p>
            <button class="btn btn-danger px-4">ORDER NOW</button>
          </div>
        </div>
        </div>
      </div>
      </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>