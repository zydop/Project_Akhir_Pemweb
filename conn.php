<?php
$servername = "localhost";
$username = "root";
$password = "maleojg24";
$dbname = "ddl";

$conn = new mysqli($servername, $username, $password, $dbname);

//cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>