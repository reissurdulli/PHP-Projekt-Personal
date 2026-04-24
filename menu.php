<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css" />
  <title>Menu - Hamburger te Reisi</title>
</head>
<body>

<nav class="custom-navbar">
  <div class="container d-flex align-items-center justify-content-between py-3">
    <div class="nav__logo">
      <a href="index.php"><img src="images/logo.png" alt="logo" style="width: 140px;"></a>
    </div>

    <input type="checkbox" id="menu-toggle" class="menu-toggle d-none" />
    <label for="menu-toggle" class="nav__menu__btn d-lg-none">
      <i class="ri-menu-line"></i>
    </label>

    <ul class="nav__links mb-0 list-unstyled">
      <li><a href="index.php">HOME</a></li>
      <li><a href="menu.php">MENU</a></li>
      <li><a href="index.php#contact">CONTACT US</a></li>
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

<?php
$categories = [
    'burger' => 'Burgers (Hamburgerat)',
    'pizza'  => 'Pizzas (Picat)',
    'drink'  => 'Drinks (Pijet)'
];

foreach($categories as $key => $label):
    $sql = "SELECT * FROM products WHERE product_category = :category";
    $prep = $conn->prepare($sql);
    $prep->bindParam(':category', $key);
    $prep->execute();
    $items = $prep->fetchAll();
?>

<section class="container py-5 text-center">
  <h3 class="bg-warning d-inline-block px-4 py-1 mb-3"><?= $label ?></h3>
  <div class="row g-4 mt-2">
    <?php if(count($items) > 0): ?>
      <?php foreach($items as $item): ?>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-3">
          <img 
            src="<?= $item['product_image'] ?>" 
            class="card-img-top mx-auto" 
            style="max-width:200px; height:180px; object-fit:contain;"
            alt="<?= $item['product_name'] ?>"
          >
          <div class="card-body">
            <h4><?= $item['product_name'] ?></h4>
            <p class="text-muted small"><?= $item['product_desc'] ?></p>
            <p class="fw-bold fs-5"><?= number_format($item['product_price'], 2) ?> &euro;</p>
            <button class="btn btn-danger px-4">ORDER NOW</button>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p class="text-muted">No items in this category yet.</p>
    <?php endif; ?>
  </div>
</section>

<?php endforeach; ?>

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
        <p><a href="index.php" class="text-white text-decoration-none">Home</a></p>
        <p><a href="menu.php" class="text-white text-decoration-none">Menu</a></p>
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