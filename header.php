<!-- Start Header section for desktop-->
<header class="container-fluid mb-3 d-none d-md-block bg-maroon">
  <div class="mx-auto container pl-0 pr-0">
    <div class="row">
      <div class="col-4">
        <a href="index.php"><img src="images/logo.png" class="img-fluid header-img"></a>
      </div>
<<<<<<< HEAD
      <div class="col-8 align-self-stretch">
        <div class="row justify-content-end align-self-start mr-0">
          <div class="nav-link bg-darkmaroon">
              <a class="text-white" href="<?php if($user_id) {echo "php/sign out";} else {echo "sign in";}?>.php"><span class="text-white"><?php if($user_id) {echo "signout";} else {echo "signin";}?></span></a>
=======
      <div class="col-md-8 col-12">
        <div class="row mb-md-5">
          <div class="row justify-content-end col-12">
            <div class="align-self-end ">
              <a href="<?php if($user_id) {echo "php/signout";} else {echo "signin";}?>.php"><span class="align-self-end nav-font text-white"><?php if($user_id) {echo "Sign out";} else {echo "Sign in";}?></span></a>
            </div>
>>>>>>> b5422c62267ea00ef2f003c234f64f7f2307ed67
          </div>
        </div>
        <div class="row mt-4 pt-1">
          <nav class="nav col-7 pr-0">
            <div class="col-4 nav-link rounded bg-darkmaroon">
              <a class="text-white d-flex align-self-center justify-content-center pt-1" href="account.php">
                <i class="material-icons">account_circle</i>&nbsp;Account</a>
            </div>
            <div class="col-4 nav-link rounded bg-darkmaroon">
              <a class="text-white d-flex align-self-center justify-content-center pt-1" href="bookmark.php">
                <i class="material-icons">bookmark</i>&nbsp;Bookmark</a>
            </div>
            <div class="col-4 nav-link rounded bg-darkmaroon">
              <a class="text-white d-flex align-self-center justify-content-center pt-1" href="post-ad.php">
                <i class="material-icons">edit</i>&nbsp;Post Ad</a>
            </div>
          </nav>
<<<<<<< HEAD
          <form class="col-5 align-self-end mb-0">
            <div class="input-group">
              <input class="rounded-left form-control"  placeholder="Search.." name="search" >
              <div class="input-group-append">
                <a href=""><button class="btn btn-secondary" type="submit"><i class="material-icons ">search</i></button></a>
=======
          <form class="col-md-5 col-12 align-self-end" action="index.php" method="post">
              <div class="row">
                <div class="col-1 d-md-none align-self-center "><img src="images/list.png" class="icon"></div>
                <div class="input-group col-10">
                  <input class="rounded-left form-control"  placeholder="Search.." name="search" >
                  <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit"><img src="images/search.png" class="icon rounded-right img-fluid"></button>
                  </div>
                </div>
>>>>>>> b5422c62267ea00ef2f003c234f64f7f2307ed67
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End Header section for desktop-->
<!-- Start Header section for mobile-->
<header class="container-fluid mb-3 d-block d-md-none bg-maroon">
  <div class="row">
    <div class="col-9">
      <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid header-img"></a>
    </div>
    <div class="col-3 pl-0 pr-0">
      <div class="nav-link bg-darkmaroon">
          <a class="text-white" href="<?php if($user_id) {echo "php/sign out";} else {echo "sign in";}?>.php"><span class="text-white"><?php if($user_id) {echo "signout";} else {echo "signin";}?></span></a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-4 nav-link bg-darkmaroon">
      <a class="text-white d-flex align-self-center justify-content-center pt-1" href="account.php">
        <i class="material-icons">account_circle</i></a>
    </div>
    <div class="col-4 nav-link bg-darkmaroon">
      <a class="text-white d-flex align-self-center justify-content-center pt-1" href="bookmark.php">
        <i class="material-icons">bookmark</i></a>
    </div>
    <div class="col-4 nav-link bg-darkmaroon">
      <a class="text-white d-flex align-self-center justify-content-center pt-1" href="post-ad.php">
        <i class="material-icons md-light">edit</i></a>
    </div>
  </div>
  <div class="row mt-1">
    <button class="col-2 navbar-toggler bg-darkmaroon ml-2 mb-1" onclick="openNav()">
      <i class="material-icons md-light">list</i>
    </button>
    <form class="col-9 align-self-end pl-0 pr-0 mb-1">
      <div class="input-group">
        <input class="rounded-left form-control"  placeholder="Search.." name="search" >
        <div class="input-group-append">
          <a href=""><button class="btn btn-secondary" type="submit"><i class="material-icons">search</i></button></a>
        </div>
      </div>
    </form>
  </div>
</header>
<!-- End Header section for mobile-->
