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
<!-- Start Header Section -->
<?php include('./php/header.php'); ?>
<!-- End Header Section -->

<section class="containter">
  <div class="container">
    <div class="row">
      <div class="col-12  col-md-12">
        <h2>My Account</h2><br>
        <button type="button" class="btn btn-outline-dark" id="changePasswordButton">Change Password</button>
        <form class="row">
          <div class="form-group col-md-4">
            <input type="password" class="form-control" id="newPassword" placeholder="Password" style="display:none;" required>
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
        <?php include('./php/table_mobile.php'); ?>
        <!-- End my post section-->
        <hr>
      </div>
    </div>
  </div>
</section>



<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>

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

</body>
</html>
