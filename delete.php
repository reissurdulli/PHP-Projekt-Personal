<?php
include_once('config.php');

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id=:id";
$prep = $conn->prepare($sql);
$prep->bindParam(':id', $id);
$prep->execute();

header("Location: dashboard.php");
exit;
?>