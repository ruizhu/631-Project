<?php
  require_once('./php/initialize.php');
?>

<!doctype html>
<html lang="en">
<head>
  <title>Aggie Classified | Sign In </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="images/logo.png">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/cover.css">
</head>

<body class="text-center">
  <form class="form-signin" action="php/signin.php" method="post">
    <img class="mb-4" src="images/logo.png" alt="" width="270" height="90">
    <h1 class="h3 mb-3 font-weight-normal text-white">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="example@tamu.edu" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3 text-white">
      <label>
        <a class="register_link text-white" href="register.php">New user? Register Here!</a>
      </label>
    </div>
    <button class="btn btn-lg btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
  </form>
</body>
</html>
