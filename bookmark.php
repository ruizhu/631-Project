<?php
  require_once('./php/initialize.php');
  $user_id = $_SESSION["user_id"];
  check_signin($user_id);
  $posts = get_bookmark($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Aggie Classified | Bookmark </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<!-- backup comment available down here just copy and use. -->
<!-- -->

<body>
<!-- Start Header Section -->
<?php include('./php/header.php'); ?>
<!-- End Header Section -->

<section class="container">
  <div class="pl-0 pr-0 table-responsive col-sm-12 rounded" id="post_list">

      <!-- Start bookmark table section for desktop-->
      <div class="d-none d-md-block pl-md-0 pr-md-0 table-responsive col-md-12 rounded" id="post_list">
        <?php include('./php/table_desktop.php'); ?>
      </div>
      <!-- End bookmark table section for desktop-->

      <!-- Start bookmark table section for mobile-->
      <?php include('./php/table_mobile.php'); ?>
      <!-- End bookmark table section for mobile-->
  </div>
</section>

</body>
</html>
