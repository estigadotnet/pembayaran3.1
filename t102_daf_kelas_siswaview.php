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
$t102_daf_kelas_siswa_view = new t102_daf_kelas_siswa_view();

// Run the page
$t102_daf_kelas_siswa_view->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t102_daf_kelas_siswa_view->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t102_daf_kelas_siswa->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "view";
var ft102_daf_kelas_siswaview = currentForm = new ew.Form("ft102_daf_kelas_siswaview", "view");

// Form_CustomValidate event
ft102_daf_kelas_siswaview.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft102_daf_kelas_siswaview.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft102_daf_kelas_siswaview.lists["x_siswa_id"] = <?php echo $t102_daf_kelas_siswa_view->siswa_id->Lookup->toClientList() ?>;
ft102_daf_kelas_siswaview.lists["x_siswa_id"].options = <?php echo JsonEncode($t102_daf_kelas_siswa_view->siswa_id->lookupOptions()) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if (!$t102_daf_kelas_siswa->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php $t102_daf_kelas_siswa_view->ExportOptions->render("body") ?>
<?php $t102_daf_kelas_siswa_view->OtherOptions->render("body") ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php $t102_daf_kelas_siswa_view->showPageHeader(); ?>
<?php
$t102_daf_kelas_siswa_view->showMessage();
?>
<form name="ft102_daf_kelas_siswaview" id="ft102_daf_kelas_siswaview" class="form-inline ew-form ew-view-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t102_daf_kelas_siswa_view->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t102_daf_kelas_siswa_view->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t102_daf_kelas_siswa">
<input type="hidden" name="modal" value="<?php echo (int)$t102_daf_kelas_siswa_view->IsModal ?>">
<table class="table table-striped table-sm ew-view-table">
<?php if ($t102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
	<tr id="r_siswa_id">
		<td class="<?php echo $t102_daf_kelas_siswa_view->TableLeftColumnClass ?>"><span id="elh_t102_daf_kelas_siswa_siswa_id"><?php echo $t102_daf_kelas_siswa->siswa_id->caption() ?></span></td>
		<td data-name="siswa_id"<?php echo $t102_daf_kelas_siswa->siswa_id->cellAttributes() ?>>
<span id="el_t102_daf_kelas_siswa_siswa_id">
<span<?php echo $t102_daf_kelas_siswa->siswa_id->viewAttributes() ?>>
<?php echo $t102_daf_kelas_siswa->siswa_id->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</form>
<?php
$t102_daf_kelas_siswa_view->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t102_daf_kelas_siswa->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t102_daf_kelas_siswa_view->terminate();
?>