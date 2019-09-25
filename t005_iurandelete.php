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
$t005_iuran_delete = new t005_iuran_delete();

// Run the page
$t005_iuran_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t005_iuran_delete->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "delete";
var ft005_iurandelete = currentForm = new ew.Form("ft005_iurandelete", "delete");

// Form_CustomValidate event
ft005_iurandelete.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft005_iurandelete.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft005_iurandelete.lists["x_Jenis"] = <?php echo $t005_iuran_delete->Jenis->Lookup->toClientList() ?>;
ft005_iurandelete.lists["x_Jenis"].options = <?php echo JsonEncode($t005_iuran_delete->Jenis->options(FALSE, TRUE)) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t005_iuran_delete->showPageHeader(); ?>
<?php
$t005_iuran_delete->showMessage();
?>
<form name="ft005_iurandelete" id="ft005_iurandelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t005_iuran_delete->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t005_iuran_delete->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t005_iuran">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t005_iuran_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode($COMPOSITE_KEY_SEPARATOR, $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t005_iuran->Nama->Visible) { // Nama ?>
		<th class="<?php echo $t005_iuran->Nama->headerCellClass() ?>"><span id="elh_t005_iuran_Nama" class="t005_iuran_Nama"><?php echo $t005_iuran->Nama->caption() ?></span></th>
<?php } ?>
<?php if ($t005_iuran->Jenis->Visible) { // Jenis ?>
		<th class="<?php echo $t005_iuran->Jenis->headerCellClass() ?>"><span id="elh_t005_iuran_Jenis" class="t005_iuran_Jenis"><?php echo $t005_iuran->Jenis->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t005_iuran_delete->RecCnt = 0;
$i = 0;
while (!$t005_iuran_delete->Recordset->EOF) {
	$t005_iuran_delete->RecCnt++;
	$t005_iuran_delete->RowCnt++;

	// Set row properties
	$t005_iuran->resetAttributes();
	$t005_iuran->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t005_iuran_delete->loadRowValues($t005_iuran_delete->Recordset);

	// Render row
	$t005_iuran_delete->renderRow();
?>
	<tr<?php echo $t005_iuran->rowAttributes() ?>>
<?php if ($t005_iuran->Nama->Visible) { // Nama ?>
		<td<?php echo $t005_iuran->Nama->cellAttributes() ?>>
<span id="el<?php echo $t005_iuran_delete->RowCnt ?>_t005_iuran_Nama" class="t005_iuran_Nama">
<span<?php echo $t005_iuran->Nama->viewAttributes() ?>>
<?php echo $t005_iuran->Nama->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t005_iuran->Jenis->Visible) { // Jenis ?>
		<td<?php echo $t005_iuran->Jenis->cellAttributes() ?>>
<span id="el<?php echo $t005_iuran_delete->RowCnt ?>_t005_iuran_Jenis" class="t005_iuran_Jenis">
<span<?php echo $t005_iuran->Jenis->viewAttributes() ?>>
<?php echo $t005_iuran->Jenis->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t005_iuran_delete->Recordset->moveNext();
}
$t005_iuran_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t005_iuran_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t005_iuran_delete->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t005_iuran_delete->terminate();
?>