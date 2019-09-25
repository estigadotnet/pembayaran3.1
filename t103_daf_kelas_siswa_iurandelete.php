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
$t103_daf_kelas_siswa_iuran_delete = new t103_daf_kelas_siswa_iuran_delete();

// Run the page
$t103_daf_kelas_siswa_iuran_delete->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t103_daf_kelas_siswa_iuran_delete->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "delete";
var ft103_daf_kelas_siswa_iurandelete = currentForm = new ew.Form("ft103_daf_kelas_siswa_iurandelete", "delete");

// Form_CustomValidate event
ft103_daf_kelas_siswa_iurandelete.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft103_daf_kelas_siswa_iurandelete.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft103_daf_kelas_siswa_iurandelete.lists["x_byr01[]"] = <?php echo $t103_daf_kelas_siswa_iuran_delete->byr01->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr01[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_delete->byr01->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr02[]"] = <?php echo $t103_daf_kelas_siswa_iuran_delete->byr02->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr02[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_delete->byr02->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr03[]"] = <?php echo $t103_daf_kelas_siswa_iuran_delete->byr03->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr03[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_delete->byr03->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr04[]"] = <?php echo $t103_daf_kelas_siswa_iuran_delete->byr04->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr04[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_delete->byr04->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr05[]"] = <?php echo $t103_daf_kelas_siswa_iuran_delete->byr05->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr05[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_delete->byr05->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr06[]"] = <?php echo $t103_daf_kelas_siswa_iuran_delete->byr06->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr06[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_delete->byr06->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr07[]"] = <?php echo $t103_daf_kelas_siswa_iuran_delete->byr07->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr07[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_delete->byr07->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr08[]"] = <?php echo $t103_daf_kelas_siswa_iuran_delete->byr08->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr08[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_delete->byr08->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr09[]"] = <?php echo $t103_daf_kelas_siswa_iuran_delete->byr09->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr09[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_delete->byr09->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr10[]"] = <?php echo $t103_daf_kelas_siswa_iuran_delete->byr10->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr10[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_delete->byr10->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr11[]"] = <?php echo $t103_daf_kelas_siswa_iuran_delete->byr11->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr11[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_delete->byr11->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr12[]"] = <?php echo $t103_daf_kelas_siswa_iuran_delete->byr12->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iurandelete.lists["x_byr12[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_delete->byr12->options(FALSE, TRUE)) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t103_daf_kelas_siswa_iuran_delete->showPageHeader(); ?>
<?php
$t103_daf_kelas_siswa_iuran_delete->showMessage();
?>
<form name="ft103_daf_kelas_siswa_iurandelete" id="ft103_daf_kelas_siswa_iurandelete" class="form-inline ew-form ew-delete-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t103_daf_kelas_siswa_iuran_delete->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_delete->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t103_daf_kelas_siswa_iuran">
<input type="hidden" name="action" id="action" value="delete">
<?php foreach ($t103_daf_kelas_siswa_iuran_delete->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode($COMPOSITE_KEY_SEPARATOR, $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div class="card ew-card ew-grid">
<div class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<table class="table ew-table">
	<thead>
	<tr class="ew-table-header">
<?php if ($t103_daf_kelas_siswa_iuran->id->Visible) { // id ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->id->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_id" class="t103_daf_kelas_siswa_iuran_id"><?php echo $t103_daf_kelas_siswa_iuran->id->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Visible) { // daf_kelas_siswa_id ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id"><?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_iuran_id" class="t103_daf_kelas_siswa_iuran_iuran_id"><?php echo $t103_daf_kelas_siswa_iuran->iuran_id->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->Jumlah->Visible) { // Jumlah ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_Jumlah" class="t103_daf_kelas_siswa_iuran_Jumlah"><?php echo $t103_daf_kelas_siswa_iuran->Jumlah->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr01->Visible) { // byr01 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr01->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr01" class="t103_daf_kelas_siswa_iuran_byr01"><?php echo $t103_daf_kelas_siswa_iuran->byr01->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml01->Visible) { // jml01 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml01->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml01" class="t103_daf_kelas_siswa_iuran_jml01"><?php echo $t103_daf_kelas_siswa_iuran->jml01->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl01->Visible) { // tgl01 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl01->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl01" class="t103_daf_kelas_siswa_iuran_tgl01"><?php echo $t103_daf_kelas_siswa_iuran->tgl01->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr02->Visible) { // byr02 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr02->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr02" class="t103_daf_kelas_siswa_iuran_byr02"><?php echo $t103_daf_kelas_siswa_iuran->byr02->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml02->Visible) { // jml02 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml02->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml02" class="t103_daf_kelas_siswa_iuran_jml02"><?php echo $t103_daf_kelas_siswa_iuran->jml02->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl02->Visible) { // tgl02 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl02->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl02" class="t103_daf_kelas_siswa_iuran_tgl02"><?php echo $t103_daf_kelas_siswa_iuran->tgl02->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr03->Visible) { // byr03 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr03->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr03" class="t103_daf_kelas_siswa_iuran_byr03"><?php echo $t103_daf_kelas_siswa_iuran->byr03->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml03->Visible) { // jml03 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml03->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml03" class="t103_daf_kelas_siswa_iuran_jml03"><?php echo $t103_daf_kelas_siswa_iuran->jml03->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl03->Visible) { // tgl03 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl03->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl03" class="t103_daf_kelas_siswa_iuran_tgl03"><?php echo $t103_daf_kelas_siswa_iuran->tgl03->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr04->Visible) { // byr04 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr04->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr04" class="t103_daf_kelas_siswa_iuran_byr04"><?php echo $t103_daf_kelas_siswa_iuran->byr04->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml04->Visible) { // jml04 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml04->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml04" class="t103_daf_kelas_siswa_iuran_jml04"><?php echo $t103_daf_kelas_siswa_iuran->jml04->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl04->Visible) { // tgl04 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl04->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl04" class="t103_daf_kelas_siswa_iuran_tgl04"><?php echo $t103_daf_kelas_siswa_iuran->tgl04->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr05->Visible) { // byr05 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr05->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr05" class="t103_daf_kelas_siswa_iuran_byr05"><?php echo $t103_daf_kelas_siswa_iuran->byr05->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml05->Visible) { // jml05 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml05->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml05" class="t103_daf_kelas_siswa_iuran_jml05"><?php echo $t103_daf_kelas_siswa_iuran->jml05->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl05->Visible) { // tgl05 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl05->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl05" class="t103_daf_kelas_siswa_iuran_tgl05"><?php echo $t103_daf_kelas_siswa_iuran->tgl05->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr06->Visible) { // byr06 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr06->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr06" class="t103_daf_kelas_siswa_iuran_byr06"><?php echo $t103_daf_kelas_siswa_iuran->byr06->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml06->Visible) { // jml06 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml06->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml06" class="t103_daf_kelas_siswa_iuran_jml06"><?php echo $t103_daf_kelas_siswa_iuran->jml06->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl06->Visible) { // tgl06 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl06->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl06" class="t103_daf_kelas_siswa_iuran_tgl06"><?php echo $t103_daf_kelas_siswa_iuran->tgl06->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr07->Visible) { // byr07 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr07->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr07" class="t103_daf_kelas_siswa_iuran_byr07"><?php echo $t103_daf_kelas_siswa_iuran->byr07->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml07->Visible) { // jml07 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml07->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml07" class="t103_daf_kelas_siswa_iuran_jml07"><?php echo $t103_daf_kelas_siswa_iuran->jml07->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl07->Visible) { // tgl07 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl07->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl07" class="t103_daf_kelas_siswa_iuran_tgl07"><?php echo $t103_daf_kelas_siswa_iuran->tgl07->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr08->Visible) { // byr08 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr08->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr08" class="t103_daf_kelas_siswa_iuran_byr08"><?php echo $t103_daf_kelas_siswa_iuran->byr08->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml08->Visible) { // jml08 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml08->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml08" class="t103_daf_kelas_siswa_iuran_jml08"><?php echo $t103_daf_kelas_siswa_iuran->jml08->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl08->Visible) { // tgl08 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl08->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl08" class="t103_daf_kelas_siswa_iuran_tgl08"><?php echo $t103_daf_kelas_siswa_iuran->tgl08->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr09->Visible) { // byr09 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr09->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr09" class="t103_daf_kelas_siswa_iuran_byr09"><?php echo $t103_daf_kelas_siswa_iuran->byr09->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml09->Visible) { // jml09 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml09->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml09" class="t103_daf_kelas_siswa_iuran_jml09"><?php echo $t103_daf_kelas_siswa_iuran->jml09->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl09->Visible) { // tgl09 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl09->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl09" class="t103_daf_kelas_siswa_iuran_tgl09"><?php echo $t103_daf_kelas_siswa_iuran->tgl09->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr10->Visible) { // byr10 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr10->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr10" class="t103_daf_kelas_siswa_iuran_byr10"><?php echo $t103_daf_kelas_siswa_iuran->byr10->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml10->Visible) { // jml10 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml10->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml10" class="t103_daf_kelas_siswa_iuran_jml10"><?php echo $t103_daf_kelas_siswa_iuran->jml10->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl10->Visible) { // tgl10 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl10->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl10" class="t103_daf_kelas_siswa_iuran_tgl10"><?php echo $t103_daf_kelas_siswa_iuran->tgl10->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr11->Visible) { // byr11 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr11->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr11" class="t103_daf_kelas_siswa_iuran_byr11"><?php echo $t103_daf_kelas_siswa_iuran->byr11->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml11->Visible) { // jml11 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml11->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml11" class="t103_daf_kelas_siswa_iuran_jml11"><?php echo $t103_daf_kelas_siswa_iuran->jml11->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl11->Visible) { // tgl11 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl11->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl11" class="t103_daf_kelas_siswa_iuran_tgl11"><?php echo $t103_daf_kelas_siswa_iuran->tgl11->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr12->Visible) { // byr12 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->byr12->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_byr12" class="t103_daf_kelas_siswa_iuran_byr12"><?php echo $t103_daf_kelas_siswa_iuran->byr12->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml12->Visible) { // jml12 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->jml12->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_jml12" class="t103_daf_kelas_siswa_iuran_jml12"><?php echo $t103_daf_kelas_siswa_iuran->jml12->caption() ?></span></th>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl12->Visible) { // tgl12 ?>
		<th class="<?php echo $t103_daf_kelas_siswa_iuran->tgl12->headerCellClass() ?>"><span id="elh_t103_daf_kelas_siswa_iuran_tgl12" class="t103_daf_kelas_siswa_iuran_tgl12"><?php echo $t103_daf_kelas_siswa_iuran->tgl12->caption() ?></span></th>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php
$t103_daf_kelas_siswa_iuran_delete->RecCnt = 0;
$i = 0;
while (!$t103_daf_kelas_siswa_iuran_delete->Recordset->EOF) {
	$t103_daf_kelas_siswa_iuran_delete->RecCnt++;
	$t103_daf_kelas_siswa_iuran_delete->RowCnt++;

	// Set row properties
	$t103_daf_kelas_siswa_iuran->resetAttributes();
	$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_VIEW; // View

	// Get the field contents
	$t103_daf_kelas_siswa_iuran_delete->loadRowValues($t103_daf_kelas_siswa_iuran_delete->Recordset);

	// Render row
	$t103_daf_kelas_siswa_iuran_delete->renderRow();
?>
	<tr<?php echo $t103_daf_kelas_siswa_iuran->rowAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->id->Visible) { // id ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->id->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_id" class="t103_daf_kelas_siswa_iuran_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->id->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Visible) { // daf_kelas_siswa_id ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_iuran_id" class="t103_daf_kelas_siswa_iuran_iuran_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->Jumlah->Visible) { // Jumlah ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_Jumlah" class="t103_daf_kelas_siswa_iuran_Jumlah">
<span<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr01->Visible) { // byr01 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr01->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr01" class="t103_daf_kelas_siswa_iuran_byr01">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr01->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr01->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr01->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr01->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml01->Visible) { // jml01 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml01->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml01" class="t103_daf_kelas_siswa_iuran_jml01">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml01->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml01->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl01->Visible) { // tgl01 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl01->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl01" class="t103_daf_kelas_siswa_iuran_tgl01">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl01->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl01->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr02->Visible) { // byr02 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr02->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr02" class="t103_daf_kelas_siswa_iuran_byr02">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr02->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr02->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr02->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr02->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml02->Visible) { // jml02 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml02->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml02" class="t103_daf_kelas_siswa_iuran_jml02">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml02->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml02->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl02->Visible) { // tgl02 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl02->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl02" class="t103_daf_kelas_siswa_iuran_tgl02">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl02->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl02->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr03->Visible) { // byr03 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr03->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr03" class="t103_daf_kelas_siswa_iuran_byr03">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr03->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr03->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr03->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr03->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml03->Visible) { // jml03 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml03->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml03" class="t103_daf_kelas_siswa_iuran_jml03">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml03->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml03->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl03->Visible) { // tgl03 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl03->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl03" class="t103_daf_kelas_siswa_iuran_tgl03">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl03->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl03->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr04->Visible) { // byr04 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr04->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr04" class="t103_daf_kelas_siswa_iuran_byr04">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr04->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr04->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr04->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr04->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml04->Visible) { // jml04 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml04->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml04" class="t103_daf_kelas_siswa_iuran_jml04">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml04->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml04->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl04->Visible) { // tgl04 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl04->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl04" class="t103_daf_kelas_siswa_iuran_tgl04">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl04->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl04->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr05->Visible) { // byr05 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr05->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr05" class="t103_daf_kelas_siswa_iuran_byr05">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr05->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr05->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr05->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr05->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml05->Visible) { // jml05 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml05->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml05" class="t103_daf_kelas_siswa_iuran_jml05">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml05->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml05->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl05->Visible) { // tgl05 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl05->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl05" class="t103_daf_kelas_siswa_iuran_tgl05">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl05->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl05->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr06->Visible) { // byr06 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr06->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr06" class="t103_daf_kelas_siswa_iuran_byr06">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr06->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr06->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr06->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr06->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml06->Visible) { // jml06 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml06->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml06" class="t103_daf_kelas_siswa_iuran_jml06">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml06->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml06->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl06->Visible) { // tgl06 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl06->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl06" class="t103_daf_kelas_siswa_iuran_tgl06">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl06->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl06->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr07->Visible) { // byr07 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr07->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr07" class="t103_daf_kelas_siswa_iuran_byr07">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr07->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr07->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr07->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr07->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml07->Visible) { // jml07 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml07->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml07" class="t103_daf_kelas_siswa_iuran_jml07">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml07->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml07->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl07->Visible) { // tgl07 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl07->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl07" class="t103_daf_kelas_siswa_iuran_tgl07">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl07->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl07->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr08->Visible) { // byr08 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr08->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr08" class="t103_daf_kelas_siswa_iuran_byr08">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr08->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr08->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr08->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr08->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml08->Visible) { // jml08 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml08->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml08" class="t103_daf_kelas_siswa_iuran_jml08">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml08->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml08->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl08->Visible) { // tgl08 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl08->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl08" class="t103_daf_kelas_siswa_iuran_tgl08">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl08->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl08->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr09->Visible) { // byr09 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr09->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr09" class="t103_daf_kelas_siswa_iuran_byr09">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr09->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr09->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr09->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr09->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml09->Visible) { // jml09 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml09->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml09" class="t103_daf_kelas_siswa_iuran_jml09">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml09->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml09->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl09->Visible) { // tgl09 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl09->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl09" class="t103_daf_kelas_siswa_iuran_tgl09">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl09->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl09->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr10->Visible) { // byr10 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr10->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr10" class="t103_daf_kelas_siswa_iuran_byr10">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr10->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr10->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr10->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr10->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml10->Visible) { // jml10 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml10->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml10" class="t103_daf_kelas_siswa_iuran_jml10">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml10->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml10->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl10->Visible) { // tgl10 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl10->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl10" class="t103_daf_kelas_siswa_iuran_tgl10">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl10->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl10->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr11->Visible) { // byr11 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr11->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr11" class="t103_daf_kelas_siswa_iuran_byr11">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr11->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr11->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr11->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr11->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml11->Visible) { // jml11 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml11->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml11" class="t103_daf_kelas_siswa_iuran_jml11">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml11->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml11->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl11->Visible) { // tgl11 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl11->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl11" class="t103_daf_kelas_siswa_iuran_tgl11">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl11->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl11->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr12->Visible) { // byr12 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->byr12->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr12" class="t103_daf_kelas_siswa_iuran_byr12">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr12->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr12->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr12->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr12->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml12->Visible) { // jml12 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->jml12->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml12" class="t103_daf_kelas_siswa_iuran_jml12">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml12->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml12->getViewValue() ?></span>
</span>
</td>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl12->Visible) { // tgl12 ?>
		<td<?php echo $t103_daf_kelas_siswa_iuran->tgl12->cellAttributes() ?>>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_delete->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl12" class="t103_daf_kelas_siswa_iuran_tgl12">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl12->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl12->getViewValue() ?></span>
</span>
</td>
<?php } ?>
	</tr>
<?php
	$t103_daf_kelas_siswa_iuran_delete->Recordset->moveNext();
}
$t103_daf_kelas_siswa_iuran_delete->Recordset->close();
?>
</tbody>
</table>
</div>
</div>
<div>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("DeleteBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t103_daf_kelas_siswa_iuran_delete->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
</div>
</form>
<?php
$t103_daf_kelas_siswa_iuran_delete->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t103_daf_kelas_siswa_iuran_delete->terminate();
?>