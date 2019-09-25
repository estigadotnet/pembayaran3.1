<?php
namespace PHPMaker2019\p_pembayaran3_1;

// Session
if (session_status() !== PHP_SESSION_ACTIVE)
	session_start(); // Init session data

// Output buffering
ob_start(); 

// Autoload
include_once "autoload.php";
?>
<?php

// Write header
WriteHeader(FALSE);

// Create page object
$t004_siswa_view = new t004_siswa_view();

// Run the page
$t004_siswa_view->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t004_siswa_view->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t004_siswa->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "view";
var ft004_siswaview = currentForm = new ew.Form("ft004_siswaview", "view");

// Form_CustomValidate event
ft004_siswaview.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft004_siswaview.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if (!$t004_siswa->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php $t004_siswa_view->ExportOptions->render("body") ?>
<?php $t004_siswa_view->OtherOptions->render("body") ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php $t004_siswa_view->showPageHeader(); ?>
<?php
$t004_siswa_view->showMessage();
?>
<form name="ft004_siswaview" id="ft004_siswaview" class="form-inline ew-form ew-view-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t004_siswa_view->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t004_siswa_view->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t004_siswa">
<input type="hidden" name="modal" value="<?php echo (int)$t004_siswa_view->IsModal ?>">
<table class="table table-striped table-sm ew-view-table">
<?php if ($t004_siswa->NomorInduk->Visible) { // NomorInduk ?>
	<tr id="r_NomorInduk">
		<td class="<?php echo $t004_siswa_view->TableLeftColumnClass ?>"><span id="elh_t004_siswa_NomorInduk"><?php echo $t004_siswa->NomorInduk->caption() ?></span></td>
		<td data-name="NomorInduk"<?php echo $t004_siswa->NomorInduk->cellAttributes() ?>>
<span id="el_t004_siswa_NomorInduk">
<span<?php echo $t004_siswa->NomorInduk->viewAttributes() ?>>
<?php echo $t004_siswa->NomorInduk->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t004_siswa->Nama->Visible) { // Nama ?>
	<tr id="r_Nama">
		<td class="<?php echo $t004_siswa_view->TableLeftColumnClass ?>"><span id="elh_t004_siswa_Nama"><?php echo $t004_siswa->Nama->caption() ?></span></td>
		<td data-name="Nama"<?php echo $t004_siswa->Nama->cellAttributes() ?>>
<span id="el_t004_siswa_Nama">
<span<?php echo $t004_siswa->Nama->viewAttributes() ?>>
<?php echo $t004_siswa->Nama->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</form>
<?php
$t004_siswa_view->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t004_siswa->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t004_siswa_view->terminate();
?>