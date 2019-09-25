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
$t302_userlevels_view = new t302_userlevels_view();

// Run the page
$t302_userlevels_view->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t302_userlevels_view->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t302_userlevels->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "view";
var ft302_userlevelsview = currentForm = new ew.Form("ft302_userlevelsview", "view");

// Form_CustomValidate event
ft302_userlevelsview.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft302_userlevelsview.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if (!$t302_userlevels->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php $t302_userlevels_view->ExportOptions->render("body") ?>
<?php $t302_userlevels_view->OtherOptions->render("body") ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php $t302_userlevels_view->showPageHeader(); ?>
<?php
$t302_userlevels_view->showMessage();
?>
<form name="ft302_userlevelsview" id="ft302_userlevelsview" class="form-inline ew-form ew-view-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t302_userlevels_view->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t302_userlevels_view->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t302_userlevels">
<input type="hidden" name="modal" value="<?php echo (int)$t302_userlevels_view->IsModal ?>">
<table class="table table-striped table-sm ew-view-table">
<?php if ($t302_userlevels->userlevelid->Visible) { // userlevelid ?>
	<tr id="r_userlevelid">
		<td class="<?php echo $t302_userlevels_view->TableLeftColumnClass ?>"><span id="elh_t302_userlevels_userlevelid"><?php echo $t302_userlevels->userlevelid->caption() ?></span></td>
		<td data-name="userlevelid"<?php echo $t302_userlevels->userlevelid->cellAttributes() ?>>
<span id="el_t302_userlevels_userlevelid">
<span<?php echo $t302_userlevels->userlevelid->viewAttributes() ?>>
<?php echo $t302_userlevels->userlevelid->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t302_userlevels->userlevelname->Visible) { // userlevelname ?>
	<tr id="r_userlevelname">
		<td class="<?php echo $t302_userlevels_view->TableLeftColumnClass ?>"><span id="elh_t302_userlevels_userlevelname"><?php echo $t302_userlevels->userlevelname->caption() ?></span></td>
		<td data-name="userlevelname"<?php echo $t302_userlevels->userlevelname->cellAttributes() ?>>
<span id="el_t302_userlevels_userlevelname">
<span<?php echo $t302_userlevels->userlevelname->viewAttributes() ?>>
<?php echo $t302_userlevels->userlevelname->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</form>
<?php
$t302_userlevels_view->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t302_userlevels->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t302_userlevels_view->terminate();
?>