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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<!-- backup comment available down here just copy and use. -->
<!-- -->

<body style="background-color:#ebebeb;">

<?php include('./php/header.php'); ?>

<!-- Start desktop layout section-->
<section class="container">
  <div class="row">
    <div class="col-md-3 list-group d-none d-md-block" id="category_list"><!-- Category List Section-->
      <a href="./index.php?search=" class="list-group-item bg-maroongray text-white">All Categories</a>
      <a href="./index.php?search=Activity%20Partners" class="list-group-item bg-maroongray text-white">Activity Partners</a>
      <a href="./index.php?search=Collections" class="list-group-item bg-maroongray text-white">Collections</a>
      <a href="./index.php?search=Books" class="list-group-item bg-maroongray text-white">Books</a>
      <a href="./index.php?search=Electronics" class="list-group-item bg-maroongray text-white">Electronics</a>
      <a href="./index.php?search=Furniture" class="list-group-item bg-maroongray text-white">Furniture</a>
      <a href="./index.php?search=Jobs" class="list-group-item bg-maroongray text-white">Jobs</a>
      <a href="./index.php?search=Lost&Found" class="list-group-item bg-maroongray text-white">Lost&Found</a>
      <a href="./index.php?search=Carpools" class="list-group-item bg-maroongray text-white">Carpools</a>
      <a href="./index.php?search=Sublet&Roommates" class="list-group-item bg-maroongray text-white">Sublet&Roommates</a>
      <a href="./index.php?search=Vehicle" class="list-group-item bg-maroongray text-white">Vehicle</a>
    </div><!-- close category_list Section-->

    <div class="d-none d-md-block pl-md-0 pr-md-0 table-responsive col-md-9 rounded" id="post_list"><!-- Main List Section-->
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
<div class="modal fade" id="postDetailModalDesktop" tabindex="-1" role="dialog" aria-labelledby="postDetailModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-maroon">
        <h5 class="text-white" id="postDetailTitle">Post Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <b class="col-3 text-right">Posted</b><div class="col-9 text-left" id="postDetailDate"></div>
        </div>
        <div class="row">
          <b class="col-3 text-right">Contact</b></p><div class="col-9 text-left" id="postDetailContact"></div>
        </div>
        <div class="row">
          <b class="col-md-3 text-md-right">Description</b></p><div class="col-md-9" id="postDetailDesc" style="word-wrap:break-word;"></div>
        </div>
        <div class="row">
          <b class="col-3 text-right">Price</b><p class="col-9 text-left" id="postDetailPrice"></p>
        </div>
        <div class="row">
          <img class="col-12" id="postDetailImage">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default">Bookmark it</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="postDetailModalMobile" tabindex="-1" role="dialog" aria-labelledby="postDetailModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-maroon">
        <h5 class="text-white" id="postDetailTitle">Post Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <b class="col-3 text-right">Posted</b><div class="col-9 text-left" id="postDetailDateMobile"></div>
        </div>
        <div class="row">
          <b class="col-3 text-right">Contact</b></p><div class="col-9 text-left" id="postDetailContactMobile"></div>
        </div>
        <div class="row">
          <b class="col-md-3 text-md-right">Description</b></p><div class="col-md-9" id="postDetailDescMobile" style="word-wrap:break-word;"></div>
        </div>
        <div class="row">
          <b class="col-3 text-right">Price</b><p class="col-9 text-left" id="postDetailPriceMobile"></p>
        </div>
        <div class="row">
          <img class="col-12" id="postDetailImageMobile">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default">Bookmark it</button>
      </div>
    </div>
  </div>
</div>
<!-- End post detail overlay-->

<!-- Load Javascript at end of document to improve performance -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>

<script>
  function myFunction() {var x = document.getElementById("myFile");}

  function openNav() {document.getElementById("mySidenav").style.width = "250px";}
  function closeNav() {document.getElementById("mySidenav").style.width = "0";}
</script>

<script>
  $('#postDetailModalDesktop').on('show.bs.modal', function (event) {
  var tr = $(event.relatedTarget) // Button that triggered the modal
  var post = tr.data('post_id') // Extract info from data-* attributes
  var the_post = document.getElementById(post);
  var post_td = the_post.getElementsByTagName("td");
  document.getElementById("postDetailDate").innerHTML = post_td[0].innerHTML;
  document.getElementById("postDetailContact").innerHTML = post_td[2].innerHTML;
  document.getElementById("postDetailDesc").innerHTML = post_td[3].innerHTML;
  document.getElementById("postDetailPrice").innerHTML = post_td[1].innerHTML;
  document.getElementById("postDetailImage").innerHTML = post_td[4].innerHTML;
  })
  $('#postDetailModalMobile').on('show.bs.modal', function (event) {
  var div = $(event.relatedTarget) // Button that triggered the modal
  var post = div.data('post_id') // Extract info from data-* attributes
  var the_post = document.getElementById(post);
  var post_span = the_post.getElementsByTagName("span");
  document.getElementById("postDetailDateMobile").innerHTML = post_span[0].innerHTML;
  document.getElementById("postDetailContactMobile").innerHTML = post_span[2].innerHTML;
  document.getElementById("postDetailDescMobile").innerHTML = post_span[3].innerHTML;
  document.getElementById("postDetailPriceMobile").innerHTML = post_span[1].innerHTML;
  document.getElementById("postDetailImageMobile").innerHTML = post_span[4].innerHTML;
  })
</script>

</body>
</html>
