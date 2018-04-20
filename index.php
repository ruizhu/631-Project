<?php
  require_once('./php/initialize.php');
  $user_id = $_SESSION["user_id"];
  check_signin($user_id);
  $keyword = $_POST['search'] ?? $_GET['search'] ?? '';
  $posts = get_latest_20($keyword);
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

<!-- Start desktop layout section-->
<section class="d-none d-md-block container">
  <div class="row">
    <div class="col-md-3 list-group " id="category_list"><!-- Category List Section-->
      <a href="./index.php?search=" class="list-group-item bg-maroongray text-white">All Categories<span class="badge"></span></a>
      <a href="./index.php?search=Activity%20Partners" class="list-group-item bg-maroongray text-white">Activity Partners<span class="badge"></span></a>
      <a href="./index.php?search=Collections" class="list-group-item bg-maroongray text-white">Collections<span class="badge"></span></a>
      <a href="./index.php?search=Books" class="list-group-item bg-maroongray text-white">Books<span class="badge"></span></a>
      <a href="./index.php?search=Electronics" class="list-group-item bg-maroongray text-white">Electronics<span class="badge"></span></a>
      <a href="./index.php?search=Furniture" class="list-group-item bg-maroongray text-white">Furniture<span class="badge"></span></a>
      <a href="./index.php?search=Jobs" class="list-group-item bg-maroongray text-white">Jobs<span class="badge"></span></a>
      <a href="./index.php?search=Lost&Found" class="list-group-item bg-maroongray text-white">Lost&Found<span class="badge"></span></a>
      <a href="./index.php?search=Carpools" class="list-group-item bg-maroongray text-white">Carpools<span class="badge"></span></a>
      <a href="./index.php?search=Sublet&Roommates" class="list-group-item bg-maroongray text-white">Sublet&Roommates<span class="badge"></span></a>
      <a href="./index.php?search=Vehicle" class="list-group-item bg-maroongray text-white">Vehicle<span class="badge"></span></a>
    </div><!-- close category_list Section-->

    <div class="pl-md-0 pr-md-0 table-responsive col-md-9 rounded" id="post_list"><!-- Main List Section-->
      <?php include('./php/table_desktop.php'); ?>
    </div><!-- close post_list  Section-->
  </div><!-- close section row -->
</section>
<!-- *** desktop table goes here***-->
<!-- End desktop layout section-->

<!-- Start mobile layout section-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h5>Categories</h5>
  <ul class="list-unstyled category_ul">
    <li><a class="text-white" href="./index.php?search=">All Categories</a></li>
    <li><a class="text-white" href="./index.php?search=Activity Partners">Activity Partners</a></li>
    <li><a class="text-white" href="./index.php?search=Collections">Collections</a></li>
    <li><a class="text-white" href="./index.php?search=Rooks">Rooks</a></li>
    <li><a class="text-white" href="./index.php?search=Electronics">Electronics</a></li>
    <li><a class="text-white" href="./index.php?search=Furniture">Furniture</a></li>
    <li><a class="text-white" href="./index.php?search=Jobs">Jobs</a></li>
    <li><a class="text-white" href="./index.php?search=Lost&Found">Lost&amp;Found</a></li>
    <li><a class="text-white" href="./index.php?search=Carpools">Carpools</a></li>
    <li><a class="text-white" href="./index.php?search=Sublet&Roommates">Sublet&amp;Roommates</a></li>
    <li><a class="text-white" href="./index.php?search=Vehicle">Vehicle</a></li>
  </ul>
</div>

<?php include('./php/table_mobile.php') ?>
<!-- End mobile layout section-->

<!-- Start post detail overlay-->
<div class="modal fade" id="postDetailModel" tabindex="-1" role="dialog" aria-labelledby="postDetailModelTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php include('./php/post_detail.php'); ?>
    </div>
  </div>
</div>
<!-- End post detail overlay-->

<!-- Load Javascript at end of document to improve performance -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>

<script>
  function myFunction() {
    var x = document.getElementById("myFile");
  }
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  function openOverlay() {
    document.getElementById("overlay").style.display = "block";
  }

  function closeOverlay() {
    document.getElementById("overlay").style.display = "none";
  }
</script>

</body>
</html>
