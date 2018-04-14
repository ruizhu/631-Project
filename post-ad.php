<?php
  require_once('./php/initialize.php');
  $user_id = $_SESSION["user_id"];
  check_signin($user_id);
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
  <?php include('./header.php'); ?>

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
                    <input type="title" class="form-control" id="title" name="title" aria-describedby="title" placeholder="">
                  </div>
                  <small id="title" class="form-text">A title is required</small>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-group">
                  <label for="title">Price</label>
                  <input type="Price" class="form-control" id="price" name="price" aria-describedby="title" placeholder="">
                  <small id="title" class="form-text">A Price is required</small>
                </div>
              </div>
            </div>
            <div class="space10"></div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-group">
                  <label for="contact">Contact</label>
                  <input type="contact" class="form-control" id="contact" name="contact" aria-describedby="contact" placeholder="">
                  <small id="title" class="form-text">Contact information is required</small>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-group">
                  <label for="category">Category</label>
                  <select class="form-control" name="category">
                    <option disabled selected value style="display:none"> </option>
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
                  <select class="form-control" name="purpose">
                    <option disabled selected value style="display:none"> </option>
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
                  <textarea id="description" name="description" cols="5" rows="5" class="form-control"></textarea>
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
                <h2>New Uploads</h2>
                <hr>
                <div class="upload_file">
                  <button type="button" class="btn btn_upload"> <input type="file" id="myFile"> Upload images... </input></button>
                </div>
                <button type="submit" class="btn btn_upload">Save</button>
                <button type="button"  class="btn btn_cancel">Cancel</button>
                <div class="space20"></div>
              </div>
            </div>
          </form>
        </div>
      </section>

</body>
</html>
