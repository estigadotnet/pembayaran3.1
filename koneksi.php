<?php 
//variabel koneksi
$konek = mysqli_connect("localhost:3307","root","admin","db_pembayaran3");
if (!$konek){
	echo "Koneksi Database Gagal...!!!";
	}
?>