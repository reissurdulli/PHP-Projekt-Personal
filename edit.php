<?php
include_once('config.php');

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id=:id";
$prep = $conn->prepare($sql);
$prep->bindParam(':id', $id);
$prep->execute();
$product = $prep->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css" />
  <title>Edit Product - Hamburger te Reisi</title>
  <style>
    body { background-color: #f8f9fa; }
    .form-card { max-width: 600px; margin: 60px auto; }
    h2 { font-family: "Bebas Neue", sans-serif; color: #42200b; font-size: 2rem; }
  </style>
</head>
<body>

<div class="container">
  <div class="form-card card shadow p-5">
    <h2 class="mb-4">Edit Product</h2>

    <form action="update.php" method="POST">

      <input type="hidden" name="id" value="<?= $product['id'] ?>">

      <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input type="text" name="product_name" class="form-control" value="<?= $product['product_name'] ?>" required />
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" name="product_desc" class="form-control" value="<?= $product['product_desc'] ?>" required />
      </div>

      <div class="mb-3">
        <label class="form-label">Category</label>
        <select name="product_category" class="form-control" required>
          <option value="burger" <?= $product['product_category'] === 'burger' ? 'selected' : '' ?>>Burger</option>
          <option value="pizza"  <?= $product['product_category'] === 'pizza'  ? 'selected' : '' ?>>Pizza</option>
          <option value="drink"  <?= $product['product_category'] === 'drink'  ? 'selected' : '' ?>>Drink</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Price (€)</label>
        <input type="number" step="0.01" name="product_price" class="form-control" value="<?= $product['product_price'] ?>" required />
      </div>

      <div class="mb-3">
        <label class="form-label">Image path</label>
        <input type="text" name="product_image" class="form-control" value="<?= $product['product_image'] ?>" required />
      </div>

      <button type="submit" name="update" class="btn btn-warning w-100">Update Product</button>
      <a href="dashboard.php" class="btn btn-secondary w-100 mt-2">Cancel</a>

    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>