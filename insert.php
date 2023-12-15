<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Rekening</title>
  </head>
  <body style="background-color:#f8f0e3">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background:black">
  <div class="container-fluid">
    <a class="navbar-brand" href="menuutama.php" style="color:white">Tambah Rekening</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menuutama.php" style="color:white">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="input.php"style="color:white">Input</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil.php"style="color:white">Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transfer.php"style="color:white">Transfer</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<h1 style="text-align:center">
<?php
include 'conn.php';

//proses input data
$nama = $_POST['nama'];
$norek = $_POST['norek'];
$saldo = $_POST['saldo'];
$jenis = $_POST['jenis'];

$sql = "INSERT INTO `Rekening` (`nama`, `norek`, `saldo`, `jenis`) VALUES ('$nama', '$norek', '$saldo', '$jenis')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Terjadi kesalahan: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</h1>
</body>
</html>






