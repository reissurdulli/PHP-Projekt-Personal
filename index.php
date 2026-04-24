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

<!-- mdbootstrap navbar -->
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
  <li><a href="menu.php">MENU</a></li>
  <li><a href="#contact">CONTACT US</a></li>
  <?php if(isset($_SESSION['user_id'])): ?>
    <?php if($_SESSION['is_admin'] === 'true'): ?>
      <li><a href="dashboard.php">DASHBOARD</a></li>
    <?php endif; ?>
    <li><a href="logout.php">LOGOUT</a></li>
  <?php else: ?>
    <li><a href="login.php">LOGIN</a></li>
    <li><a href="signup.php">SIGN UP</a></li>
  <?php endif; ?>
</ul>
  </div>
</nav>

  <header class="header py-5" id="home">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-start">
          <h2 class="hero-sub p-3 border border-dashed mb-4">BEST BURGERS IN PRISHTINA</h2>
          <h1 class="hero-title">BURGER <span class="d-block text-secondary">WEEK DEAL</span></h1>
        </div>
        <div class="col-md-6">
          <img src="images/header.png" class="img-fluid" alt="header">
        </div>
      </div>
    </div>
  </header>


<!-- kto kards qe jon per me bo order -->
<section class="container py-5 text-center" id="menu">
  <h3 class="bg-warning d-inline-block px-4 py-1 mb-3">ALWAYS TASTY</h3>
  <h2 class="section-header">CHOOSE & EAT</h2>
  
  <div class="row g-4 mt-4">
    
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm p-3">
        <img src="images/ChickenBurger.png" class="card-img-top mx-auto" style="max-width:200px">
        <div class="card-body">
          <h4>Chicken Burger</h4>
          <p>2.50 &euro;</p>
          <button class="btn btn-danger px-4">ORDER NOW</button>
        </div>
      </div>
    </div> 
    
        <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm p-3">
        <img src="images/picaMargarita.png" class="card-img-top mx-auto" style="max-width:200px">
        <div class="card-body">
          <h4>Pizza Margarita</h4>
          <p>4 &euro;</p>
          <button class="btn btn-danger px-4">ORDER NOW</button>
        </div>
      </div>
    </div> 


    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm p-3">
        <img src="images/pomfrit.png" class="card-img-top mx-auto" style="max-width:200px">
        <div class="card-body">
          <h4>Fries</h4>
          <p>1.5 &euro;</p>
          <button class="btn btn-danger px-4">ORDER NOW</button>
        </div>
      </div>
    </div> </div> <div class="mt-5">
    <a href="#" class="btn btn-danger px-4">SEE MORE</a>
  </div>
</section>
  

<!-- mdbootstrap footer -->
<footer class="bg-dark text-white pt-5 pb-4" id="contact">
  <div class="container text-center text-md-start">
    <div class="row text-center text-md-start">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <img src="images/logo.png" alt="logo" style="width: 120px;" class="mb-3">
        <p class="small text-secondary">
          Serving the tastiest burgers and pizzas in the heart of Prishtina. Quality ingredients, fast service, and always tasty.
        </p>
      </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Quick Links</h5>
        <p><a href="#home" class="text-white text-decoration-none">Home</a></p>
        <p><a href="#menu" class="text-white text-decoration-none">Menu</a></p>
      </div>
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
        <p><i class="ri-map-pin-2-fill me-2 text-danger"></i> Prishtina, Kosovo</p>
        <p><i class="ri-mail-fill me-2 text-danger"></i> info@hamburgertereisi.com</p>
        <p><i class="ri-phone-fill me-2 text-danger"></i> +383 46124798</p>
      </div>
    </div>
    <hr class="mb-4 mt-5 border-secondary">
    <div class="row align-items-center">
      <div class="col-md-7 col-lg-8">
        <p class="small">© 2026 Copyright: 
          <a href="#" class="text-warning text-decoration-none"><strong>Hamburger te Reisi</strong></a>
        </p>
      </div>
      <div class="col-md-5 col-lg-4">
        <div class="text-center text-md-end">
          <ul class="list-unstyled list-inline mb-0">
            <li class="list-inline-item">
              <a href="facebook.com" class="btn btn-outline-warning btn-sm rounded-circle text-white px-2 py-1"><i class="ri-facebook-fill"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="instagram.com" class="btn btn-outline-warning btn-sm rounded-circle text-white px-2 py-1"><i class="ri-instagram-line"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="x.com" class="btn btn-outline-warning btn-sm rounded-circle text-white px-2 py-1"><i class="ri-twitter-x-line"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>