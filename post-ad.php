<?php require_once('./php/initialize.php');
    check_signin();
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
  <header class="container-fluid mb-3" style="background-color:#500000">
    <div class="mx-auto container">
      <div class="row">
        <div class="col-md-4 col-12">
          <a href="index.php">
            <img src="images/logo.png" class="img-fluid header-img">
          </a>
        </div>
        <div class="col-md-8 col-12">
          <div class="row mb-md-5">
            <div class="row justify-content-end col-12">
              <div class="align-self-end ">
                <a href="signin.php"><span class="nav-font text-white">login</span></a>
                &nbsp &nbsp
                <a href="signin.php"><span class="nav-font text-white">register</span></a>
              </div>
            </div>

          </div>
          <div class="row align-self-end">
            <nav class="nav col-md-7 col-12">
              <div class="col-4 align-self-end nav-link rounded bg-darkmaroon">
                <a class="text-white" href="account.php">
                  <img src="images/account.png" class="img-fluid">
                  <span class="nav-font">Account</span>
                </a>
              </div>
              <div class="col-4 align-self-end nav-link rounded bg-darkmaroon">
                <a class="text-white" href="bookmark.php">
                  <img src="images/bookmark.png" class="img-fluid">
                  <span class="nav-font">Bookmark</span>
                </a>
              </div>
              <div class="col-4 align-self-end nav-link rounded bg-darkmaroon">
                <a class="text-white" href="post-ad.php">
                  <img src="images/post-ad.png" class="img-fluid">
                  <span class="nav-font">Post Ad</span>
                </a>
              </div>
            </nav>
            <form class="col-md-5 col-12 align-self-end">
                <div class="row">
                  <div class="col-1 d-md-none align-self-center "><img src="images/list.png" class="icon"></div>
                  <div class="input-group col-10">
                    <input class="rounded-left form-control"  placeholder="Search.." name="search" >
                    <div class="input-group-append">
                      <button class="btn btn-secondary" type="submit"><a href=""><img src="images/search.png" class="icon rounded-right img-fluid"></a></button>
                    </div>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </header>

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
