<?php include'../koneksi.php';
if (isset($_GET['id'])){
	$qry=mysqli_query($konek,"delete from tbl_nikah where id_nikah='".$_GET["id"]."'");
	$data  = mysqli_fetch_array($qry);
	header('location: nikah.php');

}

?>