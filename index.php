<?php
  require_once('./php/initialize.php');
  $user_id = $_SESSION["user_id"];
  check_signin($user_id);
  $search = $_POST['search'] ?? '';
  $posts = get_latest_20();
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
<section class="container">
  <div class="row">
    <div class="col-md-3 list-group" id="category_list"><!-- Category List Section-->
      <a href="#" class="list-group-item bg-gray text-white">All Categories<span class="badge"></span></a>
      <a href="#" class="list-group-item bg-gray text-white">Activity Partners<span class="badge">(36)</span></a>
      <a href="#" class="list-group-item bg-gray text-white">Collections<span class="badge">(16)</span></a>
      <a href="#" class="list-group-item bg-gray text-white">Books<span class="badge">(39)</span></a>
      <a href="#" class="list-group-item bg-gray text-white">Electronics<span class="badge">(223)</span></a>
      <a href="#" class="list-group-item bg-gray text-white">Furniture<span class="badge">(171)</span></a>
      <a href="#" class="list-group-item bg-gray text-white">Jobs<span class="badge">(131)</span></a>
      <a href="#" class="list-group-item bg-gray text-white">Lost&Found<span class="badge">(30)</span></a>
      <a href="#" class="list-group-item bg-gray text-white">Carpools<span class="badge">(135)</span></a>
      <a href="#" class="list-group-item bg-gray text-white">Sublet&Roommates<span class="badge">(680)</span></a>
      <a href="#" class="list-group-item bg-gray text-white">Vehicle<span class="badge">(68)</span></a>
    </div><!-- close category_list Section-->

    <div class="pl-md-0 pr-md-0 table-responsive col-md-9 rounded" id="post_list"><!-- Main List Section-->
      <?php include('./table.php'); ?>

    </div><!-- close post_list  Section-->
  </div><!-- close section row -->
</section>

</body>
</html>
