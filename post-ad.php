<?php
  require_once('./php/initialize.php');
  $user_id = $_SESSION["user_id"];
  check_signin($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Aggie Classified | Post Ad </title>
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

  <section class="post_ad">
    <div class="container">
      <form action="php/create_post.php" method="post">
        <div class="row">
          <div class="col-12">
            <h2>Post Ad</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <label for="title">Ad Title</label>
              <div class="title_text">
                <input type="title" class="form-control" id="title" name="title" aria-describedby="title" placeholder="" maxlength="50" required>
              </div>
              <small id="title" class="form-text">A title is required</small>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <label for="title">Price</label>
              <input type="Price" class="form-control" id="price" name="price" aria-describedby="title" placeholder="" maxlength="20" required>
              <small id="title" class="form-text">A Price is required</small>
            </div>
          </div>
        </div>
        <div class="space10"></div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <label for="contact">Contact</label>
              <input type="contact" class="form-control" id="contact" name="contact" aria-describedby="contact" placeholder="" maxlength="30" required>
              <small id="title" class="form-text">Contact information is required</small>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control" name="category" style="height: 45px;" required>
                <option class="text-grey" disabled selected value style="display:none">Choose a category of this Ad</option>
                <option>Activity Partners</option>
                <option>Collections</option>
                <option>Books</option>
                <option>Electronics</option>
                <option>Furniture</option>
                <option>Jobs</option>
                <option>Lost&Found</option>
                <option>Carpools</option>
                <option>Sublet&Roommates</option>
                <option>Vehicle</option>
              </select>
            </div>
          </div>
        </div>
        <div class="space10"></div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <label for="purpose">Ad Purpose</label>
              <select class="form-control" name="purpose" style="height: 45px;" required>
                <option class="text-grey" disabled selected value style="display:none">Choose a purpose of this Ad</option>
                <option>Looking</option>
                <option>Selling</option>
              </select>
            </div>
          </div>
        </div>
        <div class="space10"></div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="title">Ad Description</label>
              <textarea id="description" name="description" cols="5" rows="4" class="form-control" style="height: 150px;"></textarea>
              <!-- <small id="title" class="form-text">A Description is required</small> -->
            </div>
          </div>
        </div>
        <div class="space10"></div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="title">Images URL</label>
              <input type="Images" class="form-control" id="title" name="image" aria-describedby="title" placeholder="">
            </div>
          </div>
        </div>
        <div class="space10"></div>
        <div class="row">
          <div class="col-12">
            <!-- <h2>New Uploads</h2>
            <hr>
            <div class="upload_file">
              <button type="button" class="btn btn_upload"> <input type="file" id="myFile"> Upload images... </input></button>
            </div> -->
            <button type="submit" class="btn btn_upload">Post</button>
            <button type="cancel" class="btn btn_cancel">Cancel</button>
            <hr>
            <div class="space20"></div>
          </div>
        </div>
      </form>
    </div>
  </section>
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
  <div class="push"></div>
</div>
<!-- Start Footer Section -->
<footer class="footer">
  <div class="container-fluid bg-maroon text-center p-1">
    <span class="text-white">Copyright &copy; Aggie Classified 2018</span>
  </div>
</footer>
<!-- End Footer Section -->

<script>
  function myFunction() {var x = document.getElementById("myFile");}
  function openNav() {document.getElementById("mySidenav").style.width = "250px";}
  function closeNav() {document.getElementById("mySidenav").style.width = "0";}
</script>

</body>
</html>
