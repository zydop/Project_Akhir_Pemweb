<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Transfer Dana</title>
</head>
<body style="background-color:#f8f0e3">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background:black">
  <div class="container-fluid">
    <a class="navbar-brand" href="menuutama.php" style="color:white">Transfer Dana</a>
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
	<form class="mx-auto p-2" method="POST" action="transfer.php">
  <label for="norek_asal" class="form-label">Nomor Rekening Asal:</label>
  <br>
  <input type="text" name="norek_asal">
  <br>
  <label for="norek_tujuan" class="form-label">Nomor Rekening Tujuan:</label>
  <br>
  <input type="text" name="norek_tujuan">
  <br>
  <label for="nominal" class="form-label">Nominal:</label>
  <br>
  <input type="number" name="nominal">
  <br><br>
  <input class="btn btn-warning"type="submit" name="submit" value="Transfer" style="border-color:black">
</form>

<div style="text-align:center">
<?php
    include 'conn.php';

// Jika form disubmit, lakukan proses transfer
if (isset($_POST['submit'])) {
  // Ambil data dari form
  $asal = $_POST['norek_asal'];
  $tujuan = $_POST['norek_tujuan'];
  $nominal = $_POST['nominal'];

  // Query untuk mengambil saldo rekening asal
  $query_saldo_asal = "SELECT saldo FROM rekening WHERE norek = '$asal'";
  $result_saldo_asal = mysqli_query($conn, $query_saldo_asal);
  

  // Query untuk mengambil saldo rekening tujuan
  $query_saldo_tujuan = "SELECT saldo FROM rekening WHERE norek = '$tujuan'";
  $result_saldo_tujuan = mysqli_query($conn, $query_saldo_tujuan);
 
  // Jika nomor rekening asal atau tujuan tidak ditemukan, tampilkan pesan error
  if (mysqli_num_rows($result_saldo_asal) > 0) {
    if (mysqli_num_rows($result_saldo_tujuan) > 0) {
        $saldo_asal = mysqli_fetch_array($result_saldo_asal)['saldo'];
        if ($saldo_asal >= $nominal) {
         // Kurangi saldo rekening asal
    $query_kurangi_saldo_asal = "UPDATE rekening SET saldo = saldo - $nominal WHERE norek = '$asal'";
    mysqli_query($conn, $query_kurangi_saldo_asal);

    // Tambahkan saldo rekening tujuan
    $query_tambah_saldo_tujuan = "UPDATE rekening SET saldo = saldo + $nominal WHERE norek = '$tujuan'";
    mysqli_query($conn, $query_tambah_saldo_tujuan);
    echo "Transfer berhasil dilakukan.";
  } else {
    echo "Saldo tidak cukup.";
  } 
  } else {
    echo "Nomor rekening tujuan tidak ditemukan";
  }
  }
  else {
    echo "Nomor rekening asal tidak ditemukan.";
}
}
mysqli_close($conn); // Tutup koneksi ke database
?>
</div>
</body>
</html>