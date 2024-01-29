<?php
session_start();
$dir = "src/Icons";
$svg = array();
foreach(glob("$dir/*.svg") as $vectors){
  $ph = pathinfo($vectors);
  $svg[$ph['filename']] = file_get_contents($vectors);
}

if(isset($_GET['logout'])){
  unset($_SESSION['auth']);
  header("location: ./");
}

if(isset($_GET['switchAccount'])){
  unset($_SESSION['username']);
}

$page = isset($_GET['ref']) && file_exists("src/start/" . $_GET['ref'].'.php') ? $_GET['ref'] : 'App';
if(!isset($_SESSION['auth'])) $page = 'login';

require "src/includes/header.php";
require "src/start/$page.php";
require "src/includes/footer.php";
