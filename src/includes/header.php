<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory Management System</title>
  <?php
  foreach (glob("src/styles/*.css") as $css){
    $ph = pathinfo($css);
    echo '<link rel="stylesheet" href="src/styles/'.$ph['basename'].'?d='.strtotime('now').'" />';
  }
  ?>
  <?php
  foreach (glob("src/Javascript/*.js") as $js){
    $ph = pathinfo($js);
    echo '<script src="src/Javascript/'.$ph['basename'].'?d='.strtotime('now').'"></script>';
  }
  ?>
</head>
<?php
  if(isset($_GET['page'])){
    $id = $_GET['page'];
  }else{
    $id = 1;
  } ?>
<body id="<?=$id?>">
<div class="flex flex-col" id="loader">
  <img src="src/assets/logo1.bg.png" alt="">
  <p class="font-bold">Please wait ...</p>
  <div class="c">
    <div class="film"></div>
  </div>
</div>
<div class="w-full h-full">
  
