<?php
  require_once('./php/initialize.php');
  $user_id = $_SESSION["user_id"];
  check_signin($user_id);
  $posts = get_account_post($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Aggie Classified | Account </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<!-- backup comment available down here just copy and use. -->
<!-- -->

<body>
<div class="page-container">
  <!-- Start Header Section -->
  <?php include('./php/header.php'); ?>
  <!-- End Header Section -->

  <section class="containter">
    <div class="container">
      <div class="row">
        <div class="col-12  col-md-12">
          <h2>My Account</h2><br>
          <button type="button" class="btn btn-outline-dark" id="changePasswordButton">Change Password</button>
          <form class="row" action="php/change_password.php" method="post">
            <div class="form-group col-md-4">
              <input type="password" class="form-control" id="newPassword" name="password" placeholder="Password" style="display:none;" required>
            </div>
            <div class="form-group col-md-4">
              <input type="password" class="form-control" id="confirmNewPassword" placeholder="Confirm Password" style="display:none;" required>
              <small class="invalid-feedback"> Oops! Password doesn't match. </small>
            </div>
            <div class="col-md-4">
              <div class="row ml-5">
                <button type="submit" class="btn btn-success col-4" id="submitButton" style="display:none;">Submit</button>
                <button type="button" class="btn btn col-4 offset-1" id="cancelButton" style="display:none;">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <hr>
          <h2>My Posts</h2><br>
          <!-- Start my post section-->
          <div class="d-none d-md-block pl-md-0 pr-md-0 table-responsive col-md-12 rounded" id="post_list">
            <?php include('./php/table_desktop.php'); ?>
          </div>
          <div class="pb-5">
            <?php include('./php/table_mobile.php') ?>
          </div>
          <!-- End my post section-->
          <hr>
        </div>
      </div>
    </div>
  </section>

  <!-- Start desktop post detail overlay-->
  <div class="modal fade" id="postDetailModalDesktop" tabindex="-1" role="dialog" aria-labelledby="postDetailModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 640px;" role="document">
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
          <div class="container">
            <img class="img-fluid" id="postDetailImage">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="deletePostDesktop">Detele Post</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End desktop post detail overlay-->
  <!-- Start mobile post detail overlay-->
  <div class="modal fade" id="postDetailModalMobile" tabindex="-1" role="dialog" aria-labelledby="postDetailModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 640px;" role="document">
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
          <div class="container">
            <img class="img-fluid" id="postDetailImageMobile">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"id="deletePostMobile">Detele Post</button>
        </div>
      </div>
    </div>
  </div>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h5>Categories</h5>
    <ul class="list-unstyled category_ul">
      <li><a class="text-white" href="./index.php?search=">All Categories</a></li>
      <li><a class="text-white" href="./index.php?search=Activity Partners">Activity Partners</a></li>
      <li><a class="text-white" href="./index.php?search=Collections">Collections</a></li>
      <li><a class="text-white" href="./index.php?search=Books">Books</a></li>
      <li><a class="text-white" href="./index.php?search=Electronics">Electronics</a></li>
      <li><a class="text-white" href="./index.php?search=Furniture">Furniture</a></li>
      <li><a class="text-white" href="./index.php?search=Jobs">Jobs</a></li>
      <li><a class="text-white" href="./index.php?search=Lost&Found">Lost&amp;Found</a></li>
      <li><a class="text-white" href="./index.php?search=Carpools">Carpools</a></li>
      <li><a class="text-white" href="./index.php?search=Sublet&Roommates">Sublet&amp;Roommates</a></li>
      <li><a class="text-white" href="./index.php?search=Vehicle">Vehicle</a></li>
    </ul>
  </div>
  <!-- End mobile post detail overlay-->
  <div class="push"></div>
</div>

<!-- Start Footer Section -->
<footer class="footer">
  <div class="container-fluid bg-maroon text-center p-1">
    <span class="text-white">Copyright &copy; Aggie Classified 2018</span>
  </div>
</footer>
<!-- End Footer Section -->

<!-- Load Javascript at end of document to improve performance -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>

<script>
  function myFunction() {var x = document.getElementById("myFile");}
  function openNav() {document.getElementById("mySidenav").style.width = "250px";}
  function closeNav() {document.getElementById("mySidenav").style.width = "0";}
</script>

<!-- JQuery for overlay generation-->
<script>
  $('#postDetailModalDesktop').on('show.bs.modal', function (event) {
  var tr = $(event.relatedTarget) // Button that triggered the modal
  var post = tr.data('post_id') // Extract info from data-* attributes
  var the_post = document.getElementById(post);
  var post_td = the_post.getElementsByTagName("td");
  document.getElementById("postDetailTitle").innerHTML = post_td[6].innerHTML;
  document.getElementById("postDetailDate").innerHTML = post_td[0].innerHTML;
  document.getElementById("postDetailContact").innerHTML = post_td[2].innerHTML;
  document.getElementById("postDetailDesc").innerHTML = post_td[3].innerHTML;
  document.getElementById("postDetailPrice").innerHTML = post_td[1].innerHTML;
  if (post_td[4].innerHTML.length >= 5) {
    document.getElementById("postDetailImage").src = post_td[4].innerHTML;
    document.getElementById("postDetailImage").alt = "Oops! Image did not display properly.";
  } else {
    document.getElementById("postDetailImage").src = "";
    document.getElementById("postDetailImage").alt = "";
  }
  })

  $('#postDetailModalMobile').on('show.bs.modal', function (event) {
  var div = $(event.relatedTarget) // Button that triggered the modal
  var post = div.data('post_id') // Extract info from data-* attributes
  var the_post = document.getElementById(post);
  var post_span = the_post.getElementsByTagName("span");
  document.getElementById("postDetailTitle").innerHTML = post_span[6].innerHTML;
  document.getElementById("postDetailDateMobile").innerHTML = post_span[0].innerHTML;
  document.getElementById("postDetailContactMobile").innerHTML = post_span[2].innerHTML;
  document.getElementById("postDetailDescMobile").innerHTML = post_span[3].innerHTML;
  document.getElementById("postDetailPriceMobile").innerHTML = post_span[1].innerHTML;
  if (post_span[4].innerHTML.length >= 5) {
    document.getElementById("postDetailImageMobile").src = post_span[4].innerHTML;
    document.getElementById("postDetailImageMobile").alt = "Oops! Image did not display properly.";
  } else {
    document.getElementById("postDetailImageMobile").src = "";
    document.getElementById("postDetailImageMobile").alt = "";
  }
  })
</script>

<!-- JQuery Code to show/hide change password inputs-->
<script>
  $("#changePasswordButton").click(function(){
    $('#newPassword').show();
    $('#confirmNewPassword').show();
    $('#cancelButton').show();
    $('#submitButton').show();
    $('#changePasswordButton').hide();
  })

  $("#cancelButton").click(function(){
    $('#newPassword').hide();
    $('#confirmNewPassword').hide();
    $('#cancelButton').hide();
    $('#submitButton').hide();
    $('#changePasswordButton').show();
  })
</script>

<!-- Password Validation Script -->
<script>
  var password = document.getElementById("newPassword")
    , confirm_password = document.getElementById("confirmNewPassword");

  function validatePassword(){
    if(newPassword.value != confirmNewPassword.value) {
      confirmNewPassword.setCustomValidity("Passwords Don't Match");
    } else {
      confirmNewPassword.setCustomValidity('');
    }
  }
  newPassword.onchange = validatePassword;
  confirmNewPassword.onkeyup = validatePassword;
</script>

<script>
$('#postDetailModalDesktop').on('show.bs.modal', function(event) {
  var tr = $(event.relatedTarget); // Button that triggered the modal
  var post = tr.data('post_id'); // Extract info from data-* attributes
  var the_post = document.getElementById(post);
  var post_td = the_post.getElementsByTagName("td");
  var post_id = post_td[5].innerHTML;

  $('#deletePostDesktop').click(function() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "php/delect_post.php?post_id=" + post_id, true);
    xhttp.send();
    if (!alert("Post is deleted successfully!")){
      window.location.reload();
    }
  })
})

$('#postDetailModalMobile').on('show.bs.modal', function(event) {
  var tr = $(event.relatedTarget); // Button that triggered the modal
  var post = tr.data('post_id'); // Extract info from data-* attributes
  var the_post = document.getElementById(post);
  var post_span = the_post.getElementsByTagName("span");
  var post_id = post_span[5].innerHTML;

  $('#deletePostMobile').click(function() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "php/delect_post.php?post_id=" + post_id, true);
    xhttp.send();
    if (!alert("Post is deleted successfully!")){
      window.location.reload();
    }
  })
})
</script>

<script>
  var newPassword = document.getElementById("newPassword");
  function validatePasswordLength(){
    if (newPassword.value.length < 8) {
      newPassword.setCustomValidity("Password need to be at least 8 charasters.");
    } else {
      newPassword.setCustomValidity('');
    }
  }
  newPassword.onkeyup = validatePasswordLength;
</script>

</body>
</html>
