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
$t303_userlevelpermissions_delete = new t303_userlevelpermissions_delete();

// Run the page
$t303_userlevelpermissions_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t303_userlevelpermissions_delete->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "delete";
var ft303_userlevelpermissionsdelete = currentForm = new ew.Form("ft303_userlevelpermissionsdelete", "delete");

// Form_CustomValidate event
ft303_userlevelpermissionsdelete.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft303_userlevelpermissionsdelete.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t303_userlevelpermissions_delete->showPageHeader(); ?>
<?php
$t303_userlevelpermissions_delete->showMessage();
?>
<form name="ft303_userlevelpermissionsdelete" id="ft303_userlevelpermissionsdelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t303_userlevelpermissions_delete->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t303_userlevelpermissions_delete->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t303_userlevelpermissions">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t303_userlevelpermissions_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode($COMPOSITE_KEY_SEPARATOR, $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t303_userlevelpermissions->userlevelid->Visible) { // userlevelid ?>
		<th class="<?php echo $t303_userlevelpermissions->userlevelid->headerCellClass() ?>"><span id="elh_t303_userlevelpermissions_userlevelid" class="t303_userlevelpermissions_userlevelid"><?php echo $t303_userlevelpermissions->userlevelid->caption() ?></span></th>
<?php } ?>
<?php if ($t303_userlevelpermissions->_tablename->Visible) { // tablename ?>
		<th class="<?php echo $t303_userlevelpermissions->_tablename->headerCellClass() ?>"><span id="elh_t303_userlevelpermissions__tablename" class="t303_userlevelpermissions__tablename"><?php echo $t303_userlevelpermissions->_tablename->caption() ?></span></th>
<?php } ?>
<?php if ($t303_userlevelpermissions->permission->Visible) { // permission ?>
		<th class="<?php echo $t303_userlevelpermissions->permission->headerCellClass() ?>"><span id="elh_t303_userlevelpermissions_permission" class="t303_userlevelpermissions_permission"><?php echo $t303_userlevelpermissions->permission->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t303_userlevelpermissions_delete->RecCnt = 0;
$i = 0;
while (!$t303_userlevelpermissions_delete->Recordset->EOF) {
	$t303_userlevelpermissions_delete->RecCnt++;
	$t303_userlevelpermissions_delete->RowCnt++;

	// Set row properties
	$t303_userlevelpermissions->resetAttributes();
	$t303_userlevelpermissions->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t303_userlevelpermissions_delete->loadRowValues($t303_userlevelpermissions_delete->Recordset);

	// Render row
	$t303_userlevelpermissions_delete->renderRow();
?>
	<tr<?php echo $t303_userlevelpermissions->rowAttributes() ?>>
<?php if ($t303_userlevelpermissions->userlevelid->Visible) { // userlevelid ?>
		<td<?php echo $t303_userlevelpermissions->userlevelid->cellAttributes() ?>>
<span id="el<?php echo $t303_userlevelpermissions_delete->RowCnt ?>_t303_userlevelpermissions_userlevelid" class="t303_userlevelpermissions_userlevelid">
<span<?php echo $t303_userlevelpermissions->userlevelid->viewAttributes() ?>>
<?php echo $t303_userlevelpermissions->userlevelid->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t303_userlevelpermissions->_tablename->Visible) { // tablename ?>
		<td<?php echo $t303_userlevelpermissions->_tablename->cellAttributes() ?>>
<span id="el<?php echo $t303_userlevelpermissions_delete->RowCnt ?>_t303_userlevelpermissions__tablename" class="t303_userlevelpermissions__tablename">
<span<?php echo $t303_userlevelpermissions->_tablename->viewAttributes() ?>>
<?php echo $t303_userlevelpermissions->_tablename->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t303_userlevelpermissions->permission->Visible) { // permission ?>
		<td<?php echo $t303_userlevelpermissions->permission->cellAttributes() ?>>
<span id="el<?php echo $t303_userlevelpermissions_delete->RowCnt ?>_t303_userlevelpermissions_permission" class="t303_userlevelpermissions_permission">
<span<?php echo $t303_userlevelpermissions->permission->viewAttributes() ?>>
<?php echo $t303_userlevelpermissions->permission->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t303_userlevelpermissions_delete->Recordset->moveNext();
}
$t303_userlevelpermissions_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t303_userlevelpermissions_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t303_userlevelpermissions_delete->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t303_userlevelpermissions_delete->terminate();
?>