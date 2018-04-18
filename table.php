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

        echo "<td class=\"list_column_icon\"><a href=\"php\\add_bookmark.php\">";
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
