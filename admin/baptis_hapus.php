<?php
include '../koneksi.php';

$id = $_GET['id'];

// Query to delete the record
$query = mysqli_query($konek, "DELETE FROM tbl_baptis WHERE id_baptis='$id'");

if ($query) {
	echo "<script>alert('Data berhasil dihapus!'); window.location='baptis.php';</script>";
} else {
	echo "<script>alert('Gagal menghapus data: " . mysqli_error($konek) . "'); window.location='baptis.php';</script>";
}
