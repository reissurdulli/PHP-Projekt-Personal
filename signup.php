<?php
include_once('config.php');

if(isset($_POST['submit'])) {
    $emri     = $_POST['emri'];
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (emri, username, email, password, is_admin) 
            VALUES (:emri, :username, :email, :password, 'false')";

    $prep = $conn->prepare($sql);

    $prep->bindParam(':emri',     $emri);
    $prep->bindParam(':username', $username);
    $prep->bindParam(':email',    $email);
    $prep->bindParam(':password', $password);

    $prep->execute();

    header("Location: login.php");
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
  <title>Hamburger te Reisi - Sign Up</title>
</head>
<body>

<section class="vh-100" style="background: url('images/header-bg.png') center/cover no-repeat;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign Up</h3>

            <form action="signup.php" method="POST">

              <div class="form-outline mb-4">
                <input type="text" name="emri" class="form-control form-control-lg" placeholder="Your Name" required />
              </div>

              <div class="form-outline mb-4">
                <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required />
              </div>

              <div class="form-outline mb-4">
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required />
              </div>

              <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required />
              </div>

              <button type="submit" name="submit" class="btn btn-danger btn-lg btn-block w-100">Sign Up</button>

              <p class="mt-3">Already have an account? <a href="login.php">Login</a></p>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>