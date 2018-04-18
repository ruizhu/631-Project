<header class=" d-none d-md-block">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="list-inline text-right login_ul">
          <li class="list-inline-item">
            <a href="<?php if($user_id) {echo "php/sign out";} else {echo "sign in";}?>.php"><span class="align-self-end nav-font text-white"><?php if($user_id) {echo "signout";} else {echo "signin";}?></span></a>
          </li>
          <!-- <li class="list-inline-item"><a href="#a">register</a></li> -->
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-toggleable-sm navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="material-icons">list</i>
      </button>
      <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive"></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 ml-auto w-100 justify-content-start">
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="material-icons">account_circle</i> account </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="material-icons">bookmark</i> bookmark</a>
          </li>
          <li class="nav-item mright">
            <a class="nav-link" href="#"><i class="material-icons">edit</i> post ad</a>
          </li>
          <li class="nav-item">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search.." aria-label="Search.." aria-describedby="basic-addon2">
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><i class="material-icons">search</i></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<header class=" d-block d-md-none">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive"></a>
      </div>
      <div class="col-4">
        <ul class="list-inline text-right login_ul">
            <li class="list-inline-item"><a href="#a">login</a></li>
          </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-12">

        <ul class="list-inline menu_ul">
          <li class="list-inline-item"><a href="#a"><i class="material-icons">account_circle</i></a></li>
          <li class="list-inline-item"><a href="#a"><i class="material-icons">bookmark</i></a></li>
          <li class="list-inline-item"><a href="#a"><i class="material-icons">edit</i></a></li>
        </ul>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search.." aria-label="Search.." aria-describedby="basic-addon2">
          <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2"><i class="material-icons">search</i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
