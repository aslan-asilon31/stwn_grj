<?php
$server= 'localhost'; 
$user= 'root';
$password= ''; 
$database= 'stwn_gereja';
$konek= mysqli_connect($server,$user,$password,$database);
if ($konek){
		echo "";
	}else
		{							
		echo "GAGAL KONEK KE DATABASE";
}
?>
