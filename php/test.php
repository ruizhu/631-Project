<?php
$user_id = 3;
$keyword = 2;
$sql = "SELECT * FROM post ";
$sql .= "WHERE title LIKE '%" . $keyword . "%' ";
$sql .= "OR post_id LIKE '%" . $keyword . "%' ";
$sql .= "OR user_id LIKE '%" . $keyword . "%' ";
$sql .= "OR price LIKE '%" . $keyword . "%' ";
$sql .= "OR contact LIKE '%" . $keyword . "%' ";
$sql .= "OR category LIKE '%" . $keyword . "%' ";
$sql .= "OR purpose LIKE '%" . $keyword . "%' ";
$sql .= "OR description LIKE '%" . $keyword . "%' ";
$sql .= "OR image LIKE '%" . $keyword . "%' ";
$sql .= "OR post_date LIKE '%" . $keyword . "%' ";


  echo $sql;

?>
