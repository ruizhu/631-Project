<?php
  mysqli_data_seek($posts, 0);
  while($post = mysqli_fetch_assoc($posts)) {
    echo "<section class=\"d-block d-md-none container pl-2 pr-1 mb-2\">";
      echo "<div class=\" p-2 rounded\" style=\"background-color:#dfdfdf;color:#500000;\" data-toggle=\"modal\" data-target=\"#postDetailModalMobile\" data-post_id=\"mobile_post_id_";
      echo $post["post_id"];
      echo "\" id=\"mobile_post_id_";
      echo $post["post_id"];
      echo "\">";

      echo "<span class=\"d-none\">";
      echo substr($post["post_date"], 5, 5);
      echo "</span>";
      echo "<span class=\"d-none\">";
      echo $post["price"];
      echo "</span>";
      echo "<span class=\"d-none\">";
      echo $post["contact"];
      echo "</span>";
      echo "<span class=\"d-none\">";
      echo $post["description"];
      echo "</span>";
      echo "<span class=\"d-none\">";
      echo $post["image"];
      echo "</span>";
      echo "<span class=\"d-none\">";
      echo $post["post_id"];
      echo "</span>";
      echo "<span class=\"d-none\">";
      echo $post["title"];
      echo "</span>";


      echo "<div class=\"row p-1\">";
      // image logo part
      echo "<div class=\"col-2 d-flex align-self-center justify-content-center pl-1\">";
      if($post["image"] != ''){
        echo "<i class=\"material-icons\">camera_alt</i>";
      }
      echo "</div>";
      // title part
      echo "<div class=\"col-8 d-flex\">";
      echo $post["title"];
      echo "</div>";
      // bookmark part
      echo "<div class=\"col-2 d-flex justify-content-center pr-4\">";
      if (check_bookmarked($user_id, $post["post_id"])) {
        echo "<i class=\"material-icons\" style=\"width: 7%\">bookmark</i>";
      }
      echo "</div></div>";
      //date part
      echo "<div class=\"row p-1\">";
      echo "<div class=\"col-4 d-flex\">";
      echo substr($post["post_date"], 5, 5);
      echo "</div>";
      //local offer and price part
      if($post["purpose"] != 'Looking'){
        echo "<div class=\"col-8 d-flex justify-content-end\"><i class=\"material-icons\">local_offer</i>";
      } else {
        echo "<div class=\"col-8 d-flex justify-content-end\"><i class=\"material-icons\">search</i>";
      }

      echo $post["price"];
      echo "</div>";
      echo "</div></div></section>";
  }
?>
