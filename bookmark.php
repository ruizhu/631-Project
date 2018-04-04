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

<section class="container">
  <div class="pl-0 pr-0 table-responsive col-sm-12 rounded" id="post_list"><!-- Main List Section-->
    <table class="col-12 table table-striped table-hover rounded-bottom">
      <tr>
        <td class="list_column_icon"></td>
        <td class="list_column_date">Mar 3</td>
        <td class="list_column_icon"><image src="images/heart.png" class="icon" id="icon_saved"></image></td>
        <td class="list_column_title"><a href="">ISTM 631 Mobile First Book</a></td>
        <td class="list_column_icon"><image src="images/offering.png" class="icon" id="icon_saved"></image></td>
        <td class="list_column_price">$12 or best offer</td>
      </tr>
      <tr>
        <td class="list_column_icon"><image src="images/picture.png" class="icon" id="icon_picture"></image></td>
        <td class="list_column_date">Mar 3</td>
        <td class="list_column_icon"><image src="images/heart.png" class="icon" id="icon_saved"></image></td>
        <td class="list_column_title"><a href="">!!!!! Sublease 2250 Dartmouth 2b2b !!!!!</a></td>
        <td class="list_column_icon"><image src="images/offering.png" class="icon" id="icon_saved"></td>
        <td class="list_column_price"> 550 obo</td>
      </tr>
      <tr>
        <td class="list_column_icon"><image src="images/picture.png" class="icon" id="icon_picture"></image></td>
        <td class="list_column_date">Mar 2</td>
        <td class="list_column_icon"><image src="images/heart.png" class="icon" id="icon_saved"></image></td>
        <td class="list_column_title"><a href="">Need ride to Houston during spring break </a></td>
        <td class="list_column_icon"><img src="images/looking.png" class="icon" id="icon_saved"></td>
        <td class="list_column_price"> share gas </td>
      </tr>
    </table>
  </div><!-- close post_list  Section-->

</section>

</body>
</html>