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
$t102_daf_kelas_siswa_delete = new t102_daf_kelas_siswa_delete();

// Run the page
$t102_daf_kelas_siswa_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t102_daf_kelas_siswa_delete->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "delete";
var ft102_daf_kelas_siswadelete = currentForm = new ew.Form("ft102_daf_kelas_siswadelete", "delete");

// Form_CustomValidate event
ft102_daf_kelas_siswadelete.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft102_daf_kelas_siswadelete.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft102_daf_kelas_siswadelete.lists["x_siswa_id"] = <?php echo $t102_daf_kelas_siswa_delete->siswa_id->Lookup->toClientList() ?>;
ft102_daf_kelas_siswadelete.lists["x_siswa_id"].options = <?php echo JsonEncode($t102_daf_kelas_siswa_delete->siswa_id->lookupOptions()) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t102_daf_kelas_siswa_delete->showPageHeader(); ?>
<?php
$t102_daf_kelas_siswa_delete->showMessage();
?>
<form name="ft102_daf_kelas_siswadelete" id="ft102_daf_kelas_siswadelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t102_daf_kelas_siswa_delete->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t102_daf_kelas_siswa_delete->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t102_daf_kelas_siswa">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t102_daf_kelas_siswa_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode($COMPOSITE_KEY_SEPARATOR, $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t102_daf_kelas_siswa->id->Visible) { // id ?>
		<th class="<?php echo $t102_daf_kelas_siswa->id->headerCellClass() ?>"><span id="elh_t102_daf_kelas_siswa_id" class="t102_daf_kelas_siswa_id"><?php echo $t102_daf_kelas_siswa->id->caption() ?></span></th>
<?php } ?>
<?php if ($t102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
		<th class="<?php echo $t102_daf_kelas_siswa->siswa_id->headerCellClass() ?>"><span id="elh_t102_daf_kelas_siswa_siswa_id" class="t102_daf_kelas_siswa_siswa_id"><?php echo $t102_daf_kelas_siswa->siswa_id->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t102_daf_kelas_siswa_delete->RecCnt = 0;
$i = 0;
while (!$t102_daf_kelas_siswa_delete->Recordset->EOF) {
	$t102_daf_kelas_siswa_delete->RecCnt++;
	$t102_daf_kelas_siswa_delete->RowCnt++;

	// Set row properties
	$t102_daf_kelas_siswa->resetAttributes();
	$t102_daf_kelas_siswa->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t102_daf_kelas_siswa_delete->loadRowValues($t102_daf_kelas_siswa_delete->Recordset);

	// Render row
	$t102_daf_kelas_siswa_delete->renderRow();
?>
	<tr<?php echo $t102_daf_kelas_siswa->rowAttributes() ?>>
<?php if ($t102_daf_kelas_siswa->id->Visible) { // id ?>
		<td<?php echo $t102_daf_kelas_siswa->id->cellAttributes() ?>>
<span id="el<?php echo $t102_daf_kelas_siswa_delete->RowCnt ?>_t102_daf_kelas_siswa_id" class="t102_daf_kelas_siswa_id">
<span<?php echo $t102_daf_kelas_siswa->id->viewAttributes() ?>>
<?php echo $t102_daf_kelas_siswa->id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
		<td<?php echo $t102_daf_kelas_siswa->siswa_id->cellAttributes() ?>>
<span id="el<?php echo $t102_daf_kelas_siswa_delete->RowCnt ?>_t102_daf_kelas_siswa_siswa_id" class="t102_daf_kelas_siswa_siswa_id">
<span<?php echo $t102_daf_kelas_siswa->siswa_id->viewAttributes() ?>>
<?php echo $t102_daf_kelas_siswa->siswa_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t102_daf_kelas_siswa_delete->Recordset->moveNext();
}
$t102_daf_kelas_siswa_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t102_daf_kelas_siswa_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t102_daf_kelas_siswa_delete->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t102_daf_kelas_siswa_delete->terminate();
?>