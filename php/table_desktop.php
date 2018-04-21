<?php
  if (mysqli_num_rows($posts) == 0) {
      echo "<p>There is no post yet.</p>";
  } else {
    echo "<table class=\"col-12 table table-striped table-hover rounded-bottom\" id=\"main_table\">";
    while($post = mysqli_fetch_assoc($posts)) {
      echo "<tr data-toggle=\"modal\" style=\"cursor:pointer;\" data-target=\"#postDetailModalDesktop\" data-post_id=\"post_id_";
      echo $post["post_id"];
      echo "\" id=\"post_id_";
      echo $post["post_id"];
      echo "\">";

      echo "<td class=\"d-none\">";
      echo substr($post["post_date"], 5, 5);
      echo "</td>";
      echo "<td class=\"d-none\">";
      echo $post["price"];
      echo "</td>";
      echo "<td class=\"d-none\">";
      echo $post["contact"];
      echo "</td>";
      echo "<td class=\"d-none\">";
      echo $post["description"];
      echo "</td>";
      echo "<td class=\"d-none\">";
      echo $post["image"];
      echo "</td>";
      echo "<td class=\"d-none\">";
      echo $post["post_id"];
      echo "</td>";

      echo "<td class=\"list_column_icon\" style=\"width: 7%\">";
      if($post["image"] != ''){
        echo "<i class=\"material-icons\" style=\"width: 7%\">camera_alt</i>";
      }
      echo "</td>";

      echo "<td class=\"list_column_title\" style=\"width: 50%\">";
      echo $post["title"];
      echo "</td>";

      echo "<td class=\"list_column_icon\" style=\"width: 7%\">";
      if (check_bookmarked($user_id, $post["post_id"])) {
        echo "<i class=\"material-icons\" style=\"width: 7%\">bookmark</i>";
      }
      echo "</td>";

      echo "<td class=\"list_column_date\" style=\"width: 10%\">";
      echo substr($post["post_date"], 5, 5);
      echo "</td>";

      if ($post["purpose"] != 'Looking'){
        echo "<td class=\"list_column_icon\" style=\"width: 7%\"><i class=\"material-icons\">local_offer</i></td>";
      } else {
        echo "<td class=\"list_column_icon\" style=\"width: 7%\"><i class=\"material-icons\">search</i></td>";
      }
      echo "<td class=\"list_column_price\" style=\"width: 19%\">";
      echo $post["price"];
      echo "</td>";
      echo "</tr>";
    }
    echo "</table>";
  }
?>
