<?php
  require_once('./php/initialize.php');
  $user_id = $_SESSION["user_id"];
  check_signin($user_id);
  $posts = get_account_post($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Aggie Classified | Home </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>

<!-- backup comment available down here just copy and use. -->
<!-- -->

<body>
<?php include('./header.php'); ?>

<section class="containter">

  <div class="container">
    <div class="row">
      <div class="col-12  col-lg-5">
        <h2>My Account</h2><br>
        <button type="button" class="btn btn-outline-dark" name="button">Change Password</button>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <hr>
        <h2>My Posts</h2><br>

        <?php include('./table.php'); ?>

        <hr>
      </div>
    </div>
  </div>
</section>

</body>
</html>
