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
$t101_daf_kelas_view = new t101_daf_kelas_view();

// Run the page
$t101_daf_kelas_view->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t101_daf_kelas_view->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t101_daf_kelas->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "view";
var ft101_daf_kelasview = currentForm = new ew.Form("ft101_daf_kelasview", "view");

// Form_CustomValidate event
ft101_daf_kelasview.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft101_daf_kelasview.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft101_daf_kelasview.lists["x_tahun_ajaran_id"] = <?php echo $t101_daf_kelas_view->tahun_ajaran_id->Lookup->toClientList() ?>;
ft101_daf_kelasview.lists["x_tahun_ajaran_id"].options = <?php echo JsonEncode($t101_daf_kelas_view->tahun_ajaran_id->lookupOptions()) ?>;
ft101_daf_kelasview.lists["x_sekolah_id"] = <?php echo $t101_daf_kelas_view->sekolah_id->Lookup->toClientList() ?>;
ft101_daf_kelasview.lists["x_sekolah_id"].options = <?php echo JsonEncode($t101_daf_kelas_view->sekolah_id->lookupOptions()) ?>;
ft101_daf_kelasview.lists["x_kelas_id"] = <?php echo $t101_daf_kelas_view->kelas_id->Lookup->toClientList() ?>;
ft101_daf_kelasview.lists["x_kelas_id"].options = <?php echo JsonEncode($t101_daf_kelas_view->kelas_id->lookupOptions()) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if (!$t101_daf_kelas->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php $t101_daf_kelas_view->ExportOptions->render("body") ?>
<?php $t101_daf_kelas_view->OtherOptions->render("body") ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php $t101_daf_kelas_view->showPageHeader(); ?>
<?php
$t101_daf_kelas_view->showMessage();
?>
<form name="ft101_daf_kelasview" id="ft101_daf_kelasview" class="form-inline ew-form ew-view-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t101_daf_kelas_view->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t101_daf_kelas_view->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t101_daf_kelas">
<input type="hidden" name="modal" value="<?php echo (int)$t101_daf_kelas_view->IsModal ?>">
<table class="table table-striped table-sm ew-view-table">
<?php if ($t101_daf_kelas->tahun_ajaran_id->Visible) { // tahun_ajaran_id ?>
	<tr id="r_tahun_ajaran_id">
		<td class="<?php echo $t101_daf_kelas_view->TableLeftColumnClass ?>"><span id="elh_t101_daf_kelas_tahun_ajaran_id"><?php echo $t101_daf_kelas->tahun_ajaran_id->caption() ?></span></td>
		<td data-name="tahun_ajaran_id"<?php echo $t101_daf_kelas->tahun_ajaran_id->cellAttributes() ?>>
<span id="el_t101_daf_kelas_tahun_ajaran_id">
<span<?php echo $t101_daf_kelas->tahun_ajaran_id->viewAttributes() ?>>
<?php echo $t101_daf_kelas->tahun_ajaran_id->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t101_daf_kelas->sekolah_id->Visible) { // sekolah_id ?>
	<tr id="r_sekolah_id">
		<td class="<?php echo $t101_daf_kelas_view->TableLeftColumnClass ?>"><span id="elh_t101_daf_kelas_sekolah_id"><?php echo $t101_daf_kelas->sekolah_id->caption() ?></span></td>
		<td data-name="sekolah_id"<?php echo $t101_daf_kelas->sekolah_id->cellAttributes() ?>>
<span id="el_t101_daf_kelas_sekolah_id">
<span<?php echo $t101_daf_kelas->sekolah_id->viewAttributes() ?>>
<?php echo $t101_daf_kelas->sekolah_id->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t101_daf_kelas->kelas_id->Visible) { // kelas_id ?>
	<tr id="r_kelas_id">
		<td class="<?php echo $t101_daf_kelas_view->TableLeftColumnClass ?>"><span id="elh_t101_daf_kelas_kelas_id"><?php echo $t101_daf_kelas->kelas_id->caption() ?></span></td>
		<td data-name="kelas_id"<?php echo $t101_daf_kelas->kelas_id->cellAttributes() ?>>
<span id="el_t101_daf_kelas_kelas_id">
<span<?php echo $t101_daf_kelas->kelas_id->viewAttributes() ?>>
<?php echo $t101_daf_kelas->kelas_id->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
<?php
	if (in_array("t102_daf_kelas_siswa", explode(",", $t101_daf_kelas->getCurrentDetailTable())) && $t102_daf_kelas_siswa->DetailView) {
?>
<?php if ($t101_daf_kelas->getCurrentDetailTable() <> "") { ?>
<h4 class="ew-detail-caption"><?php echo $Language->TablePhrase("t102_daf_kelas_siswa", "TblCaption") ?></h4>
<?php } ?>
<?php include_once "t102_daf_kelas_siswagrid.php" ?>
<?php } ?>
</form>
<?php
$t101_daf_kelas_view->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t101_daf_kelas->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t101_daf_kelas_view->terminate();
?>