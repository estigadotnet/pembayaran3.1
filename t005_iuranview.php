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
$t005_iuran_view = new t005_iuran_view();

// Run the page
$t005_iuran_view->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t005_iuran_view->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t005_iuran->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "view";
var ft005_iuranview = currentForm = new ew.Form("ft005_iuranview", "view");

// Form_CustomValidate event
ft005_iuranview.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft005_iuranview.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft005_iuranview.lists["x_Jenis"] = <?php echo $t005_iuran_view->Jenis->Lookup->toClientList() ?>;
ft005_iuranview.lists["x_Jenis"].options = <?php echo JsonEncode($t005_iuran_view->Jenis->options(FALSE, TRUE)) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if (!$t005_iuran->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php $t005_iuran_view->ExportOptions->render("body") ?>
<?php $t005_iuran_view->OtherOptions->render("body") ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php $t005_iuran_view->showPageHeader(); ?>
<?php
$t005_iuran_view->showMessage();
?>
<form name="ft005_iuranview" id="ft005_iuranview" class="form-inline ew-form ew-view-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t005_iuran_view->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t005_iuran_view->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t005_iuran">
<input type="hidden" name="modal" value="<?php echo (int)$t005_iuran_view->IsModal ?>">
<table class="table table-striped table-sm ew-view-table">
<?php if ($t005_iuran->id->Visible) { // id ?>
	<tr id="r_id">
		<td class="<?php echo $t005_iuran_view->TableLeftColumnClass ?>"><span id="elh_t005_iuran_id"><?php echo $t005_iuran->id->caption() ?></span></td>
		<td data-name="id"<?php echo $t005_iuran->id->cellAttributes() ?>>
<span id="el_t005_iuran_id">
<span<?php echo $t005_iuran->id->viewAttributes() ?>>
<?php echo $t005_iuran->id->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t005_iuran->Nama->Visible) { // Nama ?>
	<tr id="r_Nama">
		<td class="<?php echo $t005_iuran_view->TableLeftColumnClass ?>"><span id="elh_t005_iuran_Nama"><?php echo $t005_iuran->Nama->caption() ?></span></td>
		<td data-name="Nama"<?php echo $t005_iuran->Nama->cellAttributes() ?>>
<span id="el_t005_iuran_Nama">
<span<?php echo $t005_iuran->Nama->viewAttributes() ?>>
<?php echo $t005_iuran->Nama->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t005_iuran->Jenis->Visible) { // Jenis ?>
	<tr id="r_Jenis">
		<td class="<?php echo $t005_iuran_view->TableLeftColumnClass ?>"><span id="elh_t005_iuran_Jenis"><?php echo $t005_iuran->Jenis->caption() ?></span></td>
		<td data-name="Jenis"<?php echo $t005_iuran->Jenis->cellAttributes() ?>>
<span id="el_t005_iuran_Jenis">
<span<?php echo $t005_iuran->Jenis->viewAttributes() ?>>
<?php echo $t005_iuran->Jenis->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</form>
<?php
$t005_iuran_view->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t005_iuran->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t005_iuran_view->terminate();
?>