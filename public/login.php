<?php

include __DIR__ . '/../config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - EcoKart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/ecokart/assets/style.css" rel="stylesheet">
</head>
<body>



<div class="container mt-5" style="max-width:500px;">
  <h2 class="text-center mb-4">Login</h2>
  <form action="login_process.php" method="POST">
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-eco w-100">Login</button>
  </form>
</div>

</body>
</html>
