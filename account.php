<?php require_once('./php/initialize.php');
    check_signin();
    $user_id = $_SESSION["user_id"];
    $posts = get_account_post($user_id);
    // $posts = mysqli_fetch_assoc($posts);
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
        <?php
          if (mysqli_num_rows($posts) == 0) {
              echo "<p>You do not have any posted yet.</p>";
          } else {
            echo "<table class=\"col-12 table table-striped table-hover rounded-bottom\">";
            while($post = mysqli_fetch_assoc($posts)) {
              echo "<tr class=\"\">";
                echo "<td class=\"list_column_icon\">";

                if($post["image"] != ''){
                  echo "<image src=\"images/picture.png\" class=\"icon\" id=\"icon_picture\">";
                }

                echo "</td>";
                echo "<td class=\"list_column_date\">";
                echo $post["post_date"];
                echo "</td>";
                echo "<td class=\"list_column_icon\"><image src=\"images/heart.png\" class=\"icon\" id=\"icon_saved\"></image></td>";
                echo "<td class=\"list_column_title\"><a href=\"\">";
                echo $post["title"];
                echo "</a></td>";
                echo "<td class=\"list_column_icon\"><image src=\"images/offering.png\" class=\"icon\" id=\"icon_saved\"></image></td>";
                echo "<td class=\"list_column_price\">";
                echo $post["price"];
                echo "</td>";
              echo "</tr>";
            }
            echo "</table>";
          }
        ?>
        <hr>
      </div>
    </div>
  </div>
</section>

</body>
</html>
