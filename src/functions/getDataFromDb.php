<?php
// include "src/db/config.inc.php";

function categories($table){
  global $conn;
  $getCategories="SELECT * FROM categories";
  $query = mysqli_query($conn,$getCategories) or die($conn->error);
  return $query;
}