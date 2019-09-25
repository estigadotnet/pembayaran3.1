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
$t002_sekolah_view = new t002_sekolah_view();

// Run the page
$t002_sekolah_view->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t002_sekolah_view->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t002_sekolah->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "view";
var ft002_sekolahview = currentForm = new ew.Form("ft002_sekolahview", "view");

// Form_CustomValidate event
ft002_sekolahview.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft002_sekolahview.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if (!$t002_sekolah->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php $t002_sekolah_view->ExportOptions->render("body") ?>
<?php $t002_sekolah_view->OtherOptions->render("body") ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php $t002_sekolah_view->showPageHeader(); ?>
<?php
$t002_sekolah_view->showMessage();
?>
<form name="ft002_sekolahview" id="ft002_sekolahview" class="form-inline ew-form ew-view-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t002_sekolah_view->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t002_sekolah_view->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t002_sekolah">
<input type="hidden" name="modal" value="<?php echo (int)$t002_sekolah_view->IsModal ?>">
<table class="table table-striped table-sm ew-view-table">
<?php if ($t002_sekolah->Nama->Visible) { // Nama ?>
	<tr id="r_Nama">
		<td class="<?php echo $t002_sekolah_view->TableLeftColumnClass ?>"><span id="elh_t002_sekolah_Nama"><?php echo $t002_sekolah->Nama->caption() ?></span></td>
		<td data-name="Nama"<?php echo $t002_sekolah->Nama->cellAttributes() ?>>
<span id="el_t002_sekolah_Nama">
<span<?php echo $t002_sekolah->Nama->viewAttributes() ?>>
<?php echo $t002_sekolah->Nama->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t002_sekolah->Alamat->Visible) { // Alamat ?>
	<tr id="r_Alamat">
		<td class="<?php echo $t002_sekolah_view->TableLeftColumnClass ?>"><span id="elh_t002_sekolah_Alamat"><?php echo $t002_sekolah->Alamat->caption() ?></span></td>
		<td data-name="Alamat"<?php echo $t002_sekolah->Alamat->cellAttributes() ?>>
<span id="el_t002_sekolah_Alamat">
<span<?php echo $t002_sekolah->Alamat->viewAttributes() ?>>
<?php echo $t002_sekolah->Alamat->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</form>
<?php
$t002_sekolah_view->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t002_sekolah->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t002_sekolah_view->terminate();
?>