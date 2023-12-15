<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tampil Data</title>
</head>
<body style="background-color:#f8f0e3">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background:black">
  <div class="container-fluid">
    <a class="navbar-brand" href="menuutama.php" style="color:white">Data Rekening</a>
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
	<table class="table table-light" >
		<tr>
			<th>ID</th>
			<th>Nama Pemilik Rekening</th>
			<th>Nomor Rekening</th>
			<th>Saldo Rekening</th>
			<th>Jenis Rekening</th>
			<th>Aksi</th>
		</tr>
		<?php
			include 'conn.php';

			// Mengambil data dari tabel "Rekening"
			$sql = "SELECT * FROM Rekening";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["nama"] . "</td>";
				echo "<td>" . $row["norek"] . "</td>";
				echo "<td>" . $row["saldo"] . "</td>";
				echo "<td>" . $row["jenis"] . "</td>";
				echo "<td><a href='hapus.php?id=" . $row["id"] . "'>Hapus</a></td>";
				echo "</tr>";
			}

			// Menutup koneksi ke database
			mysqli_close($conn);
		?>
	</table>
</body>
</html>
