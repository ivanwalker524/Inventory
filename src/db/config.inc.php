<?php
define('SITEURL','http://localhost/UnivInventSystem');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','inventorySystem');

$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die($conn->error);
mysqli_select_db($conn,DB_NAME) or die($conn->error);


// class DB {
//   private $host = 'localhost';
//   private $user = 'root';
//   private $password = '';
//   private $database = 'inventorySystem';

//   public $db;
//   public function __construct() {
//     $this->db = new mysqli(
//       $this->host,
//       $this->user,
//       $this->password,
//       $this->database
//     );
    
//   }

//   public function san($str) {
//     return $this->db->real_escape_string(htmlentities(trim($str)));
//   }

//   public function stringMatch($str,$match, $caps = true){
//     if($str == '') return '';
//     $str = str_ireplace($match, '<b style = "color: #47007a "><ul>' . $match . '</u></b>' , $str);
//     $str = $caps ? strtoupper($str) : $str;
//     return $str;
//   }
// }

// $conn = new Db;
// $db = $conn->db;