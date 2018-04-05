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

<body>
<?php include('./header.php'); ?>

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
