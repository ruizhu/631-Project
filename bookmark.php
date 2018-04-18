<?php
  require_once('./php/initialize.php');
  $user_id = $_SESSION["user_id"];
  check_signin($user_id);
  $posts = get_bookmark($user_id);
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

    <?php
      if (mysqli_num_rows($posts) == 0) {
          echo "<p>There is not any post yet.</p>";
      } else {
        echo "<table class=\"col-12 table table-striped table-hover rounded-bottom\">";
        while($post = mysqli_fetch_assoc($posts)) {
          echo "<tr class=\"\">";
            echo "<td class=\"list_column_icon\">";
            if($post["image"] != ''){
              echo "<image src=\"images/picture.png\" class=\"icon\" id=\"icon_picture\">";
            }
            echo "</td>";

            echo "<td class=\"list_column_title\"><a href=\"\">";
            echo $post["title"];
            echo "</a></td>";

            echo "<td class=\"list_column_icon\"><a href=\"\">";
            echo "<image src=\"images/heart.png\" class=\"icon\" id=\"icon_saved\">";
            echo "</a></image></td>";

            echo "<td class=\"list_column_date\">";
            echo $post["post_date"];
            echo "</td>";

            echo "<td class=\"list_column_icon\"><image src=\"images/offering.png\" class=\"icon\" id=\"icon_saved\"></image></td>";

            echo "<td class=\"list_column_price\">";
            echo $post["price"];
            echo "</td>";
          echo "</tr>";
        }
        echo "</table>";
      }
    ?>

  </div><!-- close post_list  Section-->

</section>

</body>
</html>
