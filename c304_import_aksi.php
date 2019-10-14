<?php
namespace PHPMaker2019\p_pembayaran3_1;

// Session
if (session_status() !== PHP_SESSION_ACTIVE)
	session_start(); // Init session data

// Output buffering
ob_start(); 
?>
<?php include_once "autoload.php" ?>
<?php

// Write header
WriteHeader(FALSE);

// Create page object
$c304_import_aksi = new c304_import_aksi();

// Run the page
$c304_import_aksi->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();
?>
<?php include_once "header.php" ?>
<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php

$db =& DbHelper();

// menghubungkan dengan koneksi
//include 'koneksi.php';
// menghubungkan dengan library excel reader
//require "excel_reader2.php"; //echo "1";
include_once "php-excel-reader/excel_reader2.php"; //require('php-excel-reader/excel_reader2.php');
include_once "SpreadsheetReader.php"; //require('SpreadsheetReader.php');
?>

<?php
// upload file xls
//$target = basename($_FILES['fileiuransiswa']['name']) ;
//move_uploaded_file($_FILES['fileiuransiswa']['tmp_name'], $target);
//$Spreadsheet = new SpreadsheetReader($_FILES['fileiuransiswa']['name']);
$data = new SpreadsheetReader($_FILES['fileiuransiswa']['name']);

// beri permisi agar file xls dapat di baca
//chmod($_FILES['fileiuransiswa']['name'],0777);

// mengambil isi file xls
//$data = new Spreadsheet_Excel_Reader($_FILES['fileiuransiswa']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$id                 = $data->val($i,  1);
	$daf_kelas_siswa_id = $data->val($i,  2);
	$iuran_id           = $data->val($i,  3);
	$jumlah             = $data->val($i,  4);
	$byr01              = $data->val($i,  5);
	$jml01              = $data->val($i,  6);
	$tgl01              = $data->val($i,  7);
	$byr02              = $data->val($i,  8);
	$jml02              = $data->val($i,  9);
	$tgl02              = $data->val($i, 10);
	$byr03              = $data->val($i, 11);
	$jml03              = $data->val($i, 12);
	$tgl03              = $data->val($i, 13);
	$byr04              = $data->val($i, 14);
	$jml04              = $data->val($i, 15);
	$tgl04              = $data->val($i, 16);
	$byr05              = $data->val($i, 17);
	$jml05              = $data->val($i, 18);
	$tgl05              = $data->val($i, 19);
	$byr06              = $data->val($i, 20);
	$jml06              = $data->val($i, 21);
	$tgl06              = $data->val($i, 22);
	$byr07              = $data->val($i, 23);
	$jml07              = $data->val($i, 24);
	$tgl07              = $data->val($i, 25);
	$byr08              = $data->val($i, 26);
	$jml08              = $data->val($i, 27);
	$tgl08              = $data->val($i, 28);
	$byr09              = $data->val($i, 29);
	$jml09              = $data->val($i, 30);
	$tgl09              = $data->val($i, 31);
	$byr10              = $data->val($i, 32);
	$jml10              = $data->val($i, 33);
	$tgl10              = $data->val($i, 34);
	$byr11              = $data->val($i, 35);
	$jml11              = $data->val($i, 36);
	$tgl11              = $data->val($i, 37);
	$byr12              = $data->val($i, 38);
	$jml12              = $data->val($i, 39);
	$tgl12              = $data->val($i, 40);

	/*
	if($nama != "" && $alamat != "" && $telepon != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into data_pegawai values('','$nama','$alamat','$telepon')");
		$berhasil++;
	}
	*/
	$q = "
		insert into t103_daf_kelas_siswa_iuran
		values
		('".$id."',
		'".$daf_kelas_siswa_id."',
		'".$iuran_id."',
		'".jumlah."',
		'".byr01."',
		'".jml01."',
		'".tgl01."',
		'".byr02."',
		'".jml02."',
		'".tgl02."',
		'".byr03."',
		'".jml03."',
		'".tgl03."',
		'".byr04."',
		'".jml04."',
		'".tgl04."',
		'".byr05."',
		'".jml05."',
		'".tgl05."',
		'".byr06."',
		'".jml06."',
		'".tgl06."',
		'".byr07."',
		'".jml07."',
		'".tgl07."',
		'".byr08."',
		'".jml08."',
		'".tgl08."',
		'".byr09."',
		'".jml09."',
		'".tgl09."',
		'".byr10."',
		'".jml10."',
		'".tgl10."',
		'".byr11."',
		'".jml11."',
		'".tgl11."',
		'".byr12."',
		'".jml12."',
		'".tgl12."'
		)
	";
	$db->Execute($q);	
	$berhasil++;
	
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['fileiuransiswa']['name']);

// alihkan halaman ke index.php
//header("location:index.php?berhasil=$berhasil");
?>
<?php if (DEBUG_ENABLED) echo GetDebugMessage(); ?>
<?php include_once "footer.php" ?>
<?php
$c304_import_aksi->terminate();
?>