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
$t003_kelas_view = new t003_kelas_view();

// Run the page
$t003_kelas_view->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t003_kelas_view->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t003_kelas->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "view";
var ft003_kelasview = currentForm = new ew.Form("ft003_kelasview", "view");

// Form_CustomValidate event
ft003_kelasview.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft003_kelasview.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if (!$t003_kelas->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php $t003_kelas_view->ExportOptions->render("body") ?>
<?php $t003_kelas_view->OtherOptions->render("body") ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php $t003_kelas_view->showPageHeader(); ?>
<?php
$t003_kelas_view->showMessage();
?>
<form name="ft003_kelasview" id="ft003_kelasview" class="form-inline ew-form ew-view-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t003_kelas_view->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t003_kelas_view->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t003_kelas">
<input type="hidden" name="modal" value="<?php echo (int)$t003_kelas_view->IsModal ?>">
<table class="table table-striped table-sm ew-view-table">
<?php if ($t003_kelas->Nama->Visible) { // Nama ?>
	<tr id="r_Nama">
		<td class="<?php echo $t003_kelas_view->TableLeftColumnClass ?>"><span id="elh_t003_kelas_Nama"><?php echo $t003_kelas->Nama->caption() ?></span></td>
		<td data-name="Nama"<?php echo $t003_kelas->Nama->cellAttributes() ?>>
<span id="el_t003_kelas_Nama">
<span<?php echo $t003_kelas->Nama->viewAttributes() ?>>
<?php echo $t003_kelas->Nama->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</form>
<?php
$t003_kelas_view->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t003_kelas->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t003_kelas_view->terminate();
?>