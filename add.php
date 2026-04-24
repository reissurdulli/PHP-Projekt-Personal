<?php
include_once('config.php');

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if(isset($_POST['submit'])) {
    $product_name     = $_POST['product_name'];
    $product_desc     = $_POST['product_desc'];
    $product_category = $_POST['product_category'];
    $product_price    = $_POST['product_price'];
    $product_image    = $_POST['product_image'];

    $sql = "INSERT INTO products (product_name, product_desc, product_category, product_price, product_image)
            VALUES (:product_name, :product_desc, :product_category, :product_price, :product_image)";

    $prep = $conn->prepare($sql);

    $prep->bindParam(':product_name',     $product_name);
    $prep->bindParam(':product_desc',     $product_desc);
    $prep->bindParam(':product_category', $product_category);
    $prep->bindParam(':product_price',    $product_price);
    $prep->bindParam(':product_image',    $product_image);

    $prep->execute();

    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css" />
  <title>Add Product - Hamburger te Reisi</title>
  <style>
    body { background-color: #f8f9fa; }
    .form-card { max-width: 600px; margin: 60px auto; }
    h2 { font-family: "Bebas Neue", sans-serif; color: #42200b; font-size: 2rem; }
  </style>
</head>
<body>

<div class="container">
  <div class="form-card card shadow p-5">
    <h2 class="mb-4">Add New Product</h2>

    <form action="add.php" method="POST">

      <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" name="product_name" class="form-control" required />
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" name="product_desc" class="form-control" required />
      </div>

      <div class="mb-3">
        <label class="form-label">Category</label>
        <select name="product_category" class="form-control" required>
          <option value="burger">Burger</option>
          <option value="pizza">Pizza</option>
          <option value="drink">Drink</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Price (€)</label>
        <input type="number" step="0.01" name="product_price" class="form-control" required />
      </div>

      <div class="mb-3">
        <label class="form-label">Image path (e.g. images/coke.png)</label>
        <input type="text" name="product_image" class="form-control" required />
      </div>

      <button type="submit" name="submit" class="btn btn-danger w-100">Add Product</button>
      <a href="dashboard.php" class="btn btn-secondary w-100 mt-2">Cancel</a>

    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>