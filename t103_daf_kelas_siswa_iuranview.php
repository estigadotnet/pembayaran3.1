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
$t103_daf_kelas_siswa_iuran_view = new t103_daf_kelas_siswa_iuran_view();

// Run the page
$t103_daf_kelas_siswa_iuran_view->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t103_daf_kelas_siswa_iuran_view->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t103_daf_kelas_siswa_iuran->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "view";
var ft103_daf_kelas_siswa_iuranview = currentForm = new ew.Form("ft103_daf_kelas_siswa_iuranview", "view");

// Form_CustomValidate event
ft103_daf_kelas_siswa_iuranview.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft103_daf_kelas_siswa_iuranview.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft103_daf_kelas_siswa_iuranview.lists["x_byr01[]"] = <?php echo $t103_daf_kelas_siswa_iuran_view->byr01->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr01[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_view->byr01->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr02[]"] = <?php echo $t103_daf_kelas_siswa_iuran_view->byr02->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr02[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_view->byr02->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr03[]"] = <?php echo $t103_daf_kelas_siswa_iuran_view->byr03->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr03[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_view->byr03->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr04[]"] = <?php echo $t103_daf_kelas_siswa_iuran_view->byr04->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr04[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_view->byr04->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr05[]"] = <?php echo $t103_daf_kelas_siswa_iuran_view->byr05->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr05[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_view->byr05->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr06[]"] = <?php echo $t103_daf_kelas_siswa_iuran_view->byr06->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr06[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_view->byr06->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr07[]"] = <?php echo $t103_daf_kelas_siswa_iuran_view->byr07->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr07[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_view->byr07->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr08[]"] = <?php echo $t103_daf_kelas_siswa_iuran_view->byr08->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr08[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_view->byr08->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr09[]"] = <?php echo $t103_daf_kelas_siswa_iuran_view->byr09->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr09[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_view->byr09->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr10[]"] = <?php echo $t103_daf_kelas_siswa_iuran_view->byr10->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr10[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_view->byr10->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr11[]"] = <?php echo $t103_daf_kelas_siswa_iuran_view->byr11->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr11[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_view->byr11->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr12[]"] = <?php echo $t103_daf_kelas_siswa_iuran_view->byr12->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranview.lists["x_byr12[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_view->byr12->options(FALSE, TRUE)) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if (!$t103_daf_kelas_siswa_iuran->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php $t103_daf_kelas_siswa_iuran_view->ExportOptions->render("body") ?>
<?php $t103_daf_kelas_siswa_iuran_view->OtherOptions->render("body") ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php $t103_daf_kelas_siswa_iuran_view->showPageHeader(); ?>
<?php
$t103_daf_kelas_siswa_iuran_view->showMessage();
?>
<form name="ft103_daf_kelas_siswa_iuranview" id="ft103_daf_kelas_siswa_iuranview" class="form-inline ew-form ew-view-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t103_daf_kelas_siswa_iuran_view->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_view->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t103_daf_kelas_siswa_iuran">
<input type="hidden" name="modal" value="<?php echo (int)$t103_daf_kelas_siswa_iuran_view->IsModal ?>">
<table class="table table-striped table-sm ew-view-table">
<?php if ($t103_daf_kelas_siswa_iuran->id->Visible) { // id ?>
	<tr id="r_id">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_id"><?php echo $t103_daf_kelas_siswa_iuran->id->caption() ?></span></td>
		<td data-name="id"<?php echo $t103_daf_kelas_siswa_iuran->id->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->id->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->id->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Visible) { // daf_kelas_siswa_id ?>
	<tr id="r_daf_kelas_siswa_id">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id"><?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->caption() ?></span></td>
		<td data-name="daf_kelas_siswa_id"<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
	<tr id="r_iuran_id">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_iuran_id"><?php echo $t103_daf_kelas_siswa_iuran->iuran_id->caption() ?></span></td>
		<td data-name="iuran_id"<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_iuran_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->Jumlah->Visible) { // Jumlah ?>
	<tr id="r_Jumlah">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_Jumlah"><?php echo $t103_daf_kelas_siswa_iuran->Jumlah->caption() ?></span></td>
		<td data-name="Jumlah"<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_Jumlah">
<span<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr01->Visible) { // byr01 ?>
	<tr id="r_byr01">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr01"><?php echo $t103_daf_kelas_siswa_iuran->byr01->caption() ?></span></td>
		<td data-name="byr01"<?php echo $t103_daf_kelas_siswa_iuran->byr01->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr01">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr01->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr01->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr01->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr01->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml01->Visible) { // jml01 ?>
	<tr id="r_jml01">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml01"><?php echo $t103_daf_kelas_siswa_iuran->jml01->caption() ?></span></td>
		<td data-name="jml01"<?php echo $t103_daf_kelas_siswa_iuran->jml01->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml01">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml01->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml01->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl01->Visible) { // tgl01 ?>
	<tr id="r_tgl01">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl01"><?php echo $t103_daf_kelas_siswa_iuran->tgl01->caption() ?></span></td>
		<td data-name="tgl01"<?php echo $t103_daf_kelas_siswa_iuran->tgl01->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl01">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl01->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl01->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr02->Visible) { // byr02 ?>
	<tr id="r_byr02">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr02"><?php echo $t103_daf_kelas_siswa_iuran->byr02->caption() ?></span></td>
		<td data-name="byr02"<?php echo $t103_daf_kelas_siswa_iuran->byr02->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr02">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr02->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr02->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr02->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr02->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml02->Visible) { // jml02 ?>
	<tr id="r_jml02">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml02"><?php echo $t103_daf_kelas_siswa_iuran->jml02->caption() ?></span></td>
		<td data-name="jml02"<?php echo $t103_daf_kelas_siswa_iuran->jml02->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml02">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml02->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml02->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl02->Visible) { // tgl02 ?>
	<tr id="r_tgl02">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl02"><?php echo $t103_daf_kelas_siswa_iuran->tgl02->caption() ?></span></td>
		<td data-name="tgl02"<?php echo $t103_daf_kelas_siswa_iuran->tgl02->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl02">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl02->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl02->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr03->Visible) { // byr03 ?>
	<tr id="r_byr03">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr03"><?php echo $t103_daf_kelas_siswa_iuran->byr03->caption() ?></span></td>
		<td data-name="byr03"<?php echo $t103_daf_kelas_siswa_iuran->byr03->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr03">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr03->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr03->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr03->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr03->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml03->Visible) { // jml03 ?>
	<tr id="r_jml03">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml03"><?php echo $t103_daf_kelas_siswa_iuran->jml03->caption() ?></span></td>
		<td data-name="jml03"<?php echo $t103_daf_kelas_siswa_iuran->jml03->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml03">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml03->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml03->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl03->Visible) { // tgl03 ?>
	<tr id="r_tgl03">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl03"><?php echo $t103_daf_kelas_siswa_iuran->tgl03->caption() ?></span></td>
		<td data-name="tgl03"<?php echo $t103_daf_kelas_siswa_iuran->tgl03->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl03">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl03->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl03->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr04->Visible) { // byr04 ?>
	<tr id="r_byr04">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr04"><?php echo $t103_daf_kelas_siswa_iuran->byr04->caption() ?></span></td>
		<td data-name="byr04"<?php echo $t103_daf_kelas_siswa_iuran->byr04->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr04">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr04->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr04->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr04->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr04->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml04->Visible) { // jml04 ?>
	<tr id="r_jml04">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml04"><?php echo $t103_daf_kelas_siswa_iuran->jml04->caption() ?></span></td>
		<td data-name="jml04"<?php echo $t103_daf_kelas_siswa_iuran->jml04->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml04">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml04->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml04->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl04->Visible) { // tgl04 ?>
	<tr id="r_tgl04">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl04"><?php echo $t103_daf_kelas_siswa_iuran->tgl04->caption() ?></span></td>
		<td data-name="tgl04"<?php echo $t103_daf_kelas_siswa_iuran->tgl04->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl04">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl04->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl04->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr05->Visible) { // byr05 ?>
	<tr id="r_byr05">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr05"><?php echo $t103_daf_kelas_siswa_iuran->byr05->caption() ?></span></td>
		<td data-name="byr05"<?php echo $t103_daf_kelas_siswa_iuran->byr05->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr05">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr05->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr05->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr05->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr05->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml05->Visible) { // jml05 ?>
	<tr id="r_jml05">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml05"><?php echo $t103_daf_kelas_siswa_iuran->jml05->caption() ?></span></td>
		<td data-name="jml05"<?php echo $t103_daf_kelas_siswa_iuran->jml05->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml05">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml05->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml05->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl05->Visible) { // tgl05 ?>
	<tr id="r_tgl05">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl05"><?php echo $t103_daf_kelas_siswa_iuran->tgl05->caption() ?></span></td>
		<td data-name="tgl05"<?php echo $t103_daf_kelas_siswa_iuran->tgl05->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl05">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl05->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl05->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr06->Visible) { // byr06 ?>
	<tr id="r_byr06">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr06"><?php echo $t103_daf_kelas_siswa_iuran->byr06->caption() ?></span></td>
		<td data-name="byr06"<?php echo $t103_daf_kelas_siswa_iuran->byr06->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr06">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr06->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr06->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr06->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr06->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml06->Visible) { // jml06 ?>
	<tr id="r_jml06">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml06"><?php echo $t103_daf_kelas_siswa_iuran->jml06->caption() ?></span></td>
		<td data-name="jml06"<?php echo $t103_daf_kelas_siswa_iuran->jml06->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml06">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml06->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml06->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl06->Visible) { // tgl06 ?>
	<tr id="r_tgl06">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl06"><?php echo $t103_daf_kelas_siswa_iuran->tgl06->caption() ?></span></td>
		<td data-name="tgl06"<?php echo $t103_daf_kelas_siswa_iuran->tgl06->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl06">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl06->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl06->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr07->Visible) { // byr07 ?>
	<tr id="r_byr07">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr07"><?php echo $t103_daf_kelas_siswa_iuran->byr07->caption() ?></span></td>
		<td data-name="byr07"<?php echo $t103_daf_kelas_siswa_iuran->byr07->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr07">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr07->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr07->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr07->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr07->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml07->Visible) { // jml07 ?>
	<tr id="r_jml07">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml07"><?php echo $t103_daf_kelas_siswa_iuran->jml07->caption() ?></span></td>
		<td data-name="jml07"<?php echo $t103_daf_kelas_siswa_iuran->jml07->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml07">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml07->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml07->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl07->Visible) { // tgl07 ?>
	<tr id="r_tgl07">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl07"><?php echo $t103_daf_kelas_siswa_iuran->tgl07->caption() ?></span></td>
		<td data-name="tgl07"<?php echo $t103_daf_kelas_siswa_iuran->tgl07->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl07">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl07->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl07->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr08->Visible) { // byr08 ?>
	<tr id="r_byr08">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr08"><?php echo $t103_daf_kelas_siswa_iuran->byr08->caption() ?></span></td>
		<td data-name="byr08"<?php echo $t103_daf_kelas_siswa_iuran->byr08->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr08">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr08->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr08->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr08->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr08->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml08->Visible) { // jml08 ?>
	<tr id="r_jml08">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml08"><?php echo $t103_daf_kelas_siswa_iuran->jml08->caption() ?></span></td>
		<td data-name="jml08"<?php echo $t103_daf_kelas_siswa_iuran->jml08->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml08">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml08->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml08->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl08->Visible) { // tgl08 ?>
	<tr id="r_tgl08">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl08"><?php echo $t103_daf_kelas_siswa_iuran->tgl08->caption() ?></span></td>
		<td data-name="tgl08"<?php echo $t103_daf_kelas_siswa_iuran->tgl08->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl08">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl08->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl08->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr09->Visible) { // byr09 ?>
	<tr id="r_byr09">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr09"><?php echo $t103_daf_kelas_siswa_iuran->byr09->caption() ?></span></td>
		<td data-name="byr09"<?php echo $t103_daf_kelas_siswa_iuran->byr09->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr09">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr09->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr09->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr09->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr09->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml09->Visible) { // jml09 ?>
	<tr id="r_jml09">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml09"><?php echo $t103_daf_kelas_siswa_iuran->jml09->caption() ?></span></td>
		<td data-name="jml09"<?php echo $t103_daf_kelas_siswa_iuran->jml09->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml09">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml09->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml09->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl09->Visible) { // tgl09 ?>
	<tr id="r_tgl09">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl09"><?php echo $t103_daf_kelas_siswa_iuran->tgl09->caption() ?></span></td>
		<td data-name="tgl09"<?php echo $t103_daf_kelas_siswa_iuran->tgl09->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl09">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl09->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl09->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr10->Visible) { // byr10 ?>
	<tr id="r_byr10">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr10"><?php echo $t103_daf_kelas_siswa_iuran->byr10->caption() ?></span></td>
		<td data-name="byr10"<?php echo $t103_daf_kelas_siswa_iuran->byr10->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr10">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr10->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr10->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr10->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr10->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml10->Visible) { // jml10 ?>
	<tr id="r_jml10">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml10"><?php echo $t103_daf_kelas_siswa_iuran->jml10->caption() ?></span></td>
		<td data-name="jml10"<?php echo $t103_daf_kelas_siswa_iuran->jml10->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml10">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml10->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml10->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl10->Visible) { // tgl10 ?>
	<tr id="r_tgl10">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl10"><?php echo $t103_daf_kelas_siswa_iuran->tgl10->caption() ?></span></td>
		<td data-name="tgl10"<?php echo $t103_daf_kelas_siswa_iuran->tgl10->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl10">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl10->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl10->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr11->Visible) { // byr11 ?>
	<tr id="r_byr11">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr11"><?php echo $t103_daf_kelas_siswa_iuran->byr11->caption() ?></span></td>
		<td data-name="byr11"<?php echo $t103_daf_kelas_siswa_iuran->byr11->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr11">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr11->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr11->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr11->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr11->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml11->Visible) { // jml11 ?>
	<tr id="r_jml11">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml11"><?php echo $t103_daf_kelas_siswa_iuran->jml11->caption() ?></span></td>
		<td data-name="jml11"<?php echo $t103_daf_kelas_siswa_iuran->jml11->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml11">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml11->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml11->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl11->Visible) { // tgl11 ?>
	<tr id="r_tgl11">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl11"><?php echo $t103_daf_kelas_siswa_iuran->tgl11->caption() ?></span></td>
		<td data-name="tgl11"<?php echo $t103_daf_kelas_siswa_iuran->tgl11->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl11">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl11->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl11->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr12->Visible) { // byr12 ?>
	<tr id="r_byr12">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr12"><?php echo $t103_daf_kelas_siswa_iuran->byr12->caption() ?></span></td>
		<td data-name="byr12"<?php echo $t103_daf_kelas_siswa_iuran->byr12->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr12">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr12->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr12->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr12->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr12->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml12->Visible) { // jml12 ?>
	<tr id="r_jml12">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml12"><?php echo $t103_daf_kelas_siswa_iuran->jml12->caption() ?></span></td>
		<td data-name="jml12"<?php echo $t103_daf_kelas_siswa_iuran->jml12->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml12">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml12->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml12->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl12->Visible) { // tgl12 ?>
	<tr id="r_tgl12">
		<td class="<?php echo $t103_daf_kelas_siswa_iuran_view->TableLeftColumnClass ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl12"><?php echo $t103_daf_kelas_siswa_iuran->tgl12->caption() ?></span></td>
		<td data-name="tgl12"<?php echo $t103_daf_kelas_siswa_iuran->tgl12->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl12">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl12->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl12->getViewValue() ?></span>
</span>
</td>
	</tr>
<?php } ?>
</table>
</form>
<?php
$t103_daf_kelas_siswa_iuran_view->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<?php if (!$t103_daf_kelas_siswa_iuran->isExport()) { ?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php } ?>
<?php include_once "footer.php" ?>
<?php
$t103_daf_kelas_siswa_iuran_view->terminate();
?>