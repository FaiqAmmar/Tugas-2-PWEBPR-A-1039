<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'contact_app';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Koneksi database gagal: ".$conn->connect_error);
}
echo "Koneksi sukses";

$result = $conn->query("SELECT * FROM user");
$arr = array();
if ($result->num_rows > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    foreach ($row as $key => $value) {
      $arr[$key][] = $value;
    }
  }
}
?>