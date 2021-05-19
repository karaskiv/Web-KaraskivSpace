<?php  
$servername_ = "localhost";
$username_ = "id16674155_karaskiv";
$password_ = "KRSKVErasmus_10";
$dbname_ = "id16674155_user01";

// Create connection
$conn = mysqli_connect($servername_, $username_, $password_, $dbname_);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>