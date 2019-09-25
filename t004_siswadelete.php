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
$t004_siswa_delete = new t004_siswa_delete();

// Run the page
$t004_siswa_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t004_siswa_delete->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "delete";
var ft004_siswadelete = currentForm = new ew.Form("ft004_siswadelete", "delete");

// Form_CustomValidate event
ft004_siswadelete.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft004_siswadelete.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t004_siswa_delete->showPageHeader(); ?>
<?php
$t004_siswa_delete->showMessage();
?>
<form name="ft004_siswadelete" id="ft004_siswadelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t004_siswa_delete->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t004_siswa_delete->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t004_siswa">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t004_siswa_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode($COMPOSITE_KEY_SEPARATOR, $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t004_siswa->NomorInduk->Visible) { // NomorInduk ?>
		<th class="<?php echo $t004_siswa->NomorInduk->headerCellClass() ?>"><span id="elh_t004_siswa_NomorInduk" class="t004_siswa_NomorInduk"><?php echo $t004_siswa->NomorInduk->caption() ?></span></th>
<?php } ?>
<?php if ($t004_siswa->Nama->Visible) { // Nama ?>
		<th class="<?php echo $t004_siswa->Nama->headerCellClass() ?>"><span id="elh_t004_siswa_Nama" class="t004_siswa_Nama"><?php echo $t004_siswa->Nama->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t004_siswa_delete->RecCnt = 0;
$i = 0;
while (!$t004_siswa_delete->Recordset->EOF) {
	$t004_siswa_delete->RecCnt++;
	$t004_siswa_delete->RowCnt++;

	// Set row properties
	$t004_siswa->resetAttributes();
	$t004_siswa->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t004_siswa_delete->loadRowValues($t004_siswa_delete->Recordset);

	// Render row
	$t004_siswa_delete->renderRow();
?>
	<tr<?php echo $t004_siswa->rowAttributes() ?>>
<?php if ($t004_siswa->NomorInduk->Visible) { // NomorInduk ?>
		<td<?php echo $t004_siswa->NomorInduk->cellAttributes() ?>>
<span id="el<?php echo $t004_siswa_delete->RowCnt ?>_t004_siswa_NomorInduk" class="t004_siswa_NomorInduk">
<span<?php echo $t004_siswa->NomorInduk->viewAttributes() ?>>
<?php echo $t004_siswa->NomorInduk->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t004_siswa->Nama->Visible) { // Nama ?>
		<td<?php echo $t004_siswa->Nama->cellAttributes() ?>>
<span id="el<?php echo $t004_siswa_delete->RowCnt ?>_t004_siswa_Nama" class="t004_siswa_Nama">
<span<?php echo $t004_siswa->Nama->viewAttributes() ?>>
<?php echo $t004_siswa->Nama->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t004_siswa_delete->Recordset->moveNext();
}
$t004_siswa_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t004_siswa_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t004_siswa_delete->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t004_siswa_delete->terminate();
?>