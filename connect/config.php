<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli("localhost","root","","quanlynhahang" );
if ($conn->connect_error) {
  die("Kết nối thất bại:" . $conn->connect_error);
}

?>