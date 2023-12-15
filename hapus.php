<?php
	include 'conn.php';

	// Mengambil ID rekening dari parameter
	$id = $_GET["id"];

	// Menghapus data rekening dari tabel "Rekening"
	$sql = "DELETE FROM Rekening WHERE id = $id";
	mysqli_query($conn, $sql);

	// Menutup koneksi ke database
	mysqli_close($conn);

	// Redirect ke halaman HTML (B)
	header("Location: tampil.php");
	exit();
?>
