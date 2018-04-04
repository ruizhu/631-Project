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

<section class="containter">

  <div class="container">
    <div class="row">
      <div class="col-12  col-lg-5">
        <h2>My Account</h2><br>
        <button type="button" class="btn btn-outline-dark" name="button">Change Password</button>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <hr>
        <h2>My Posts</h2><br>
        <p>You do not have any posted yet.</p>
        <hr>
      </div>
    </div>
  </div>
</section>

</body>
</html>