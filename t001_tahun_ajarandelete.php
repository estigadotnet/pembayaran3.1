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
$t001_tahun_ajaran_delete = new t001_tahun_ajaran_delete();

// Run the page
$t001_tahun_ajaran_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t001_tahun_ajaran_delete->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "delete";
var ft001_tahun_ajarandelete = currentForm = new ew.Form("ft001_tahun_ajarandelete", "delete");

// Form_CustomValidate event
ft001_tahun_ajarandelete.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft001_tahun_ajarandelete.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft001_tahun_ajarandelete.lists["x_Aktif[]"] = <?php echo $t001_tahun_ajaran_delete->Aktif->Lookup->toClientList() ?>;
ft001_tahun_ajarandelete.lists["x_Aktif[]"].options = <?php echo JsonEncode($t001_tahun_ajaran_delete->Aktif->options(FALSE, TRUE)) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t001_tahun_ajaran_delete->showPageHeader(); ?>
<?php
$t001_tahun_ajaran_delete->showMessage();
?>
<form name="ft001_tahun_ajarandelete" id="ft001_tahun_ajarandelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t001_tahun_ajaran_delete->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t001_tahun_ajaran_delete->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t001_tahun_ajaran">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t001_tahun_ajaran_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode($COMPOSITE_KEY_SEPARATOR, $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t001_tahun_ajaran->Mulai->Visible) { // Mulai ?>
		<th class="<?php echo $t001_tahun_ajaran->Mulai->headerCellClass() ?>"><span id="elh_t001_tahun_ajaran_Mulai" class="t001_tahun_ajaran_Mulai"><?php echo $t001_tahun_ajaran->Mulai->caption() ?></span></th>
<?php } ?>
<?php if ($t001_tahun_ajaran->Selesai->Visible) { // Selesai ?>
		<th class="<?php echo $t001_tahun_ajaran->Selesai->headerCellClass() ?>"><span id="elh_t001_tahun_ajaran_Selesai" class="t001_tahun_ajaran_Selesai"><?php echo $t001_tahun_ajaran->Selesai->caption() ?></span></th>
<?php } ?>
<?php if ($t001_tahun_ajaran->Aktif->Visible) { // Aktif ?>
		<th class="<?php echo $t001_tahun_ajaran->Aktif->headerCellClass() ?>"><span id="elh_t001_tahun_ajaran_Aktif" class="t001_tahun_ajaran_Aktif"><?php echo $t001_tahun_ajaran->Aktif->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t001_tahun_ajaran_delete->RecCnt = 0;
$i = 0;
while (!$t001_tahun_ajaran_delete->Recordset->EOF) {
	$t001_tahun_ajaran_delete->RecCnt++;
	$t001_tahun_ajaran_delete->RowCnt++;

	// Set row properties
	$t001_tahun_ajaran->resetAttributes();
	$t001_tahun_ajaran->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t001_tahun_ajaran_delete->loadRowValues($t001_tahun_ajaran_delete->Recordset);

	// Render row
	$t001_tahun_ajaran_delete->renderRow();
?>
	<tr<?php echo $t001_tahun_ajaran->rowAttributes() ?>>
<?php if ($t001_tahun_ajaran->Mulai->Visible) { // Mulai ?>
		<td<?php echo $t001_tahun_ajaran->Mulai->cellAttributes() ?>>
<span id="el<?php echo $t001_tahun_ajaran_delete->RowCnt ?>_t001_tahun_ajaran_Mulai" class="t001_tahun_ajaran_Mulai">
<span<?php echo $t001_tahun_ajaran->Mulai->viewAttributes() ?>>
<?php echo $t001_tahun_ajaran->Mulai->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t001_tahun_ajaran->Selesai->Visible) { // Selesai ?>
		<td<?php echo $t001_tahun_ajaran->Selesai->cellAttributes() ?>>
<span id="el<?php echo $t001_tahun_ajaran_delete->RowCnt ?>_t001_tahun_ajaran_Selesai" class="t001_tahun_ajaran_Selesai">
<span<?php echo $t001_tahun_ajaran->Selesai->viewAttributes() ?>>
<?php echo $t001_tahun_ajaran->Selesai->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t001_tahun_ajaran->Aktif->Visible) { // Aktif ?>
		<td<?php echo $t001_tahun_ajaran->Aktif->cellAttributes() ?>>
<span id="el<?php echo $t001_tahun_ajaran_delete->RowCnt ?>_t001_tahun_ajaran_Aktif" class="t001_tahun_ajaran_Aktif">
<span<?php echo $t001_tahun_ajaran->Aktif->viewAttributes() ?>>
<?php if (ConvertToBool($t001_tahun_ajaran->Aktif->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t001_tahun_ajaran->Aktif->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t001_tahun_ajaran->Aktif->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t001_tahun_ajaran_delete->Recordset->moveNext();
}
$t001_tahun_ajaran_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t001_tahun_ajaran_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t001_tahun_ajaran_delete->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t001_tahun_ajaran_delete->terminate();
?>