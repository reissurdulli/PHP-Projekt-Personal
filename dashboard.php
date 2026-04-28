<?php
include_once('config.php');

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if($_SESSION['is_admin'] !== 'true') {
    header("Location: index.php");
    exit;
}
$sql = "SELECT * FROM products";
$getProducts = $conn->prepare($sql);
$getProducts->execute();
$products = $getProducts->fetchAll();

$sql2 = "SELECT * FROM users";
$getUsers = $conn->prepare($sql2);
$getUsers->execute();
$users = $getUsers->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css" />
  <title>Dashboard - Hamburger te Reisi</title>
  <style>
    body { background-color: #f8f9fa; }
    .sidebar {
      min-height: 100vh;
      background-color: #42200b;
      color: white;
      padding: 2rem 1rem;
    }
    .sidebar a {
      color: #ffc135;
      text-decoration: none;
      display: block;
      padding: 0.6rem 1rem;
      border-radius: 6px;
      font-family: "Bebas Neue", sans-serif;
      font-size: 1.2rem;
      transition: 0.3s;
    }
    .sidebar a:hover { background-color: rgba(255,255,255,0.1); }
    .sidebar .logo { font-size: 1.5rem; font-weight: bold; color: #ffc135; margin-bottom: 2rem; }
    .dash-card { border-left: 5px solid #42200b; border-radius: 8px; }
    th { background-color: #42200b; color: white; }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">

    

    <!-- Main content -->
    <div class="col-md-10 p-4">

      


      <!-- Products Table -->
      <div id="products-section" class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 style="font-family: 'Bebas Neue', sans-serif; color: #42200b;">Products</h4>
          <a href="add.php" class="btn btn-danger btn-sm">+ Add Product</a>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-hover shadow-sm bg-white">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($products as $product): ?>
              <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['product_name'] ?></td>
                <td><?= ucfirst($product['product_category']) ?></td>
                <td><?= $product['product_price'] ?> €</td>
                <td><img src="<?= $product['product_image'] ?>" style="width:50px; height:50px; object-fit:cover;"></td>
                <td><a href="edit.php?id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Edit</a></td>
                <td><a href="delete.php?id=<?= $product['id'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Users Table -->
      <div id="users-section">
        <h4 class="mb-3" style="font-family: 'Bebas Neue', sans-serif; color: #42200b;">Users</h4>
        <div class="table-responsive">
          <table class="table table-bordered table-hover shadow-sm bg-white">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($users as $user): ?>
              <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['emri'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                  <?php if($user['is_admin'] === 'true'): ?>
                    <span class="badge bg-danger">Admin</span>
                  <?php else: ?>
                    <span class="badge bg-secondary">User</span>
                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <a href="logout.php"><i class="ri-logout-box-line me-2"></i>Logout</a>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>