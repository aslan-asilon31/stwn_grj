<?php include'../koneksi.php';
if (isset($_GET['id'])){
	$qry=mysqli_query($konek,"delete from tbl_jemaat where id_jemaat='".$_GET["id"]."'");
	$data  = mysqli_fetch_array($qry);
	header('location: jemaat.php');

}

?>