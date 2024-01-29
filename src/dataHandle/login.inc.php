<?php
include "src/db/config.inc.php";

if(isset($_POST['username'])){
  $uname = mysqli_real_escape_string($conn,$_POST['username']);
  if($uname == '') $error[] ="Include username";
  else{
    $check = "SELECT * FROM admin WHERE username = ?";
    $stmt = $conn->prepare($check);
    $stmt->bind_param('s',$uname) or die($conn->error);
    $stmt->execute();
    $num_rows = $stmt->get_result();

    if(mysqli_num_rows($num_rows) == 0) {
      $error[] = "username is wrong";
    }else{
      $activeUser=$num_rows->fetch_assoc();
      $_SESSION['username'] = $uname;
      $_SESSION['user']=$activeUser['username'];
      header("location: ./");
    } 
    $stmt->close();
  }
} else if(isset($_POST['userpwd'])){
  $pwd = mysqli_real_escape_string($conn, $_POST['userpwd']);
  if($pwd == '') $error[] = "Include password.";
  else{
    $uname = $_SESSION['username'];
    $check ="SELECT * FROM admin WHERE username =?";
    $stmt=$conn->prepare($check) or die($conn->error);
    $stmt->bind_param('s',$uname);
    $stmt->execute();
    $num_rows=$stmt->get_result();

    if(mysqli_num_rows($num_rows) == 0) $error[] = "Account does not exist.";
    else {
      $data = $num_rows->fetch_assoc();
      if(password_verify($pwd, $data['password'])){
        $_SESSION['auth'] = $data;
        unset($_SESSION['auth']['password']);
        header("location: ./");
      }
    }
  }
}