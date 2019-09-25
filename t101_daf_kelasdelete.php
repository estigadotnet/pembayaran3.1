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
$t101_daf_kelas_delete = new t101_daf_kelas_delete();

// Run the page
$t101_daf_kelas_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t101_daf_kelas_delete->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "delete";
var ft101_daf_kelasdelete = currentForm = new ew.Form("ft101_daf_kelasdelete", "delete");

// Form_CustomValidate event
ft101_daf_kelasdelete.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft101_daf_kelasdelete.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft101_daf_kelasdelete.lists["x_tahun_ajaran_id"] = <?php echo $t101_daf_kelas_delete->tahun_ajaran_id->Lookup->toClientList() ?>;
ft101_daf_kelasdelete.lists["x_tahun_ajaran_id"].options = <?php echo JsonEncode($t101_daf_kelas_delete->tahun_ajaran_id->lookupOptions()) ?>;
ft101_daf_kelasdelete.lists["x_sekolah_id"] = <?php echo $t101_daf_kelas_delete->sekolah_id->Lookup->toClientList() ?>;
ft101_daf_kelasdelete.lists["x_sekolah_id"].options = <?php echo JsonEncode($t101_daf_kelas_delete->sekolah_id->lookupOptions()) ?>;
ft101_daf_kelasdelete.lists["x_kelas_id"] = <?php echo $t101_daf_kelas_delete->kelas_id->Lookup->toClientList() ?>;
ft101_daf_kelasdelete.lists["x_kelas_id"].options = <?php echo JsonEncode($t101_daf_kelas_delete->kelas_id->lookupOptions()) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t101_daf_kelas_delete->showPageHeader(); ?>
<?php
$t101_daf_kelas_delete->showMessage();
?>
<form name="ft101_daf_kelasdelete" id="ft101_daf_kelasdelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t101_daf_kelas_delete->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t101_daf_kelas_delete->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t101_daf_kelas">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t101_daf_kelas_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode($COMPOSITE_KEY_SEPARATOR, $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t101_daf_kelas->tahun_ajaran_id->Visible) { // tahun_ajaran_id ?>
		<th class="<?php echo $t101_daf_kelas->tahun_ajaran_id->headerCellClass() ?>"><span id="elh_t101_daf_kelas_tahun_ajaran_id" class="t101_daf_kelas_tahun_ajaran_id"><?php echo $t101_daf_kelas->tahun_ajaran_id->caption() ?></span></th>
<?php } ?>
<?php if ($t101_daf_kelas->sekolah_id->Visible) { // sekolah_id ?>
		<th class="<?php echo $t101_daf_kelas->sekolah_id->headerCellClass() ?>"><span id="elh_t101_daf_kelas_sekolah_id" class="t101_daf_kelas_sekolah_id"><?php echo $t101_daf_kelas->sekolah_id->caption() ?></span></th>
<?php } ?>
<?php if ($t101_daf_kelas->kelas_id->Visible) { // kelas_id ?>
		<th class="<?php echo $t101_daf_kelas->kelas_id->headerCellClass() ?>"><span id="elh_t101_daf_kelas_kelas_id" class="t101_daf_kelas_kelas_id"><?php echo $t101_daf_kelas->kelas_id->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t101_daf_kelas_delete->RecCnt = 0;
$i = 0;
while (!$t101_daf_kelas_delete->Recordset->EOF) {
	$t101_daf_kelas_delete->RecCnt++;
	$t101_daf_kelas_delete->RowCnt++;

	// Set row properties
	$t101_daf_kelas->resetAttributes();
	$t101_daf_kelas->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t101_daf_kelas_delete->loadRowValues($t101_daf_kelas_delete->Recordset);

	// Render row
	$t101_daf_kelas_delete->renderRow();
?>
	<tr<?php echo $t101_daf_kelas->rowAttributes() ?>>
<?php if ($t101_daf_kelas->tahun_ajaran_id->Visible) { // tahun_ajaran_id ?>
		<td<?php echo $t101_daf_kelas->tahun_ajaran_id->cellAttributes() ?>>
<span id="el<?php echo $t101_daf_kelas_delete->RowCnt ?>_t101_daf_kelas_tahun_ajaran_id" class="t101_daf_kelas_tahun_ajaran_id">
<span<?php echo $t101_daf_kelas->tahun_ajaran_id->viewAttributes() ?>>
<?php echo $t101_daf_kelas->tahun_ajaran_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t101_daf_kelas->sekolah_id->Visible) { // sekolah_id ?>
		<td<?php echo $t101_daf_kelas->sekolah_id->cellAttributes() ?>>
<span id="el<?php echo $t101_daf_kelas_delete->RowCnt ?>_t101_daf_kelas_sekolah_id" class="t101_daf_kelas_sekolah_id">
<span<?php echo $t101_daf_kelas->sekolah_id->viewAttributes() ?>>
<?php echo $t101_daf_kelas->sekolah_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t101_daf_kelas->kelas_id->Visible) { // kelas_id ?>
		<td<?php echo $t101_daf_kelas->kelas_id->cellAttributes() ?>>
<span id="el<?php echo $t101_daf_kelas_delete->RowCnt ?>_t101_daf_kelas_kelas_id" class="t101_daf_kelas_kelas_id">
<span<?php echo $t101_daf_kelas->kelas_id->viewAttributes() ?>>
<?php echo $t101_daf_kelas->kelas_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t101_daf_kelas_delete->Recordset->moveNext();
}
$t101_daf_kelas_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t101_daf_kelas_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t101_daf_kelas_delete->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t101_daf_kelas_delete->terminate();
?>