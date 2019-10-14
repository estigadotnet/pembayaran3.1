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
$c305_import_aksi2 = new c305_import_aksi2();

// Run the page
$c305_import_aksi2->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();
?>
<?php include_once "header.php" ?>
<?php

//include "conn.php";

$db =& DbHelper();

$target = basename($_FILES['fileiuransiswa']['name']) ;
move_uploaded_file($_FILES['fileiuransiswa']['tmp_name'], $target);
$Filepath = $target;

header("location: test2.php?File=".$Filepath);
?>
<?php if (DEBUG_ENABLED) echo GetDebugMessage(); ?>
<?php include_once "footer.php" ?>
<?php
$c305_import_aksi2->terminate();
?>