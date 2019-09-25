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
$t302_userlevels_delete = new t302_userlevels_delete();

// Run the page
$t302_userlevels_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t302_userlevels_delete->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "delete";
var ft302_userlevelsdelete = currentForm = new ew.Form("ft302_userlevelsdelete", "delete");

// Form_CustomValidate event
ft302_userlevelsdelete.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft302_userlevelsdelete.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t302_userlevels_delete->showPageHeader(); ?>
<?php
$t302_userlevels_delete->showMessage();
?>
<form name="ft302_userlevelsdelete" id="ft302_userlevelsdelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t302_userlevels_delete->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t302_userlevels_delete->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t302_userlevels">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t302_userlevels_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode($COMPOSITE_KEY_SEPARATOR, $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t302_userlevels->userlevelid->Visible) { // userlevelid ?>
		<th class="<?php echo $t302_userlevels->userlevelid->headerCellClass() ?>"><span id="elh_t302_userlevels_userlevelid" class="t302_userlevels_userlevelid"><?php echo $t302_userlevels->userlevelid->caption() ?></span></th>
<?php } ?>
<?php if ($t302_userlevels->userlevelname->Visible) { // userlevelname ?>
		<th class="<?php echo $t302_userlevels->userlevelname->headerCellClass() ?>"><span id="elh_t302_userlevels_userlevelname" class="t302_userlevels_userlevelname"><?php echo $t302_userlevels->userlevelname->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t302_userlevels_delete->RecCnt = 0;
$i = 0;
while (!$t302_userlevels_delete->Recordset->EOF) {
	$t302_userlevels_delete->RecCnt++;
	$t302_userlevels_delete->RowCnt++;

	// Set row properties
	$t302_userlevels->resetAttributes();
	$t302_userlevels->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t302_userlevels_delete->loadRowValues($t302_userlevels_delete->Recordset);

	// Render row
	$t302_userlevels_delete->renderRow();
?>
	<tr<?php echo $t302_userlevels->rowAttributes() ?>>
<?php if ($t302_userlevels->userlevelid->Visible) { // userlevelid ?>
		<td<?php echo $t302_userlevels->userlevelid->cellAttributes() ?>>
<span id="el<?php echo $t302_userlevels_delete->RowCnt ?>_t302_userlevels_userlevelid" class="t302_userlevels_userlevelid">
<span<?php echo $t302_userlevels->userlevelid->viewAttributes() ?>>
<?php echo $t302_userlevels->userlevelid->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t302_userlevels->userlevelname->Visible) { // userlevelname ?>
		<td<?php echo $t302_userlevels->userlevelname->cellAttributes() ?>>
<span id="el<?php echo $t302_userlevels_delete->RowCnt ?>_t302_userlevels_userlevelname" class="t302_userlevels_userlevelname">
<span<?php echo $t302_userlevels->userlevelname->viewAttributes() ?>>
<?php echo $t302_userlevels->userlevelname->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t302_userlevels_delete->Recordset->moveNext();
}
$t302_userlevels_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t302_userlevels_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t302_userlevels_delete->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t302_userlevels_delete->terminate();
?>