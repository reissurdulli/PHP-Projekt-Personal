<?php
include_once('config.php');

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if(isset($_POST['update'])) {
    $id               = $_POST['id'];
    $product_name     = $_POST['product_name'];
    $product_desc     = $_POST['product_desc'];
    $product_category = $_POST['product_category'];
    $product_price    = $_POST['product_price'];
    $product_image    = $_POST['product_image'];

    $sql = "UPDATE products SET 
                product_name=:product_name,
                product_desc=:product_desc,
                product_category=:product_category,
                product_price=:product_price,
                product_image=:product_image
            WHERE id=:id";

    $prep = $conn->prepare($sql);

    $prep->bindParam(':id',               $id);
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