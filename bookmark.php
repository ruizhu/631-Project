<?php
  require_once('./php/initialize.php');
  $user_id = $_SESSION["user_id"];
  check_signin($user_id);
  $posts = get_bookmark($user_id);
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

<body style="background-color:#ebebeb;">
<?php include('./php/header.php'); ?>

<section class="container">
  <div class="pl-0 pr-0 table-responsive col-sm-12 rounded" id="post_list"><!-- Main List Section-->
      <div class="d-none d-md-block pl-md-0 pr-md-0 table-responsive col-md-12 rounded" id="post_list"><!-- Main List Section-->
        <?php include('./php/table_desktop.php'); ?>
      </div><!-- close post_list  Section-->
      <?php include('./php/table_mobile.php'); ?>

  </div><!-- close post_list  Section-->

</section>

</body>
</html>
