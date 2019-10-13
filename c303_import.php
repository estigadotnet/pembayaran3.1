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
$c303_import = new c303_import();

// Run the page
$c303_import->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();
?>
<?php include_once "header.php" ?>
<form method="post" enctype="multipart/form-data" action="c304_import_aksi.php">
	Pilih File: 
	<input name="fileiuransiswa" type="file" required="required"><br/> 
	<input name="upload" type="submit" value="Import">
</form>
<?php if (DEBUG_ENABLED) echo GetDebugMessage(); ?>
<?php include_once "footer.php" ?>
<?php
$c303_import->terminate();
?>