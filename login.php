<?php
include_once('config.php');

if(isset($_POST['submit'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email=:email AND password=:password";

    $prep = $conn->prepare($sql);

    $prep->bindParam(':email',    $email);
    $prep->bindParam(':password', $password);

    $prep->execute();

    $user = $prep->fetch();

    if($user) {
        $_SESSION['user_id']  = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['is_admin'] = $user['is_admin'];

        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Wrong email or password!";
    }
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
  <title>Hamburger te Reisi - Login</title>
</head>
<body>

<section class="vh-100" style="background: url('images/header-bg.png') center/cover no-repeat;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Login</h3>

            <?php if(isset($error)): ?>
              <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form action="login.php" method="POST">

              <div class="form-outline mb-4">
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required />
              </div>

              <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required />
              </div>

              <button type="submit" name="submit" class="btn btn-danger btn-lg btn-block w-100">Login</button>

              <p class="mt-3">Don't have an account? <a href="signup.php">Sign Up</a></p>

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