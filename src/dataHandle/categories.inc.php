<?php
include "src/db/config.inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['category'])){
  if(strlen($_POST['categoryName']) < 1) $error[] = "Category Name is required";
  else{
    $catory = mysqli_real_escape_string($conn,$_POST['categoryName']);
  
    //check if category already exist
    $checkCat = "SELECT count(*) FROM categories";
    $stmt = $conn->prepare($checkCat) or die($conn->error);
    $stmt->execute();
    $stmt->bind_result($ifExist);
    $stmt->close();
    if($ifExist > 0){
      $error[] = "category already exist";
    }else{
      $uniqueId = rand(time(),4);
      $insertCategory = "INSERT INTO categories(categoryId,categoryName) VALUES(?,?)";
      $stmt = $conn->prepare($insertCategory) or die($conn->error);
      $stmt->bind_param('is',$uniqueId,$catory);
      $stmt->execute();
      $stmt->close();
      if($insertCategory){
        echo '<script>alert("Category Added");</script>';
      }
      else{
        echo '<script>alert("Error");</script>';
      }
    }
  }
}

if(isset($_GET['del'])){
  $del =$_GET['del'];
  $deleteQuery= $conn->query("DELETE FROM categories WHERE id = '$del'") or die($conn->error);
  if($deleteQuery) $error[] ="Deleted successfully";
}