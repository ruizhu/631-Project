<?php
  mysqli_data_seek($posts, 0);
  while($post = mysqli_fetch_assoc($posts)) {
    echo "<section class=\"d-block d-md-none container pl-2 pr-1\">";
      echo "<div class=\"bg-white p-2 rounded\" onclick=\"openOverlay()\">";
      echo "<div class=\"row p-1\">";
      // image part
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
      echo "<div class=\"col-2 d-flex align-self-center justify-content-center pr-1\"><i class=\"material-icons\">bookmark</i></div>";
      echo "</div>";
      //date part
      echo "<div class=\"row p-1\">";
      echo "<div class=\"col-4 d-flex\">";
      echo substr($post["post_date"], 0, 10);
      echo "</div>";
      //local offer and price part
      echo "<div class=\"col-8 d-flex justify-content-end\"><i class=\"material-icons\">local_offer</i>";
      echo $post["price"];
      echo "</div>";
      echo "</div></div></section>";
  }
?>
