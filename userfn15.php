<?php
namespace PHPMaker2019\p_pembayaran3_1;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Global user functions
// Page Loading event
function Page_Loading() {

	//echo "Page Loading";
}

// Page Rendering event
function Page_Rendering() {

	//echo "Page Rendering";
}

// Page Unloaded event
function Page_Unloaded() {

	//echo "Page Unloaded";
}

// Personal Data Downloading event
function PersonalData_Downloading(&$row) {

	//echo "PersonalData Downloading";
}

// Personal Data Deleted event
function PersonalData_Deleted($row) {

	//echo "PersonalData Deleted";
}

// check jenis iuran berdasarkan iuran_id
function f_check_jenis_iuran($p_iuran_id) {
	$jenis_iuran = ExecuteScalar("select Jenis from t005_iuran where id = ".$p_iuran_id."");
	return $jenis_iuran;
}
?>