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
$t103_daf_kelas_siswa_iuran_list = new t103_daf_kelas_siswa_iuran_list();

// Run the page
$t103_daf_kelas_siswa_iuran_list->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t103_daf_kelas_siswa_iuran_list->Page_Render();
?>
<?php include_once "header.php" ?>
<?php if (!$t103_daf_kelas_siswa_iuran->isExport()) { ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "list";
var ft103_daf_kelas_siswa_iuranlist = currentForm = new ew.Form("ft103_daf_kelas_siswa_iuranlist", "list");
ft103_daf_kelas_siswa_iuranlist.formKeyCountName = '<?php echo $t103_daf_kelas_siswa_iuran_list->FormKeyCountName ?>';

// Validate form
ft103_daf_kelas_siswa_iuranlist.validate = function() {
	if (!this.validateRequired)
		return true; // Ignore validation
	var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj);
	if ($fobj.find("#confirm").val() == "F")
		return true;
	var elm, felm, uelm, addcnt = 0;
	var $k = $fobj.find("#" + this.formKeyCountName); // Get key_count
	var rowcnt = ($k[0]) ? parseInt($k.val(), 10) : 1;
	var startcnt = (rowcnt == 0) ? 0 : 1; // Check rowcnt == 0 => Inline-Add
	var gridinsert = ["insert", "gridinsert"].includes($fobj.find("#action").val()) && $k[0];
	for (var i = startcnt; i <= rowcnt; i++) {
		var infix = ($k[0]) ? String(i) : "";
		$fobj.data("rowindex", infix);
		var checkrow = (gridinsert) ? !this.emptyRow(infix) : true;
		if (checkrow) {
			addcnt++;
		<?php if ($t103_daf_kelas_siswa_iuran_list->id->Required) { ?>
			elm = this.getElements("x" + infix + "_id");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->id->caption(), $t103_daf_kelas_siswa_iuran->id->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->daf_kelas_siswa_id->Required) { ?>
			elm = this.getElements("x" + infix + "_daf_kelas_siswa_id");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->caption(), $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_daf_kelas_siswa_id");
			if (elm && !ew.checkInteger(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->iuran_id->Required) { ?>
			elm = this.getElements("x" + infix + "_iuran_id");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->iuran_id->caption(), $t103_daf_kelas_siswa_iuran->iuran_id->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_iuran_id");
			if (elm && !ew.checkInteger(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->iuran_id->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->Jumlah->Required) { ?>
			elm = this.getElements("x" + infix + "_Jumlah");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->Jumlah->caption(), $t103_daf_kelas_siswa_iuran->Jumlah->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_Jumlah");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->Jumlah->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->byr01->Required) { ?>
			elm = this.getElements("x" + infix + "_byr01[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr01->caption(), $t103_daf_kelas_siswa_iuran->byr01->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->jml01->Required) { ?>
			elm = this.getElements("x" + infix + "_jml01");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml01->caption(), $t103_daf_kelas_siswa_iuran->jml01->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml01");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml01->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->tgl01->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl01");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl01->caption(), $t103_daf_kelas_siswa_iuran->tgl01->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl01");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl01->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->byr02->Required) { ?>
			elm = this.getElements("x" + infix + "_byr02[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr02->caption(), $t103_daf_kelas_siswa_iuran->byr02->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->jml02->Required) { ?>
			elm = this.getElements("x" + infix + "_jml02");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml02->caption(), $t103_daf_kelas_siswa_iuran->jml02->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml02");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml02->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->tgl02->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl02");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl02->caption(), $t103_daf_kelas_siswa_iuran->tgl02->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl02");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl02->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->byr03->Required) { ?>
			elm = this.getElements("x" + infix + "_byr03[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr03->caption(), $t103_daf_kelas_siswa_iuran->byr03->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->jml03->Required) { ?>
			elm = this.getElements("x" + infix + "_jml03");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml03->caption(), $t103_daf_kelas_siswa_iuran->jml03->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml03");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml03->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->tgl03->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl03");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl03->caption(), $t103_daf_kelas_siswa_iuran->tgl03->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl03");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl03->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->byr04->Required) { ?>
			elm = this.getElements("x" + infix + "_byr04[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr04->caption(), $t103_daf_kelas_siswa_iuran->byr04->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->jml04->Required) { ?>
			elm = this.getElements("x" + infix + "_jml04");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml04->caption(), $t103_daf_kelas_siswa_iuran->jml04->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml04");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml04->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->tgl04->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl04");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl04->caption(), $t103_daf_kelas_siswa_iuran->tgl04->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl04");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl04->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->byr05->Required) { ?>
			elm = this.getElements("x" + infix + "_byr05[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr05->caption(), $t103_daf_kelas_siswa_iuran->byr05->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->jml05->Required) { ?>
			elm = this.getElements("x" + infix + "_jml05");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml05->caption(), $t103_daf_kelas_siswa_iuran->jml05->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml05");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml05->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->tgl05->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl05");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl05->caption(), $t103_daf_kelas_siswa_iuran->tgl05->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl05");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl05->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->byr06->Required) { ?>
			elm = this.getElements("x" + infix + "_byr06[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr06->caption(), $t103_daf_kelas_siswa_iuran->byr06->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->jml06->Required) { ?>
			elm = this.getElements("x" + infix + "_jml06");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml06->caption(), $t103_daf_kelas_siswa_iuran->jml06->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml06");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml06->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->tgl06->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl06");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl06->caption(), $t103_daf_kelas_siswa_iuran->tgl06->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl06");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl06->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->byr07->Required) { ?>
			elm = this.getElements("x" + infix + "_byr07[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr07->caption(), $t103_daf_kelas_siswa_iuran->byr07->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->jml07->Required) { ?>
			elm = this.getElements("x" + infix + "_jml07");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml07->caption(), $t103_daf_kelas_siswa_iuran->jml07->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml07");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml07->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->tgl07->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl07");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl07->caption(), $t103_daf_kelas_siswa_iuran->tgl07->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl07");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl07->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->byr08->Required) { ?>
			elm = this.getElements("x" + infix + "_byr08[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr08->caption(), $t103_daf_kelas_siswa_iuran->byr08->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->jml08->Required) { ?>
			elm = this.getElements("x" + infix + "_jml08");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml08->caption(), $t103_daf_kelas_siswa_iuran->jml08->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml08");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml08->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->tgl08->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl08");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl08->caption(), $t103_daf_kelas_siswa_iuran->tgl08->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl08");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl08->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->byr09->Required) { ?>
			elm = this.getElements("x" + infix + "_byr09[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr09->caption(), $t103_daf_kelas_siswa_iuran->byr09->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->jml09->Required) { ?>
			elm = this.getElements("x" + infix + "_jml09");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml09->caption(), $t103_daf_kelas_siswa_iuran->jml09->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml09");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml09->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->tgl09->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl09");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl09->caption(), $t103_daf_kelas_siswa_iuran->tgl09->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl09");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl09->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->byr10->Required) { ?>
			elm = this.getElements("x" + infix + "_byr10[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr10->caption(), $t103_daf_kelas_siswa_iuran->byr10->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->jml10->Required) { ?>
			elm = this.getElements("x" + infix + "_jml10");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml10->caption(), $t103_daf_kelas_siswa_iuran->jml10->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml10");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml10->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->tgl10->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl10");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl10->caption(), $t103_daf_kelas_siswa_iuran->tgl10->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl10");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl10->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->byr11->Required) { ?>
			elm = this.getElements("x" + infix + "_byr11[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr11->caption(), $t103_daf_kelas_siswa_iuran->byr11->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->jml11->Required) { ?>
			elm = this.getElements("x" + infix + "_jml11");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml11->caption(), $t103_daf_kelas_siswa_iuran->jml11->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml11");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml11->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->tgl11->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl11");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl11->caption(), $t103_daf_kelas_siswa_iuran->tgl11->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl11");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl11->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->byr12->Required) { ?>
			elm = this.getElements("x" + infix + "_byr12[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr12->caption(), $t103_daf_kelas_siswa_iuran->byr12->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_list->jml12->Required) { ?>
			elm = this.getElements("x" + infix + "_jml12");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml12->caption(), $t103_daf_kelas_siswa_iuran->jml12->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml12");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml12->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_list->tgl12->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl12");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl12->caption(), $t103_daf_kelas_siswa_iuran->tgl12->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl12");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl12->errorMessage()) ?>");

			// Fire Form_CustomValidate event
			if (!this.Form_CustomValidate(fobj))
				return false;
		} // End Grid Add checking
	}
	if (gridinsert && addcnt == 0) { // No row added
		ew.alert(ew.language.phrase("NoAddRecord"));
		return false;
	}
	return true;
}

// Check empty row
ft103_daf_kelas_siswa_iuranlist.emptyRow = function(infix) {
	var fobj = this._form;
	if (ew.valueChanged(fobj, infix, "daf_kelas_siswa_id", false)) return false;
	if (ew.valueChanged(fobj, infix, "iuran_id", false)) return false;
	if (ew.valueChanged(fobj, infix, "Jumlah", false)) return false;
	if (ew.valueChanged(fobj, infix, "byr01[]", true)) return false;
	if (ew.valueChanged(fobj, infix, "jml01", false)) return false;
	if (ew.valueChanged(fobj, infix, "tgl01", false)) return false;
	if (ew.valueChanged(fobj, infix, "byr02[]", true)) return false;
	if (ew.valueChanged(fobj, infix, "jml02", false)) return false;
	if (ew.valueChanged(fobj, infix, "tgl02", false)) return false;
	if (ew.valueChanged(fobj, infix, "byr03[]", true)) return false;
	if (ew.valueChanged(fobj, infix, "jml03", false)) return false;
	if (ew.valueChanged(fobj, infix, "tgl03", false)) return false;
	if (ew.valueChanged(fobj, infix, "byr04[]", true)) return false;
	if (ew.valueChanged(fobj, infix, "jml04", false)) return false;
	if (ew.valueChanged(fobj, infix, "tgl04", false)) return false;
	if (ew.valueChanged(fobj, infix, "byr05[]", true)) return false;
	if (ew.valueChanged(fobj, infix, "jml05", false)) return false;
	if (ew.valueChanged(fobj, infix, "tgl05", false)) return false;
	if (ew.valueChanged(fobj, infix, "byr06[]", true)) return false;
	if (ew.valueChanged(fobj, infix, "jml06", false)) return false;
	if (ew.valueChanged(fobj, infix, "tgl06", false)) return false;
	if (ew.valueChanged(fobj, infix, "byr07[]", true)) return false;
	if (ew.valueChanged(fobj, infix, "jml07", false)) return false;
	if (ew.valueChanged(fobj, infix, "tgl07", false)) return false;
	if (ew.valueChanged(fobj, infix, "byr08[]", true)) return false;
	if (ew.valueChanged(fobj, infix, "jml08", false)) return false;
	if (ew.valueChanged(fobj, infix, "tgl08", false)) return false;
	if (ew.valueChanged(fobj, infix, "byr09[]", true)) return false;
	if (ew.valueChanged(fobj, infix, "jml09", false)) return false;
	if (ew.valueChanged(fobj, infix, "tgl09", false)) return false;
	if (ew.valueChanged(fobj, infix, "byr10[]", true)) return false;
	if (ew.valueChanged(fobj, infix, "jml10", false)) return false;
	if (ew.valueChanged(fobj, infix, "tgl10", false)) return false;
	if (ew.valueChanged(fobj, infix, "byr11[]", true)) return false;
	if (ew.valueChanged(fobj, infix, "jml11", false)) return false;
	if (ew.valueChanged(fobj, infix, "tgl11", false)) return false;
	if (ew.valueChanged(fobj, infix, "byr12[]", true)) return false;
	if (ew.valueChanged(fobj, infix, "jml12", false)) return false;
	if (ew.valueChanged(fobj, infix, "tgl12", false)) return false;
	return true;
}

// Form_CustomValidate event
ft103_daf_kelas_siswa_iuranlist.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft103_daf_kelas_siswa_iuranlist.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft103_daf_kelas_siswa_iuranlist.lists["x_byr01[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr01->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr01[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr01->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr02[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr02->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr02[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr02->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr03[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr03->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr03[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr03->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr04[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr04->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr04[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr04->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr05[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr05->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr05[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr05->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr06[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr06->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr06[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr06->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr07[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr07->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr07[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr07->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr08[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr08->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr08[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr08->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr09[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr09->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr09[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr09->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr10[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr10->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr10[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr10->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr11[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr11->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr11[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr11->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr12[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr12->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlist.lists["x_byr12[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr12->options(FALSE, TRUE)) ?>;

// Form object for search
var ft103_daf_kelas_siswa_iuranlistsrch = currentSearchForm = new ew.Form("ft103_daf_kelas_siswa_iuranlistsrch");

// Validate function for search
ft103_daf_kelas_siswa_iuranlistsrch.validate = function(fobj) {
	if (!this.validateRequired)
		return true; // Ignore validation
	fobj = fobj || this._form;
	var infix = "";

	// Fire Form_CustomValidate event
	if (!this.Form_CustomValidate(fobj))
		return false;
	return true;
}

// Form_CustomValidate event
ft103_daf_kelas_siswa_iuranlistsrch.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft103_daf_kelas_siswa_iuranlistsrch.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr01[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr01->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr01[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr01->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr02[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr02->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr02[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr02->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr03[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr03->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr03[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr03->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr04[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr04->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr04[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr04->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr05[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr05->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr05[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr05->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr06[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr06->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr06[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr06->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr07[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr07->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr07[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr07->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr08[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr08->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr08[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr08->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr09[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr09->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr09[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr09->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr10[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr10->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr10[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr10->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr11[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr11->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr11[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr11->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr12[]"] = <?php echo $t103_daf_kelas_siswa_iuran_list->byr12->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranlistsrch.lists["x_byr12[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_list->byr12->options(FALSE, TRUE)) ?>;

// Filters
ft103_daf_kelas_siswa_iuranlistsrch.filterList = <?php echo $t103_daf_kelas_siswa_iuran_list->getFilterList() ?>;
</script>
<style type="text/css">
.ew-table-preview-row { /* main table preview row color */
	background-color: #FFFFFF; /* preview row color */
}
.ew-table-preview-row .ew-grid {
	display: table;
}
</style>
<div id="ew-preview" class="d-none"><!-- preview -->
	<div class="ew-nav-tabs"><!-- .ew-nav-tabs -->
		<ul class="nav nav-tabs"></ul>
		<div class="tab-content"><!-- .tab-content -->
			<div class="tab-pane fade active show"></div>
		</div><!-- /.tab-content -->
	</div><!-- /.ew-nav-tabs -->
</div><!-- /preview -->
<script src="phpjs/ewpreview.js"></script>
<script>
ew.PREVIEW_PLACEMENT = ew.CSS_FLIP ? "left" : "right";
ew.PREVIEW_SINGLE_ROW = false;
ew.PREVIEW_OVERLAY = false;
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php } ?>
<?php if (!$t103_daf_kelas_siswa_iuran->isExport()) { ?>
<div class="btn-toolbar ew-toolbar">
<?php if ($t103_daf_kelas_siswa_iuran_list->TotalRecs > 0 && $t103_daf_kelas_siswa_iuran_list->ExportOptions->visible()) { ?>
<?php $t103_daf_kelas_siswa_iuran_list->ExportOptions->render("body") ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_list->ImportOptions->visible()) { ?>
<?php $t103_daf_kelas_siswa_iuran_list->ImportOptions->render("body") ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_list->SearchOptions->visible()) { ?>
<?php $t103_daf_kelas_siswa_iuran_list->SearchOptions->render("body") ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_list->FilterOptions->visible()) { ?>
<?php $t103_daf_kelas_siswa_iuran_list->FilterOptions->render("body") ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if (!$t103_daf_kelas_siswa_iuran->isExport() || EXPORT_MASTER_RECORD && $t103_daf_kelas_siswa_iuran->isExport("print")) { ?>
<?php
if ($t103_daf_kelas_siswa_iuran_list->DbMasterFilter <> "" && $t103_daf_kelas_siswa_iuran->getCurrentMasterTable() == "v102_daf_kelas_siswa") {
	if ($t103_daf_kelas_siswa_iuran_list->MasterRecordExists) {
		include_once "v102_daf_kelas_siswamaster.php";
	}
}
?>
<?php } ?>
<?php
$t103_daf_kelas_siswa_iuran_list->renderOtherOptions();
?>
<?php if ($Security->CanSearch()) { ?>
<?php if (!$t103_daf_kelas_siswa_iuran->isExport() && !$t103_daf_kelas_siswa_iuran->CurrentAction) { ?>
<form name="ft103_daf_kelas_siswa_iuranlistsrch" id="ft103_daf_kelas_siswa_iuranlistsrch" class="form-inline ew-form ew-ext-search-form" action="<?php echo CurrentPageName() ?>">
<?php $searchPanelClass = ($t103_daf_kelas_siswa_iuran_list->SearchWhere <> "") ? " show" : " show"; ?>
<div id="ft103_daf_kelas_siswa_iuranlistsrch-search-panel" class="ew-search-panel collapse<?php echo $searchPanelClass ?>">
<input type="hidden" name="cmd" value="search">
<input type="hidden" name="t" value="t103_daf_kelas_siswa_iuran">
	<div class="ew-basic-search">
<?php
if ($SearchError == "")
	$t103_daf_kelas_siswa_iuran_list->LoadAdvancedSearch(); // Load advanced search

// Render for search
$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_SEARCH;

// Render row
$t103_daf_kelas_siswa_iuran->resetAttributes();
$t103_daf_kelas_siswa_iuran_list->renderRow();
?>
<div id="xsr_1" class="ew-row d-sm-flex">
<?php if ($t103_daf_kelas_siswa_iuran->byr01->Visible) { // byr01 ?>
	<div id="xsc_byr01" class="ew-cell form-group">
		<label class="ew-search-caption ew-label"><?php echo $t103_daf_kelas_siswa_iuran->byr01->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_byr01" id="z_byr01" value="="></span>
		<span class="ew-search-field">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr01->AdvancedSearch->SearchValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="x_byr01[]" id="x_byr01[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr01->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_2" class="ew-row d-sm-flex">
<?php if ($t103_daf_kelas_siswa_iuran->byr02->Visible) { // byr02 ?>
	<div id="xsc_byr02" class="ew-cell form-group">
		<label class="ew-search-caption ew-label"><?php echo $t103_daf_kelas_siswa_iuran->byr02->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_byr02" id="z_byr02" value="="></span>
		<span class="ew-search-field">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr02->AdvancedSearch->SearchValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="x_byr02[]" id="x_byr02[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr02->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_3" class="ew-row d-sm-flex">
<?php if ($t103_daf_kelas_siswa_iuran->byr03->Visible) { // byr03 ?>
	<div id="xsc_byr03" class="ew-cell form-group">
		<label class="ew-search-caption ew-label"><?php echo $t103_daf_kelas_siswa_iuran->byr03->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_byr03" id="z_byr03" value="="></span>
		<span class="ew-search-field">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr03->AdvancedSearch->SearchValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="x_byr03[]" id="x_byr03[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr03->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_4" class="ew-row d-sm-flex">
<?php if ($t103_daf_kelas_siswa_iuran->byr04->Visible) { // byr04 ?>
	<div id="xsc_byr04" class="ew-cell form-group">
		<label class="ew-search-caption ew-label"><?php echo $t103_daf_kelas_siswa_iuran->byr04->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_byr04" id="z_byr04" value="="></span>
		<span class="ew-search-field">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr04->AdvancedSearch->SearchValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="x_byr04[]" id="x_byr04[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr04->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_5" class="ew-row d-sm-flex">
<?php if ($t103_daf_kelas_siswa_iuran->byr05->Visible) { // byr05 ?>
	<div id="xsc_byr05" class="ew-cell form-group">
		<label class="ew-search-caption ew-label"><?php echo $t103_daf_kelas_siswa_iuran->byr05->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_byr05" id="z_byr05" value="="></span>
		<span class="ew-search-field">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr05->AdvancedSearch->SearchValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="x_byr05[]" id="x_byr05[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr05->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_6" class="ew-row d-sm-flex">
<?php if ($t103_daf_kelas_siswa_iuran->byr06->Visible) { // byr06 ?>
	<div id="xsc_byr06" class="ew-cell form-group">
		<label class="ew-search-caption ew-label"><?php echo $t103_daf_kelas_siswa_iuran->byr06->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_byr06" id="z_byr06" value="="></span>
		<span class="ew-search-field">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr06->AdvancedSearch->SearchValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="x_byr06[]" id="x_byr06[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr06->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_7" class="ew-row d-sm-flex">
<?php if ($t103_daf_kelas_siswa_iuran->byr07->Visible) { // byr07 ?>
	<div id="xsc_byr07" class="ew-cell form-group">
		<label class="ew-search-caption ew-label"><?php echo $t103_daf_kelas_siswa_iuran->byr07->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_byr07" id="z_byr07" value="="></span>
		<span class="ew-search-field">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr07->AdvancedSearch->SearchValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="x_byr07[]" id="x_byr07[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr07->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_8" class="ew-row d-sm-flex">
<?php if ($t103_daf_kelas_siswa_iuran->byr08->Visible) { // byr08 ?>
	<div id="xsc_byr08" class="ew-cell form-group">
		<label class="ew-search-caption ew-label"><?php echo $t103_daf_kelas_siswa_iuran->byr08->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_byr08" id="z_byr08" value="="></span>
		<span class="ew-search-field">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr08->AdvancedSearch->SearchValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="x_byr08[]" id="x_byr08[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr08->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_9" class="ew-row d-sm-flex">
<?php if ($t103_daf_kelas_siswa_iuran->byr09->Visible) { // byr09 ?>
	<div id="xsc_byr09" class="ew-cell form-group">
		<label class="ew-search-caption ew-label"><?php echo $t103_daf_kelas_siswa_iuran->byr09->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_byr09" id="z_byr09" value="="></span>
		<span class="ew-search-field">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr09->AdvancedSearch->SearchValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="x_byr09[]" id="x_byr09[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr09->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_10" class="ew-row d-sm-flex">
<?php if ($t103_daf_kelas_siswa_iuran->byr10->Visible) { // byr10 ?>
	<div id="xsc_byr10" class="ew-cell form-group">
		<label class="ew-search-caption ew-label"><?php echo $t103_daf_kelas_siswa_iuran->byr10->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_byr10" id="z_byr10" value="="></span>
		<span class="ew-search-field">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr10->AdvancedSearch->SearchValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="x_byr10[]" id="x_byr10[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr10->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_11" class="ew-row d-sm-flex">
<?php if ($t103_daf_kelas_siswa_iuran->byr11->Visible) { // byr11 ?>
	<div id="xsc_byr11" class="ew-cell form-group">
		<label class="ew-search-caption ew-label"><?php echo $t103_daf_kelas_siswa_iuran->byr11->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_byr11" id="z_byr11" value="="></span>
		<span class="ew-search-field">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr11->AdvancedSearch->SearchValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="x_byr11[]" id="x_byr11[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr11->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_12" class="ew-row d-sm-flex">
<?php if ($t103_daf_kelas_siswa_iuran->byr12->Visible) { // byr12 ?>
	<div id="xsc_byr12" class="ew-cell form-group">
		<label class="ew-search-caption ew-label"><?php echo $t103_daf_kelas_siswa_iuran->byr12->caption() ?></label>
		<span class="ew-search-operator"><?php echo $Language->phrase("=") ?><input type="hidden" name="z_byr12" id="z_byr12" value="="></span>
		<span class="ew-search-field">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr12->AdvancedSearch->SearchValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="x_byr12[]" id="x_byr12[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr12->editAttributes() ?>>
</span>
	</div>
<?php } ?>
</div>
<div id="xsr_13" class="ew-row d-sm-flex">
	<button class="btn btn-primary" name="btn-submit" id="btn-submit" type="submit"><?php echo $Language->phrase("SearchBtn") ?></button>
</div>
	</div>
</div>
</form>
<?php } ?>
<?php } ?>
<?php $t103_daf_kelas_siswa_iuran_list->showPageHeader(); ?>
<?php
$t103_daf_kelas_siswa_iuran_list->showMessage();
?>
<?php if ($t103_daf_kelas_siswa_iuran_list->TotalRecs > 0 || $t103_daf_kelas_siswa_iuran->CurrentAction) { ?>
<div class="card ew-card ew-grid<?php if ($t103_daf_kelas_siswa_iuran_list->isAddOrEdit()) { ?> ew-grid-add-edit<?php } ?> t103_daf_kelas_siswa_iuran">
<form name="ft103_daf_kelas_siswa_iuranlist" id="ft103_daf_kelas_siswa_iuranlist" class="form-inline ew-form ew-list-form" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t103_daf_kelas_siswa_iuran_list->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_list->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t103_daf_kelas_siswa_iuran">
<?php if ($t103_daf_kelas_siswa_iuran->getCurrentMasterTable() == "v102_daf_kelas_siswa" && $t103_daf_kelas_siswa_iuran->CurrentAction) { ?>
<input type="hidden" name="<?php echo TABLE_SHOW_MASTER ?>" value="v102_daf_kelas_siswa">
<input type="hidden" name="fk_id" value="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getSessionValue() ?>">
<?php } ?>
<div id="gmp_t103_daf_kelas_siswa_iuran" class="<?php if (IsResponsiveLayout()) { ?>table-responsive <?php } ?>card-body ew-grid-middle-panel">
<?php if ($t103_daf_kelas_siswa_iuran_list->TotalRecs > 0 || $t103_daf_kelas_siswa_iuran->isAdd() || $t103_daf_kelas_siswa_iuran->isCopy() || $t103_daf_kelas_siswa_iuran->isGridEdit()) { ?>
<table id="tbl_t103_daf_kelas_siswa_iuranlist" class="table ew-table"><!-- .ew-table ##-->
<thead>
	<tr class="ew-table-header">
<?php

// Header row
$t103_daf_kelas_siswa_iuran_list->RowType = ROWTYPE_HEADER;

// Render list options
$t103_daf_kelas_siswa_iuran_list->renderListOptions();

// Render list options (header, left)
$t103_daf_kelas_siswa_iuran_list->ListOptions->render("header", "left");
?>
<?php if ($t103_daf_kelas_siswa_iuran->id->Visible) { // id ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->id) == "") { ?>
		<th data-name="id" class="<?php echo $t103_daf_kelas_siswa_iuran->id->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_id" class="t103_daf_kelas_siswa_iuran_id"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="id" class="<?php echo $t103_daf_kelas_siswa_iuran->id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->id) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_id" class="t103_daf_kelas_siswa_iuran_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Visible) { // daf_kelas_siswa_id ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id) == "") { ?>
		<th data-name="daf_kelas_siswa_id" class="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="daf_kelas_siswa_id" class="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->iuran_id) == "") { ?>
		<th data-name="iuran_id" class="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_iuran_id" class="t103_daf_kelas_siswa_iuran_iuran_id"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->iuran_id->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="iuran_id" class="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->iuran_id) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_iuran_id" class="t103_daf_kelas_siswa_iuran_iuran_id">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->iuran_id->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->iuran_id->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->iuran_id->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->Jumlah->Visible) { // Jumlah ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->Jumlah) == "") { ?>
		<th data-name="Jumlah" class="<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_Jumlah" class="t103_daf_kelas_siswa_iuran_Jumlah"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->Jumlah->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="Jumlah" class="<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->Jumlah) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_Jumlah" class="t103_daf_kelas_siswa_iuran_Jumlah">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->Jumlah->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->Jumlah->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->Jumlah->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr01->Visible) { // byr01 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->byr01) == "") { ?>
		<th data-name="byr01" class="<?php echo $t103_daf_kelas_siswa_iuran->byr01->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr01" class="t103_daf_kelas_siswa_iuran_byr01"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr01->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr01" class="<?php echo $t103_daf_kelas_siswa_iuran->byr01->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr01) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_byr01" class="t103_daf_kelas_siswa_iuran_byr01">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr01->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->byr01->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->byr01->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml01->Visible) { // jml01 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->jml01) == "") { ?>
		<th data-name="jml01" class="<?php echo $t103_daf_kelas_siswa_iuran->jml01->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml01" class="t103_daf_kelas_siswa_iuran_jml01"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml01->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml01" class="<?php echo $t103_daf_kelas_siswa_iuran->jml01->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml01) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_jml01" class="t103_daf_kelas_siswa_iuran_jml01">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml01->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->jml01->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->jml01->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl01->Visible) { // tgl01 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->tgl01) == "") { ?>
		<th data-name="tgl01" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl01->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl01" class="t103_daf_kelas_siswa_iuran_tgl01"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl01->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl01" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl01->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl01) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_tgl01" class="t103_daf_kelas_siswa_iuran_tgl01">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl01->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->tgl01->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->tgl01->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr02->Visible) { // byr02 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->byr02) == "") { ?>
		<th data-name="byr02" class="<?php echo $t103_daf_kelas_siswa_iuran->byr02->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr02" class="t103_daf_kelas_siswa_iuran_byr02"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr02->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr02" class="<?php echo $t103_daf_kelas_siswa_iuran->byr02->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr02) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_byr02" class="t103_daf_kelas_siswa_iuran_byr02">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr02->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->byr02->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->byr02->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml02->Visible) { // jml02 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->jml02) == "") { ?>
		<th data-name="jml02" class="<?php echo $t103_daf_kelas_siswa_iuran->jml02->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml02" class="t103_daf_kelas_siswa_iuran_jml02"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml02->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml02" class="<?php echo $t103_daf_kelas_siswa_iuran->jml02->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml02) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_jml02" class="t103_daf_kelas_siswa_iuran_jml02">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml02->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->jml02->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->jml02->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl02->Visible) { // tgl02 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->tgl02) == "") { ?>
		<th data-name="tgl02" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl02->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl02" class="t103_daf_kelas_siswa_iuran_tgl02"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl02->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl02" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl02->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl02) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_tgl02" class="t103_daf_kelas_siswa_iuran_tgl02">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl02->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->tgl02->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->tgl02->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr03->Visible) { // byr03 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->byr03) == "") { ?>
		<th data-name="byr03" class="<?php echo $t103_daf_kelas_siswa_iuran->byr03->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr03" class="t103_daf_kelas_siswa_iuran_byr03"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr03->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr03" class="<?php echo $t103_daf_kelas_siswa_iuran->byr03->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr03) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_byr03" class="t103_daf_kelas_siswa_iuran_byr03">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr03->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->byr03->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->byr03->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml03->Visible) { // jml03 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->jml03) == "") { ?>
		<th data-name="jml03" class="<?php echo $t103_daf_kelas_siswa_iuran->jml03->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml03" class="t103_daf_kelas_siswa_iuran_jml03"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml03->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml03" class="<?php echo $t103_daf_kelas_siswa_iuran->jml03->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml03) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_jml03" class="t103_daf_kelas_siswa_iuran_jml03">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml03->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->jml03->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->jml03->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl03->Visible) { // tgl03 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->tgl03) == "") { ?>
		<th data-name="tgl03" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl03->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl03" class="t103_daf_kelas_siswa_iuran_tgl03"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl03->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl03" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl03->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl03) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_tgl03" class="t103_daf_kelas_siswa_iuran_tgl03">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl03->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->tgl03->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->tgl03->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr04->Visible) { // byr04 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->byr04) == "") { ?>
		<th data-name="byr04" class="<?php echo $t103_daf_kelas_siswa_iuran->byr04->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr04" class="t103_daf_kelas_siswa_iuran_byr04"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr04->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr04" class="<?php echo $t103_daf_kelas_siswa_iuran->byr04->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr04) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_byr04" class="t103_daf_kelas_siswa_iuran_byr04">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr04->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->byr04->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->byr04->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml04->Visible) { // jml04 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->jml04) == "") { ?>
		<th data-name="jml04" class="<?php echo $t103_daf_kelas_siswa_iuran->jml04->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml04" class="t103_daf_kelas_siswa_iuran_jml04"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml04->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml04" class="<?php echo $t103_daf_kelas_siswa_iuran->jml04->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml04) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_jml04" class="t103_daf_kelas_siswa_iuran_jml04">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml04->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->jml04->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->jml04->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl04->Visible) { // tgl04 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->tgl04) == "") { ?>
		<th data-name="tgl04" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl04->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl04" class="t103_daf_kelas_siswa_iuran_tgl04"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl04->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl04" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl04->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl04) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_tgl04" class="t103_daf_kelas_siswa_iuran_tgl04">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl04->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->tgl04->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->tgl04->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr05->Visible) { // byr05 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->byr05) == "") { ?>
		<th data-name="byr05" class="<?php echo $t103_daf_kelas_siswa_iuran->byr05->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr05" class="t103_daf_kelas_siswa_iuran_byr05"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr05->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr05" class="<?php echo $t103_daf_kelas_siswa_iuran->byr05->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr05) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_byr05" class="t103_daf_kelas_siswa_iuran_byr05">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr05->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->byr05->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->byr05->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml05->Visible) { // jml05 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->jml05) == "") { ?>
		<th data-name="jml05" class="<?php echo $t103_daf_kelas_siswa_iuran->jml05->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml05" class="t103_daf_kelas_siswa_iuran_jml05"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml05->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml05" class="<?php echo $t103_daf_kelas_siswa_iuran->jml05->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml05) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_jml05" class="t103_daf_kelas_siswa_iuran_jml05">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml05->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->jml05->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->jml05->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl05->Visible) { // tgl05 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->tgl05) == "") { ?>
		<th data-name="tgl05" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl05->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl05" class="t103_daf_kelas_siswa_iuran_tgl05"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl05->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl05" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl05->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl05) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_tgl05" class="t103_daf_kelas_siswa_iuran_tgl05">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl05->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->tgl05->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->tgl05->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr06->Visible) { // byr06 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->byr06) == "") { ?>
		<th data-name="byr06" class="<?php echo $t103_daf_kelas_siswa_iuran->byr06->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr06" class="t103_daf_kelas_siswa_iuran_byr06"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr06->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr06" class="<?php echo $t103_daf_kelas_siswa_iuran->byr06->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr06) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_byr06" class="t103_daf_kelas_siswa_iuran_byr06">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr06->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->byr06->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->byr06->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml06->Visible) { // jml06 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->jml06) == "") { ?>
		<th data-name="jml06" class="<?php echo $t103_daf_kelas_siswa_iuran->jml06->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml06" class="t103_daf_kelas_siswa_iuran_jml06"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml06->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml06" class="<?php echo $t103_daf_kelas_siswa_iuran->jml06->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml06) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_jml06" class="t103_daf_kelas_siswa_iuran_jml06">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml06->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->jml06->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->jml06->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl06->Visible) { // tgl06 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->tgl06) == "") { ?>
		<th data-name="tgl06" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl06->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl06" class="t103_daf_kelas_siswa_iuran_tgl06"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl06->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl06" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl06->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl06) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_tgl06" class="t103_daf_kelas_siswa_iuran_tgl06">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl06->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->tgl06->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->tgl06->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr07->Visible) { // byr07 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->byr07) == "") { ?>
		<th data-name="byr07" class="<?php echo $t103_daf_kelas_siswa_iuran->byr07->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr07" class="t103_daf_kelas_siswa_iuran_byr07"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr07->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr07" class="<?php echo $t103_daf_kelas_siswa_iuran->byr07->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr07) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_byr07" class="t103_daf_kelas_siswa_iuran_byr07">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr07->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->byr07->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->byr07->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml07->Visible) { // jml07 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->jml07) == "") { ?>
		<th data-name="jml07" class="<?php echo $t103_daf_kelas_siswa_iuran->jml07->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml07" class="t103_daf_kelas_siswa_iuran_jml07"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml07->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml07" class="<?php echo $t103_daf_kelas_siswa_iuran->jml07->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml07) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_jml07" class="t103_daf_kelas_siswa_iuran_jml07">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml07->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->jml07->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->jml07->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl07->Visible) { // tgl07 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->tgl07) == "") { ?>
		<th data-name="tgl07" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl07->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl07" class="t103_daf_kelas_siswa_iuran_tgl07"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl07->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl07" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl07->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl07) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_tgl07" class="t103_daf_kelas_siswa_iuran_tgl07">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl07->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->tgl07->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->tgl07->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr08->Visible) { // byr08 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->byr08) == "") { ?>
		<th data-name="byr08" class="<?php echo $t103_daf_kelas_siswa_iuran->byr08->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr08" class="t103_daf_kelas_siswa_iuran_byr08"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr08->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr08" class="<?php echo $t103_daf_kelas_siswa_iuran->byr08->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr08) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_byr08" class="t103_daf_kelas_siswa_iuran_byr08">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr08->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->byr08->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->byr08->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml08->Visible) { // jml08 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->jml08) == "") { ?>
		<th data-name="jml08" class="<?php echo $t103_daf_kelas_siswa_iuran->jml08->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml08" class="t103_daf_kelas_siswa_iuran_jml08"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml08->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml08" class="<?php echo $t103_daf_kelas_siswa_iuran->jml08->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml08) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_jml08" class="t103_daf_kelas_siswa_iuran_jml08">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml08->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->jml08->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->jml08->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl08->Visible) { // tgl08 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->tgl08) == "") { ?>
		<th data-name="tgl08" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl08->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl08" class="t103_daf_kelas_siswa_iuran_tgl08"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl08->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl08" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl08->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl08) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_tgl08" class="t103_daf_kelas_siswa_iuran_tgl08">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl08->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->tgl08->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->tgl08->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr09->Visible) { // byr09 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->byr09) == "") { ?>
		<th data-name="byr09" class="<?php echo $t103_daf_kelas_siswa_iuran->byr09->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr09" class="t103_daf_kelas_siswa_iuran_byr09"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr09->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr09" class="<?php echo $t103_daf_kelas_siswa_iuran->byr09->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr09) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_byr09" class="t103_daf_kelas_siswa_iuran_byr09">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr09->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->byr09->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->byr09->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml09->Visible) { // jml09 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->jml09) == "") { ?>
		<th data-name="jml09" class="<?php echo $t103_daf_kelas_siswa_iuran->jml09->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml09" class="t103_daf_kelas_siswa_iuran_jml09"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml09->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml09" class="<?php echo $t103_daf_kelas_siswa_iuran->jml09->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml09) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_jml09" class="t103_daf_kelas_siswa_iuran_jml09">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml09->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->jml09->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->jml09->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl09->Visible) { // tgl09 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->tgl09) == "") { ?>
		<th data-name="tgl09" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl09->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl09" class="t103_daf_kelas_siswa_iuran_tgl09"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl09->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl09" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl09->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl09) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_tgl09" class="t103_daf_kelas_siswa_iuran_tgl09">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl09->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->tgl09->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->tgl09->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr10->Visible) { // byr10 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->byr10) == "") { ?>
		<th data-name="byr10" class="<?php echo $t103_daf_kelas_siswa_iuran->byr10->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr10" class="t103_daf_kelas_siswa_iuran_byr10"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr10->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr10" class="<?php echo $t103_daf_kelas_siswa_iuran->byr10->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr10) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_byr10" class="t103_daf_kelas_siswa_iuran_byr10">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr10->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->byr10->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->byr10->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml10->Visible) { // jml10 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->jml10) == "") { ?>
		<th data-name="jml10" class="<?php echo $t103_daf_kelas_siswa_iuran->jml10->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml10" class="t103_daf_kelas_siswa_iuran_jml10"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml10->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml10" class="<?php echo $t103_daf_kelas_siswa_iuran->jml10->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml10) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_jml10" class="t103_daf_kelas_siswa_iuran_jml10">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml10->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->jml10->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->jml10->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl10->Visible) { // tgl10 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->tgl10) == "") { ?>
		<th data-name="tgl10" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl10->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl10" class="t103_daf_kelas_siswa_iuran_tgl10"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl10->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl10" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl10->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl10) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_tgl10" class="t103_daf_kelas_siswa_iuran_tgl10">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl10->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->tgl10->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->tgl10->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr11->Visible) { // byr11 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->byr11) == "") { ?>
		<th data-name="byr11" class="<?php echo $t103_daf_kelas_siswa_iuran->byr11->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr11" class="t103_daf_kelas_siswa_iuran_byr11"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr11->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr11" class="<?php echo $t103_daf_kelas_siswa_iuran->byr11->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr11) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_byr11" class="t103_daf_kelas_siswa_iuran_byr11">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr11->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->byr11->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->byr11->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml11->Visible) { // jml11 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->jml11) == "") { ?>
		<th data-name="jml11" class="<?php echo $t103_daf_kelas_siswa_iuran->jml11->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml11" class="t103_daf_kelas_siswa_iuran_jml11"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml11->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml11" class="<?php echo $t103_daf_kelas_siswa_iuran->jml11->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml11) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_jml11" class="t103_daf_kelas_siswa_iuran_jml11">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml11->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->jml11->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->jml11->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl11->Visible) { // tgl11 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->tgl11) == "") { ?>
		<th data-name="tgl11" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl11->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl11" class="t103_daf_kelas_siswa_iuran_tgl11"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl11->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl11" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl11->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl11) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_tgl11" class="t103_daf_kelas_siswa_iuran_tgl11">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl11->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->tgl11->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->tgl11->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr12->Visible) { // byr12 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->byr12) == "") { ?>
		<th data-name="byr12" class="<?php echo $t103_daf_kelas_siswa_iuran->byr12->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_byr12" class="t103_daf_kelas_siswa_iuran_byr12"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr12->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="byr12" class="<?php echo $t103_daf_kelas_siswa_iuran->byr12->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->byr12) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_byr12" class="t103_daf_kelas_siswa_iuran_byr12">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->byr12->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->byr12->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->byr12->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml12->Visible) { // jml12 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->jml12) == "") { ?>
		<th data-name="jml12" class="<?php echo $t103_daf_kelas_siswa_iuran->jml12->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_jml12" class="t103_daf_kelas_siswa_iuran_jml12"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml12->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="jml12" class="<?php echo $t103_daf_kelas_siswa_iuran->jml12->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->jml12) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_jml12" class="t103_daf_kelas_siswa_iuran_jml12">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->jml12->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->jml12->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->jml12->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl12->Visible) { // tgl12 ?>
	<?php if ($t103_daf_kelas_siswa_iuran->sortUrl($t103_daf_kelas_siswa_iuran->tgl12) == "") { ?>
		<th data-name="tgl12" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl12->headerCellClass() ?>"><div id="elh_t103_daf_kelas_siswa_iuran_tgl12" class="t103_daf_kelas_siswa_iuran_tgl12"><div class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl12->caption() ?></div></div></th>
	<?php } else { ?>
		<th data-name="tgl12" class="<?php echo $t103_daf_kelas_siswa_iuran->tgl12->headerCellClass() ?>"><div class="ew-pointer" onclick="ew.sort(event,'<?php echo $t103_daf_kelas_siswa_iuran->SortUrl($t103_daf_kelas_siswa_iuran->tgl12) ?>',2);"><div id="elh_t103_daf_kelas_siswa_iuran_tgl12" class="t103_daf_kelas_siswa_iuran_tgl12">
			<div class="ew-table-header-btn"><span class="ew-table-header-caption"><?php echo $t103_daf_kelas_siswa_iuran->tgl12->caption() ?></span><span class="ew-table-header-sort"><?php if ($t103_daf_kelas_siswa_iuran->tgl12->getSort() == "ASC") { ?><i class="fa fa-sort-up"></i><?php } elseif ($t103_daf_kelas_siswa_iuran->tgl12->getSort() == "DESC") { ?><i class="fa fa-sort-down"></i><?php } ?></span></div>
		</div></div></th>
	<?php } ?>
<?php } ?>
<?php

// Render list options (header, right)
$t103_daf_kelas_siswa_iuran_list->ListOptions->render("header", "right");
?>
	</tr>
</thead>
<tbody>
<?php
	if ($t103_daf_kelas_siswa_iuran->isAdd() || $t103_daf_kelas_siswa_iuran->isCopy()) {
		$t103_daf_kelas_siswa_iuran_list->RowIndex = 0;
		$t103_daf_kelas_siswa_iuran_list->KeyCount = $t103_daf_kelas_siswa_iuran_list->RowIndex;
		if ($t103_daf_kelas_siswa_iuran->isCopy() && !$t103_daf_kelas_siswa_iuran_list->loadRow())
			$t103_daf_kelas_siswa_iuran->CurrentAction = "add";
		if ($t103_daf_kelas_siswa_iuran->isAdd())
			$t103_daf_kelas_siswa_iuran_list->loadRowValues();
		if ($t103_daf_kelas_siswa_iuran->EventCancelled) // Insert failed
			$t103_daf_kelas_siswa_iuran_list->restoreFormValues(); // Restore form values

		// Set row properties
		$t103_daf_kelas_siswa_iuran->resetAttributes();
		$t103_daf_kelas_siswa_iuran->RowAttrs = array_merge($t103_daf_kelas_siswa_iuran->RowAttrs, array('data-rowindex'=>0, 'id'=>'r0_t103_daf_kelas_siswa_iuran', 'data-rowtype'=>ROWTYPE_ADD));
		$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_ADD;

		// Render row
		$t103_daf_kelas_siswa_iuran_list->renderRow();

		// Render list options
		$t103_daf_kelas_siswa_iuran_list->renderListOptions();
		$t103_daf_kelas_siswa_iuran_list->StartRowCnt = 0;
?>
	<tr<?php echo $t103_daf_kelas_siswa_iuran->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t103_daf_kelas_siswa_iuran_list->ListOptions->render("body", "left", $t103_daf_kelas_siswa_iuran_list->RowCnt);
?>
	<?php if ($t103_daf_kelas_siswa_iuran->id->Visible) { // id ?>
		<td data-name="id">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->id->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Visible) { // daf_kelas_siswa_id ?>
		<td data-name="daf_kelas_siswa_id">
<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getSessionValue() <> "") { ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="form-group t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?php echo RemoveHtml($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->ViewValue) ?>"></span>
</span>
<input type="hidden" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->CurrentValue) ?>">
<?php } else { ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="form-group t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_daf_kelas_siswa_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->editAttributes() ?>>
</span>
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_daf_kelas_siswa_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
		<td data-name="iuran_id">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_iuran_id" class="form-group t103_daf_kelas_siswa_iuran_iuran_id">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->iuran_id->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->iuran_id->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->Jumlah->Visible) { // Jumlah ?>
		<td data-name="Jumlah">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_Jumlah" class="form-group t103_daf_kelas_siswa_iuran_Jumlah">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->Jumlah->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->Jumlah->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr01->Visible) { // byr01 ?>
		<td data-name="byr01">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr01" class="form-group t103_daf_kelas_siswa_iuran_byr01">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr01->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr01->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr01->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml01->Visible) { // jml01 ?>
		<td data-name="jml01">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml01" class="form-group t103_daf_kelas_siswa_iuran_jml01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml01->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml01->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl01->Visible) { // tgl01 ?>
		<td data-name="tgl01">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl01" class="form-group t103_daf_kelas_siswa_iuran_tgl01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl01->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl01->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl01->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl01->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl01->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl01->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr02->Visible) { // byr02 ?>
		<td data-name="byr02">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr02" class="form-group t103_daf_kelas_siswa_iuran_byr02">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr02->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr02->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr02->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml02->Visible) { // jml02 ?>
		<td data-name="jml02">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml02" class="form-group t103_daf_kelas_siswa_iuran_jml02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml02->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml02->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl02->Visible) { // tgl02 ?>
		<td data-name="tgl02">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl02" class="form-group t103_daf_kelas_siswa_iuran_tgl02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl02->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl02->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl02->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl02->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl02->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl02->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr03->Visible) { // byr03 ?>
		<td data-name="byr03">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr03" class="form-group t103_daf_kelas_siswa_iuran_byr03">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr03->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr03->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr03->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml03->Visible) { // jml03 ?>
		<td data-name="jml03">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml03" class="form-group t103_daf_kelas_siswa_iuran_jml03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml03->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml03->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl03->Visible) { // tgl03 ?>
		<td data-name="tgl03">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl03" class="form-group t103_daf_kelas_siswa_iuran_tgl03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl03->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl03->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl03->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl03->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl03->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl03->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr04->Visible) { // byr04 ?>
		<td data-name="byr04">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr04" class="form-group t103_daf_kelas_siswa_iuran_byr04">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr04->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr04->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr04->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml04->Visible) { // jml04 ?>
		<td data-name="jml04">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml04" class="form-group t103_daf_kelas_siswa_iuran_jml04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml04->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml04->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl04->Visible) { // tgl04 ?>
		<td data-name="tgl04">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl04" class="form-group t103_daf_kelas_siswa_iuran_tgl04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl04->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl04->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl04->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl04->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl04->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl04->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr05->Visible) { // byr05 ?>
		<td data-name="byr05">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr05" class="form-group t103_daf_kelas_siswa_iuran_byr05">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr05->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr05->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr05->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml05->Visible) { // jml05 ?>
		<td data-name="jml05">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml05" class="form-group t103_daf_kelas_siswa_iuran_jml05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml05->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml05->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl05->Visible) { // tgl05 ?>
		<td data-name="tgl05">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl05" class="form-group t103_daf_kelas_siswa_iuran_tgl05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl05->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl05->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl05->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl05->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl05->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl05->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr06->Visible) { // byr06 ?>
		<td data-name="byr06">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr06" class="form-group t103_daf_kelas_siswa_iuran_byr06">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr06->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr06->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr06->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml06->Visible) { // jml06 ?>
		<td data-name="jml06">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml06" class="form-group t103_daf_kelas_siswa_iuran_jml06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml06->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml06->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl06->Visible) { // tgl06 ?>
		<td data-name="tgl06">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl06" class="form-group t103_daf_kelas_siswa_iuran_tgl06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl06->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl06->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl06->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl06->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl06->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl06->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr07->Visible) { // byr07 ?>
		<td data-name="byr07">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr07" class="form-group t103_daf_kelas_siswa_iuran_byr07">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr07->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr07->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr07->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml07->Visible) { // jml07 ?>
		<td data-name="jml07">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml07" class="form-group t103_daf_kelas_siswa_iuran_jml07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml07->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml07->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl07->Visible) { // tgl07 ?>
		<td data-name="tgl07">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl07" class="form-group t103_daf_kelas_siswa_iuran_tgl07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl07->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl07->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl07->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl07->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl07->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl07->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr08->Visible) { // byr08 ?>
		<td data-name="byr08">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr08" class="form-group t103_daf_kelas_siswa_iuran_byr08">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr08->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr08->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr08->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml08->Visible) { // jml08 ?>
		<td data-name="jml08">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml08" class="form-group t103_daf_kelas_siswa_iuran_jml08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml08->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml08->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl08->Visible) { // tgl08 ?>
		<td data-name="tgl08">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl08" class="form-group t103_daf_kelas_siswa_iuran_tgl08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl08->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl08->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl08->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl08->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl08->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl08->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr09->Visible) { // byr09 ?>
		<td data-name="byr09">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr09" class="form-group t103_daf_kelas_siswa_iuran_byr09">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr09->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr09->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr09->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml09->Visible) { // jml09 ?>
		<td data-name="jml09">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml09" class="form-group t103_daf_kelas_siswa_iuran_jml09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml09->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml09->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl09->Visible) { // tgl09 ?>
		<td data-name="tgl09">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl09" class="form-group t103_daf_kelas_siswa_iuran_tgl09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl09->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl09->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl09->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl09->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl09->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl09->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr10->Visible) { // byr10 ?>
		<td data-name="byr10">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr10" class="form-group t103_daf_kelas_siswa_iuran_byr10">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr10->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr10->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr10->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml10->Visible) { // jml10 ?>
		<td data-name="jml10">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml10" class="form-group t103_daf_kelas_siswa_iuran_jml10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml10->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml10->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl10->Visible) { // tgl10 ?>
		<td data-name="tgl10">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl10" class="form-group t103_daf_kelas_siswa_iuran_tgl10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl10->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl10->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl10->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl10->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl10->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl10->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr11->Visible) { // byr11 ?>
		<td data-name="byr11">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr11" class="form-group t103_daf_kelas_siswa_iuran_byr11">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr11->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr11->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr11->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml11->Visible) { // jml11 ?>
		<td data-name="jml11">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml11" class="form-group t103_daf_kelas_siswa_iuran_jml11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml11->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml11->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl11->Visible) { // tgl11 ?>
		<td data-name="tgl11">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl11" class="form-group t103_daf_kelas_siswa_iuran_tgl11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl11->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl11->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl11->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl11->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl11->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl11->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr12->Visible) { // byr12 ?>
		<td data-name="byr12">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr12" class="form-group t103_daf_kelas_siswa_iuran_byr12">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr12->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr12->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr12->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml12->Visible) { // jml12 ?>
		<td data-name="jml12">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml12" class="form-group t103_daf_kelas_siswa_iuran_jml12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml12->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml12->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl12->Visible) { // tgl12 ?>
		<td data-name="tgl12">
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl12" class="form-group t103_daf_kelas_siswa_iuran_tgl12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl12->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl12->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl12->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl12->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl12->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl12->OldValue) ?>">
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t103_daf_kelas_siswa_iuran_list->ListOptions->render("body", "right", $t103_daf_kelas_siswa_iuran_list->RowCnt);
?>
<script>
ft103_daf_kelas_siswa_iuranlist.updateLists(<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>);
</script>
	</tr>
<?php
}
?>
<?php
if ($t103_daf_kelas_siswa_iuran->ExportAll && $t103_daf_kelas_siswa_iuran->isExport()) {
	$t103_daf_kelas_siswa_iuran_list->StopRec = $t103_daf_kelas_siswa_iuran_list->TotalRecs;
} else {

	// Set the last record to display
	if ($t103_daf_kelas_siswa_iuran_list->TotalRecs > $t103_daf_kelas_siswa_iuran_list->StartRec + $t103_daf_kelas_siswa_iuran_list->DisplayRecs - 1)
		$t103_daf_kelas_siswa_iuran_list->StopRec = $t103_daf_kelas_siswa_iuran_list->StartRec + $t103_daf_kelas_siswa_iuran_list->DisplayRecs - 1;
	else
		$t103_daf_kelas_siswa_iuran_list->StopRec = $t103_daf_kelas_siswa_iuran_list->TotalRecs;
}

// Restore number of post back records
if ($CurrentForm && $t103_daf_kelas_siswa_iuran_list->EventCancelled) {
	$CurrentForm->Index = -1;
	if ($CurrentForm->hasValue($t103_daf_kelas_siswa_iuran_list->FormKeyCountName) && ($t103_daf_kelas_siswa_iuran->isGridAdd() || $t103_daf_kelas_siswa_iuran->isGridEdit() || $t103_daf_kelas_siswa_iuran->isConfirm())) {
		$t103_daf_kelas_siswa_iuran_list->KeyCount = $CurrentForm->getValue($t103_daf_kelas_siswa_iuran_list->FormKeyCountName);
		$t103_daf_kelas_siswa_iuran_list->StopRec = $t103_daf_kelas_siswa_iuran_list->StartRec + $t103_daf_kelas_siswa_iuran_list->KeyCount - 1;
	}
}
$t103_daf_kelas_siswa_iuran_list->RecCnt = $t103_daf_kelas_siswa_iuran_list->StartRec - 1;
if ($t103_daf_kelas_siswa_iuran_list->Recordset && !$t103_daf_kelas_siswa_iuran_list->Recordset->EOF) {
	$t103_daf_kelas_siswa_iuran_list->Recordset->moveFirst();
	$selectLimit = $t103_daf_kelas_siswa_iuran_list->UseSelectLimit;
	if (!$selectLimit && $t103_daf_kelas_siswa_iuran_list->StartRec > 1)
		$t103_daf_kelas_siswa_iuran_list->Recordset->move($t103_daf_kelas_siswa_iuran_list->StartRec - 1);
} elseif (!$t103_daf_kelas_siswa_iuran->AllowAddDeleteRow && $t103_daf_kelas_siswa_iuran_list->StopRec == 0) {
	$t103_daf_kelas_siswa_iuran_list->StopRec = $t103_daf_kelas_siswa_iuran->GridAddRowCount;
}

// Initialize aggregate
$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_AGGREGATEINIT;
$t103_daf_kelas_siswa_iuran->resetAttributes();
$t103_daf_kelas_siswa_iuran_list->renderRow();
$t103_daf_kelas_siswa_iuran_list->EditRowCnt = 0;
if ($t103_daf_kelas_siswa_iuran->isEdit())
	$t103_daf_kelas_siswa_iuran_list->RowIndex = 1;
if ($t103_daf_kelas_siswa_iuran->isGridAdd())
	$t103_daf_kelas_siswa_iuran_list->RowIndex = 0;
if ($t103_daf_kelas_siswa_iuran->isGridEdit())
	$t103_daf_kelas_siswa_iuran_list->RowIndex = 0;
while ($t103_daf_kelas_siswa_iuran_list->RecCnt < $t103_daf_kelas_siswa_iuran_list->StopRec) {
	$t103_daf_kelas_siswa_iuran_list->RecCnt++;
	if ($t103_daf_kelas_siswa_iuran_list->RecCnt >= $t103_daf_kelas_siswa_iuran_list->StartRec) {
		$t103_daf_kelas_siswa_iuran_list->RowCnt++;
		if ($t103_daf_kelas_siswa_iuran->isGridAdd() || $t103_daf_kelas_siswa_iuran->isGridEdit() || $t103_daf_kelas_siswa_iuran->isConfirm()) {
			$t103_daf_kelas_siswa_iuran_list->RowIndex++;
			$CurrentForm->Index = $t103_daf_kelas_siswa_iuran_list->RowIndex;
			if ($CurrentForm->hasValue($t103_daf_kelas_siswa_iuran_list->FormActionName) && $t103_daf_kelas_siswa_iuran_list->EventCancelled)
				$t103_daf_kelas_siswa_iuran_list->RowAction = strval($CurrentForm->getValue($t103_daf_kelas_siswa_iuran_list->FormActionName));
			elseif ($t103_daf_kelas_siswa_iuran->isGridAdd())
				$t103_daf_kelas_siswa_iuran_list->RowAction = "insert";
			else
				$t103_daf_kelas_siswa_iuran_list->RowAction = "";
		}

		// Set up key count
		$t103_daf_kelas_siswa_iuran_list->KeyCount = $t103_daf_kelas_siswa_iuran_list->RowIndex;

		// Init row class and style
		$t103_daf_kelas_siswa_iuran->resetAttributes();
		$t103_daf_kelas_siswa_iuran->CssClass = "";
		if ($t103_daf_kelas_siswa_iuran->isGridAdd()) {
			$t103_daf_kelas_siswa_iuran_list->loadRowValues(); // Load default values
		} else {
			$t103_daf_kelas_siswa_iuran_list->loadRowValues($t103_daf_kelas_siswa_iuran_list->Recordset); // Load row values
		}
		$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_VIEW; // Render view
		if ($t103_daf_kelas_siswa_iuran->isGridAdd()) // Grid add
			$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_ADD; // Render add
		if ($t103_daf_kelas_siswa_iuran->isGridAdd() && $t103_daf_kelas_siswa_iuran->EventCancelled && !$CurrentForm->hasValue("k_blankrow")) // Insert failed
			$t103_daf_kelas_siswa_iuran_list->restoreCurrentRowFormValues($t103_daf_kelas_siswa_iuran_list->RowIndex); // Restore form values
		if ($t103_daf_kelas_siswa_iuran->isEdit()) {
			if ($t103_daf_kelas_siswa_iuran_list->checkInlineEditKey() && $t103_daf_kelas_siswa_iuran_list->EditRowCnt == 0) { // Inline edit
				$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_EDIT; // Render edit
			}
		}
		if ($t103_daf_kelas_siswa_iuran->isGridEdit()) { // Grid edit
			if ($t103_daf_kelas_siswa_iuran->EventCancelled)
				$t103_daf_kelas_siswa_iuran_list->restoreCurrentRowFormValues($t103_daf_kelas_siswa_iuran_list->RowIndex); // Restore form values
			if ($t103_daf_kelas_siswa_iuran_list->RowAction == "insert")
				$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_ADD; // Render add
			else
				$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_EDIT; // Render edit
		}
		if ($t103_daf_kelas_siswa_iuran->isEdit() && $t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT && $t103_daf_kelas_siswa_iuran->EventCancelled) { // Update failed
			$CurrentForm->Index = 1;
			$t103_daf_kelas_siswa_iuran_list->restoreFormValues(); // Restore form values
		}
		if ($t103_daf_kelas_siswa_iuran->isGridEdit() && ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT || $t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) && $t103_daf_kelas_siswa_iuran->EventCancelled) // Update failed
			$t103_daf_kelas_siswa_iuran_list->restoreCurrentRowFormValues($t103_daf_kelas_siswa_iuran_list->RowIndex); // Restore form values
		if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) // Edit row
			$t103_daf_kelas_siswa_iuran_list->EditRowCnt++;

		// Set up row id / data-rowindex
		$t103_daf_kelas_siswa_iuran->RowAttrs = array_merge($t103_daf_kelas_siswa_iuran->RowAttrs, array('data-rowindex'=>$t103_daf_kelas_siswa_iuran_list->RowCnt, 'id'=>'r' . $t103_daf_kelas_siswa_iuran_list->RowCnt . '_t103_daf_kelas_siswa_iuran', 'data-rowtype'=>$t103_daf_kelas_siswa_iuran->RowType));

		// Render row
		$t103_daf_kelas_siswa_iuran_list->renderRow();

		// Render list options
		$t103_daf_kelas_siswa_iuran_list->renderListOptions();

		// Skip delete row / empty row for confirm page
		if ($t103_daf_kelas_siswa_iuran_list->RowAction <> "delete" && $t103_daf_kelas_siswa_iuran_list->RowAction <> "insertdelete" && !($t103_daf_kelas_siswa_iuran_list->RowAction == "insert" && $t103_daf_kelas_siswa_iuran->isConfirm() && $t103_daf_kelas_siswa_iuran_list->emptyRow())) {
?>
	<tr<?php echo $t103_daf_kelas_siswa_iuran->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t103_daf_kelas_siswa_iuran_list->ListOptions->render("body", "left", $t103_daf_kelas_siswa_iuran_list->RowCnt);
?>
	<?php if ($t103_daf_kelas_siswa_iuran->id->Visible) { // id ?>
		<td data-name="id"<?php echo $t103_daf_kelas_siswa_iuran->id->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->id->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_id" class="form-group t103_daf_kelas_siswa_iuran_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?php echo RemoveHtml($t103_daf_kelas_siswa_iuran->id->EditValue) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->id->CurrentValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_id" class="t103_daf_kelas_siswa_iuran_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->id->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->id->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Visible) { // daf_kelas_siswa_id ?>
		<td data-name="daf_kelas_siswa_id"<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getSessionValue() <> "") { ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="form-group t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?php echo RemoveHtml($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->ViewValue) ?>"></span>
</span>
<input type="hidden" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->CurrentValue) ?>">
<?php } else { ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="form-group t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_daf_kelas_siswa_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->editAttributes() ?>>
</span>
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_daf_kelas_siswa_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getSessionValue() <> "") { ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="form-group t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?php echo RemoveHtml($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->ViewValue) ?>"></span>
</span>
<input type="hidden" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->CurrentValue) ?>">
<?php } else { ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="form-group t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_daf_kelas_siswa_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->editAttributes() ?>>
</span>
<?php } ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
		<td data-name="iuran_id"<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_iuran_id" class="form-group t103_daf_kelas_siswa_iuran_iuran_id">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->iuran_id->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->iuran_id->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_iuran_id" class="form-group t103_daf_kelas_siswa_iuran_iuran_id">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->iuran_id->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_iuran_id" class="t103_daf_kelas_siswa_iuran_iuran_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->Jumlah->Visible) { // Jumlah ?>
		<td data-name="Jumlah"<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_Jumlah" class="form-group t103_daf_kelas_siswa_iuran_Jumlah">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->Jumlah->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->Jumlah->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_Jumlah" class="form-group t103_daf_kelas_siswa_iuran_Jumlah">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->Jumlah->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_Jumlah" class="t103_daf_kelas_siswa_iuran_Jumlah">
<span<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr01->Visible) { // byr01 ?>
		<td data-name="byr01"<?php echo $t103_daf_kelas_siswa_iuran->byr01->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr01" class="form-group t103_daf_kelas_siswa_iuran_byr01">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr01->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr01->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr01->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr01" class="form-group t103_daf_kelas_siswa_iuran_byr01">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr01->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr01->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr01" class="t103_daf_kelas_siswa_iuran_byr01">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr01->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr01->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr01->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr01->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml01->Visible) { // jml01 ?>
		<td data-name="jml01"<?php echo $t103_daf_kelas_siswa_iuran->jml01->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml01" class="form-group t103_daf_kelas_siswa_iuran_jml01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml01->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml01->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml01" class="form-group t103_daf_kelas_siswa_iuran_jml01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml01->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml01" class="t103_daf_kelas_siswa_iuran_jml01">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml01->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml01->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl01->Visible) { // tgl01 ?>
		<td data-name="tgl01"<?php echo $t103_daf_kelas_siswa_iuran->tgl01->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl01" class="form-group t103_daf_kelas_siswa_iuran_tgl01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl01->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl01->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl01->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl01->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl01->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl01->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl01" class="form-group t103_daf_kelas_siswa_iuran_tgl01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl01->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl01->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl01->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl01->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl01->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl01" class="t103_daf_kelas_siswa_iuran_tgl01">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl01->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl01->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr02->Visible) { // byr02 ?>
		<td data-name="byr02"<?php echo $t103_daf_kelas_siswa_iuran->byr02->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr02" class="form-group t103_daf_kelas_siswa_iuran_byr02">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr02->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr02->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr02->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr02" class="form-group t103_daf_kelas_siswa_iuran_byr02">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr02->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr02->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr02" class="t103_daf_kelas_siswa_iuran_byr02">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr02->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr02->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr02->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr02->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml02->Visible) { // jml02 ?>
		<td data-name="jml02"<?php echo $t103_daf_kelas_siswa_iuran->jml02->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml02" class="form-group t103_daf_kelas_siswa_iuran_jml02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml02->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml02->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml02" class="form-group t103_daf_kelas_siswa_iuran_jml02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml02->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml02" class="t103_daf_kelas_siswa_iuran_jml02">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml02->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml02->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl02->Visible) { // tgl02 ?>
		<td data-name="tgl02"<?php echo $t103_daf_kelas_siswa_iuran->tgl02->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl02" class="form-group t103_daf_kelas_siswa_iuran_tgl02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl02->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl02->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl02->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl02->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl02->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl02->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl02" class="form-group t103_daf_kelas_siswa_iuran_tgl02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl02->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl02->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl02->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl02->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl02->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl02" class="t103_daf_kelas_siswa_iuran_tgl02">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl02->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl02->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr03->Visible) { // byr03 ?>
		<td data-name="byr03"<?php echo $t103_daf_kelas_siswa_iuran->byr03->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr03" class="form-group t103_daf_kelas_siswa_iuran_byr03">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr03->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr03->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr03->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr03" class="form-group t103_daf_kelas_siswa_iuran_byr03">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr03->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr03->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr03" class="t103_daf_kelas_siswa_iuran_byr03">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr03->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr03->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr03->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr03->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml03->Visible) { // jml03 ?>
		<td data-name="jml03"<?php echo $t103_daf_kelas_siswa_iuran->jml03->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml03" class="form-group t103_daf_kelas_siswa_iuran_jml03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml03->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml03->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml03" class="form-group t103_daf_kelas_siswa_iuran_jml03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml03->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml03" class="t103_daf_kelas_siswa_iuran_jml03">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml03->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml03->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl03->Visible) { // tgl03 ?>
		<td data-name="tgl03"<?php echo $t103_daf_kelas_siswa_iuran->tgl03->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl03" class="form-group t103_daf_kelas_siswa_iuran_tgl03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl03->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl03->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl03->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl03->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl03->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl03->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl03" class="form-group t103_daf_kelas_siswa_iuran_tgl03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl03->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl03->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl03->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl03->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl03->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl03" class="t103_daf_kelas_siswa_iuran_tgl03">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl03->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl03->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr04->Visible) { // byr04 ?>
		<td data-name="byr04"<?php echo $t103_daf_kelas_siswa_iuran->byr04->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr04" class="form-group t103_daf_kelas_siswa_iuran_byr04">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr04->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr04->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr04->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr04" class="form-group t103_daf_kelas_siswa_iuran_byr04">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr04->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr04->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr04" class="t103_daf_kelas_siswa_iuran_byr04">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr04->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr04->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr04->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr04->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml04->Visible) { // jml04 ?>
		<td data-name="jml04"<?php echo $t103_daf_kelas_siswa_iuran->jml04->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml04" class="form-group t103_daf_kelas_siswa_iuran_jml04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml04->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml04->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml04" class="form-group t103_daf_kelas_siswa_iuran_jml04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml04->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml04" class="t103_daf_kelas_siswa_iuran_jml04">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml04->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml04->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl04->Visible) { // tgl04 ?>
		<td data-name="tgl04"<?php echo $t103_daf_kelas_siswa_iuran->tgl04->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl04" class="form-group t103_daf_kelas_siswa_iuran_tgl04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl04->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl04->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl04->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl04->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl04->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl04->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl04" class="form-group t103_daf_kelas_siswa_iuran_tgl04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl04->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl04->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl04->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl04->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl04->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl04" class="t103_daf_kelas_siswa_iuran_tgl04">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl04->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl04->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr05->Visible) { // byr05 ?>
		<td data-name="byr05"<?php echo $t103_daf_kelas_siswa_iuran->byr05->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr05" class="form-group t103_daf_kelas_siswa_iuran_byr05">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr05->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr05->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr05->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr05" class="form-group t103_daf_kelas_siswa_iuran_byr05">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr05->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr05->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr05" class="t103_daf_kelas_siswa_iuran_byr05">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr05->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr05->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr05->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr05->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml05->Visible) { // jml05 ?>
		<td data-name="jml05"<?php echo $t103_daf_kelas_siswa_iuran->jml05->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml05" class="form-group t103_daf_kelas_siswa_iuran_jml05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml05->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml05->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml05" class="form-group t103_daf_kelas_siswa_iuran_jml05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml05->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml05" class="t103_daf_kelas_siswa_iuran_jml05">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml05->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml05->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl05->Visible) { // tgl05 ?>
		<td data-name="tgl05"<?php echo $t103_daf_kelas_siswa_iuran->tgl05->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl05" class="form-group t103_daf_kelas_siswa_iuran_tgl05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl05->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl05->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl05->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl05->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl05->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl05->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl05" class="form-group t103_daf_kelas_siswa_iuran_tgl05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl05->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl05->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl05->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl05->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl05->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl05" class="t103_daf_kelas_siswa_iuran_tgl05">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl05->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl05->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr06->Visible) { // byr06 ?>
		<td data-name="byr06"<?php echo $t103_daf_kelas_siswa_iuran->byr06->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr06" class="form-group t103_daf_kelas_siswa_iuran_byr06">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr06->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr06->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr06->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr06" class="form-group t103_daf_kelas_siswa_iuran_byr06">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr06->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr06->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr06" class="t103_daf_kelas_siswa_iuran_byr06">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr06->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr06->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr06->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr06->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml06->Visible) { // jml06 ?>
		<td data-name="jml06"<?php echo $t103_daf_kelas_siswa_iuran->jml06->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml06" class="form-group t103_daf_kelas_siswa_iuran_jml06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml06->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml06->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml06" class="form-group t103_daf_kelas_siswa_iuran_jml06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml06->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml06" class="t103_daf_kelas_siswa_iuran_jml06">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml06->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml06->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl06->Visible) { // tgl06 ?>
		<td data-name="tgl06"<?php echo $t103_daf_kelas_siswa_iuran->tgl06->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl06" class="form-group t103_daf_kelas_siswa_iuran_tgl06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl06->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl06->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl06->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl06->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl06->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl06->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl06" class="form-group t103_daf_kelas_siswa_iuran_tgl06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl06->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl06->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl06->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl06->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl06->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl06" class="t103_daf_kelas_siswa_iuran_tgl06">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl06->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl06->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr07->Visible) { // byr07 ?>
		<td data-name="byr07"<?php echo $t103_daf_kelas_siswa_iuran->byr07->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr07" class="form-group t103_daf_kelas_siswa_iuran_byr07">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr07->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr07->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr07->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr07" class="form-group t103_daf_kelas_siswa_iuran_byr07">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr07->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr07->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr07" class="t103_daf_kelas_siswa_iuran_byr07">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr07->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr07->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr07->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr07->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml07->Visible) { // jml07 ?>
		<td data-name="jml07"<?php echo $t103_daf_kelas_siswa_iuran->jml07->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml07" class="form-group t103_daf_kelas_siswa_iuran_jml07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml07->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml07->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml07" class="form-group t103_daf_kelas_siswa_iuran_jml07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml07->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml07" class="t103_daf_kelas_siswa_iuran_jml07">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml07->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml07->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl07->Visible) { // tgl07 ?>
		<td data-name="tgl07"<?php echo $t103_daf_kelas_siswa_iuran->tgl07->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl07" class="form-group t103_daf_kelas_siswa_iuran_tgl07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl07->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl07->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl07->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl07->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl07->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl07->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl07" class="form-group t103_daf_kelas_siswa_iuran_tgl07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl07->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl07->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl07->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl07->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl07->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl07" class="t103_daf_kelas_siswa_iuran_tgl07">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl07->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl07->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr08->Visible) { // byr08 ?>
		<td data-name="byr08"<?php echo $t103_daf_kelas_siswa_iuran->byr08->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr08" class="form-group t103_daf_kelas_siswa_iuran_byr08">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr08->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr08->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr08->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr08" class="form-group t103_daf_kelas_siswa_iuran_byr08">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr08->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr08->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr08" class="t103_daf_kelas_siswa_iuran_byr08">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr08->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr08->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr08->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr08->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml08->Visible) { // jml08 ?>
		<td data-name="jml08"<?php echo $t103_daf_kelas_siswa_iuran->jml08->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml08" class="form-group t103_daf_kelas_siswa_iuran_jml08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml08->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml08->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml08" class="form-group t103_daf_kelas_siswa_iuran_jml08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml08->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml08" class="t103_daf_kelas_siswa_iuran_jml08">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml08->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml08->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl08->Visible) { // tgl08 ?>
		<td data-name="tgl08"<?php echo $t103_daf_kelas_siswa_iuran->tgl08->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl08" class="form-group t103_daf_kelas_siswa_iuran_tgl08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl08->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl08->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl08->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl08->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl08->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl08->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl08" class="form-group t103_daf_kelas_siswa_iuran_tgl08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl08->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl08->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl08->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl08->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl08->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl08" class="t103_daf_kelas_siswa_iuran_tgl08">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl08->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl08->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr09->Visible) { // byr09 ?>
		<td data-name="byr09"<?php echo $t103_daf_kelas_siswa_iuran->byr09->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr09" class="form-group t103_daf_kelas_siswa_iuran_byr09">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr09->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr09->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr09->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr09" class="form-group t103_daf_kelas_siswa_iuran_byr09">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr09->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr09->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr09" class="t103_daf_kelas_siswa_iuran_byr09">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr09->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr09->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr09->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr09->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml09->Visible) { // jml09 ?>
		<td data-name="jml09"<?php echo $t103_daf_kelas_siswa_iuran->jml09->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml09" class="form-group t103_daf_kelas_siswa_iuran_jml09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml09->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml09->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml09" class="form-group t103_daf_kelas_siswa_iuran_jml09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml09->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml09" class="t103_daf_kelas_siswa_iuran_jml09">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml09->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml09->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl09->Visible) { // tgl09 ?>
		<td data-name="tgl09"<?php echo $t103_daf_kelas_siswa_iuran->tgl09->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl09" class="form-group t103_daf_kelas_siswa_iuran_tgl09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl09->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl09->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl09->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl09->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl09->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl09->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl09" class="form-group t103_daf_kelas_siswa_iuran_tgl09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl09->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl09->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl09->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl09->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl09->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl09" class="t103_daf_kelas_siswa_iuran_tgl09">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl09->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl09->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr10->Visible) { // byr10 ?>
		<td data-name="byr10"<?php echo $t103_daf_kelas_siswa_iuran->byr10->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr10" class="form-group t103_daf_kelas_siswa_iuran_byr10">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr10->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr10->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr10->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr10" class="form-group t103_daf_kelas_siswa_iuran_byr10">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr10->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr10->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr10" class="t103_daf_kelas_siswa_iuran_byr10">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr10->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr10->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr10->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr10->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml10->Visible) { // jml10 ?>
		<td data-name="jml10"<?php echo $t103_daf_kelas_siswa_iuran->jml10->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml10" class="form-group t103_daf_kelas_siswa_iuran_jml10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml10->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml10->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml10" class="form-group t103_daf_kelas_siswa_iuran_jml10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml10->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml10" class="t103_daf_kelas_siswa_iuran_jml10">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml10->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml10->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl10->Visible) { // tgl10 ?>
		<td data-name="tgl10"<?php echo $t103_daf_kelas_siswa_iuran->tgl10->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl10" class="form-group t103_daf_kelas_siswa_iuran_tgl10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl10->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl10->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl10->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl10->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl10->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl10->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl10" class="form-group t103_daf_kelas_siswa_iuran_tgl10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl10->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl10->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl10->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl10->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl10->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl10" class="t103_daf_kelas_siswa_iuran_tgl10">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl10->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl10->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr11->Visible) { // byr11 ?>
		<td data-name="byr11"<?php echo $t103_daf_kelas_siswa_iuran->byr11->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr11" class="form-group t103_daf_kelas_siswa_iuran_byr11">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr11->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr11->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr11->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr11" class="form-group t103_daf_kelas_siswa_iuran_byr11">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr11->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr11->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr11" class="t103_daf_kelas_siswa_iuran_byr11">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr11->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr11->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr11->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr11->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml11->Visible) { // jml11 ?>
		<td data-name="jml11"<?php echo $t103_daf_kelas_siswa_iuran->jml11->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml11" class="form-group t103_daf_kelas_siswa_iuran_jml11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml11->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml11->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml11" class="form-group t103_daf_kelas_siswa_iuran_jml11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml11->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml11" class="t103_daf_kelas_siswa_iuran_jml11">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml11->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml11->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl11->Visible) { // tgl11 ?>
		<td data-name="tgl11"<?php echo $t103_daf_kelas_siswa_iuran->tgl11->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl11" class="form-group t103_daf_kelas_siswa_iuran_tgl11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl11->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl11->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl11->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl11->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl11->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl11->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl11" class="form-group t103_daf_kelas_siswa_iuran_tgl11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl11->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl11->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl11->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl11->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl11->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl11" class="t103_daf_kelas_siswa_iuran_tgl11">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl11->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl11->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr12->Visible) { // byr12 ?>
		<td data-name="byr12"<?php echo $t103_daf_kelas_siswa_iuran->byr12->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr12" class="form-group t103_daf_kelas_siswa_iuran_byr12">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr12->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr12->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr12->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr12" class="form-group t103_daf_kelas_siswa_iuran_byr12">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr12->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr12->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_byr12" class="t103_daf_kelas_siswa_iuran_byr12">
<span<?php echo $t103_daf_kelas_siswa_iuran->byr12->viewAttributes() ?>>
<?php if (ConvertToBool($t103_daf_kelas_siswa_iuran->byr12->CurrentValue)) { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr12->getViewValue() ?>" disabled checked>
<?php } else { ?>
<input type="checkbox" value="<?php echo $t103_daf_kelas_siswa_iuran->byr12->getViewValue() ?>" disabled>
<?php } ?>
</span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml12->Visible) { // jml12 ?>
		<td data-name="jml12"<?php echo $t103_daf_kelas_siswa_iuran->jml12->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml12" class="form-group t103_daf_kelas_siswa_iuran_jml12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml12->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml12->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml12" class="form-group t103_daf_kelas_siswa_iuran_jml12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml12->editAttributes() ?>>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_jml12" class="t103_daf_kelas_siswa_iuran_jml12">
<span<?php echo $t103_daf_kelas_siswa_iuran->jml12->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->jml12->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl12->Visible) { // tgl12 ?>
		<td data-name="tgl12"<?php echo $t103_daf_kelas_siswa_iuran->tgl12->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD) { // Add record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl12" class="form-group t103_daf_kelas_siswa_iuran_tgl12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl12->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl12->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl12->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl12->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl12->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl12->OldValue) ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { // Edit record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl12" class="form-group t103_daf_kelas_siswa_iuran_tgl12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl12->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl12->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl12->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl12->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl12->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_VIEW) { // View record ?>
<span id="el<?php echo $t103_daf_kelas_siswa_iuran_list->RowCnt ?>_t103_daf_kelas_siswa_iuran_tgl12" class="t103_daf_kelas_siswa_iuran_tgl12">
<span<?php echo $t103_daf_kelas_siswa_iuran->tgl12->viewAttributes() ?>>
<?php echo $t103_daf_kelas_siswa_iuran->tgl12->getViewValue() ?></span>
</span>
<?php } ?>
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t103_daf_kelas_siswa_iuran_list->ListOptions->render("body", "right", $t103_daf_kelas_siswa_iuran_list->RowCnt);
?>
	</tr>
<?php if ($t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_ADD || $t103_daf_kelas_siswa_iuran->RowType == ROWTYPE_EDIT) { ?>
<script>
ft103_daf_kelas_siswa_iuranlist.updateLists(<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>);
</script>
<?php } ?>
<?php
	}
	} // End delete row checking
	if (!$t103_daf_kelas_siswa_iuran->isGridAdd())
		if (!$t103_daf_kelas_siswa_iuran_list->Recordset->EOF)
			$t103_daf_kelas_siswa_iuran_list->Recordset->moveNext();
}
?>
<?php
	if ($t103_daf_kelas_siswa_iuran->isGridAdd() || $t103_daf_kelas_siswa_iuran->isGridEdit()) {
		$t103_daf_kelas_siswa_iuran_list->RowIndex = '$rowindex$';
		$t103_daf_kelas_siswa_iuran_list->loadRowValues();

		// Set row properties
		$t103_daf_kelas_siswa_iuran->resetAttributes();
		$t103_daf_kelas_siswa_iuran->RowAttrs = array_merge($t103_daf_kelas_siswa_iuran->RowAttrs, array('data-rowindex'=>$t103_daf_kelas_siswa_iuran_list->RowIndex, 'id'=>'r0_t103_daf_kelas_siswa_iuran', 'data-rowtype'=>ROWTYPE_ADD));
		AppendClass($t103_daf_kelas_siswa_iuran->RowAttrs["class"], "ew-template");
		$t103_daf_kelas_siswa_iuran->RowType = ROWTYPE_ADD;

		// Render row
		$t103_daf_kelas_siswa_iuran_list->renderRow();

		// Render list options
		$t103_daf_kelas_siswa_iuran_list->renderListOptions();
		$t103_daf_kelas_siswa_iuran_list->StartRowCnt = 0;
?>
	<tr<?php echo $t103_daf_kelas_siswa_iuran->rowAttributes() ?>>
<?php

// Render list options (body, left)
$t103_daf_kelas_siswa_iuran_list->ListOptions->render("body", "left", $t103_daf_kelas_siswa_iuran_list->RowIndex);
?>
	<?php if ($t103_daf_kelas_siswa_iuran->id->Visible) { // id ?>
		<td data-name="id">
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->id->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Visible) { // daf_kelas_siswa_id ?>
		<td data-name="daf_kelas_siswa_id">
<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getSessionValue() <> "") { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="form-group t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?php echo RemoveHtml($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->ViewValue) ?>"></span>
</span>
<input type="hidden" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->CurrentValue) ?>">
<?php } else { ?>
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" class="form-group t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_daf_kelas_siswa_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->editAttributes() ?>>
</span>
<?php } ?>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_daf_kelas_siswa_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_daf_kelas_siswa_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
		<td data-name="iuran_id">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_iuran_id" class="form-group t103_daf_kelas_siswa_iuran_iuran_id">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->iuran_id->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_iuran_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->iuran_id->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->Jumlah->Visible) { // Jumlah ?>
		<td data-name="Jumlah">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_Jumlah" class="form-group t103_daf_kelas_siswa_iuran_Jumlah">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->Jumlah->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_Jumlah" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->Jumlah->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr01->Visible) { // byr01 ?>
		<td data-name="byr01">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr01" class="form-group t103_daf_kelas_siswa_iuran_byr01">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr01->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr01->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr01[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr01->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml01->Visible) { // jml01 ?>
		<td data-name="jml01">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml01" class="form-group t103_daf_kelas_siswa_iuran_jml01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml01->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml01->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl01->Visible) { // tgl01 ?>
		<td data-name="tgl01">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl01" class="form-group t103_daf_kelas_siswa_iuran_tgl01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl01->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl01->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl01->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl01->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl01->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl01" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl01->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr02->Visible) { // byr02 ?>
		<td data-name="byr02">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr02" class="form-group t103_daf_kelas_siswa_iuran_byr02">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr02->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr02->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr02[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr02->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml02->Visible) { // jml02 ?>
		<td data-name="jml02">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml02" class="form-group t103_daf_kelas_siswa_iuran_jml02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml02->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml02->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl02->Visible) { // tgl02 ?>
		<td data-name="tgl02">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl02" class="form-group t103_daf_kelas_siswa_iuran_tgl02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl02->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl02->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl02->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl02->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl02->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl02" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl02->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr03->Visible) { // byr03 ?>
		<td data-name="byr03">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr03" class="form-group t103_daf_kelas_siswa_iuran_byr03">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr03->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr03->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr03[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr03->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml03->Visible) { // jml03 ?>
		<td data-name="jml03">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml03" class="form-group t103_daf_kelas_siswa_iuran_jml03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml03->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml03->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl03->Visible) { // tgl03 ?>
		<td data-name="tgl03">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl03" class="form-group t103_daf_kelas_siswa_iuran_tgl03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl03->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl03->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl03->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl03->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl03->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl03" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl03->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr04->Visible) { // byr04 ?>
		<td data-name="byr04">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr04" class="form-group t103_daf_kelas_siswa_iuran_byr04">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr04->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr04->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr04[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr04->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml04->Visible) { // jml04 ?>
		<td data-name="jml04">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml04" class="form-group t103_daf_kelas_siswa_iuran_jml04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml04->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml04->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl04->Visible) { // tgl04 ?>
		<td data-name="tgl04">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl04" class="form-group t103_daf_kelas_siswa_iuran_tgl04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl04->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl04->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl04->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl04->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl04->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl04" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl04->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr05->Visible) { // byr05 ?>
		<td data-name="byr05">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr05" class="form-group t103_daf_kelas_siswa_iuran_byr05">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr05->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr05->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr05[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr05->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml05->Visible) { // jml05 ?>
		<td data-name="jml05">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml05" class="form-group t103_daf_kelas_siswa_iuran_jml05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml05->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml05->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl05->Visible) { // tgl05 ?>
		<td data-name="tgl05">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl05" class="form-group t103_daf_kelas_siswa_iuran_tgl05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl05->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl05->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl05->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl05->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl05->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl05" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl05->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr06->Visible) { // byr06 ?>
		<td data-name="byr06">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr06" class="form-group t103_daf_kelas_siswa_iuran_byr06">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr06->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr06->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr06[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr06->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml06->Visible) { // jml06 ?>
		<td data-name="jml06">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml06" class="form-group t103_daf_kelas_siswa_iuran_jml06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml06->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml06->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl06->Visible) { // tgl06 ?>
		<td data-name="tgl06">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl06" class="form-group t103_daf_kelas_siswa_iuran_tgl06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl06->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl06->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl06->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl06->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl06->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl06" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl06->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr07->Visible) { // byr07 ?>
		<td data-name="byr07">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr07" class="form-group t103_daf_kelas_siswa_iuran_byr07">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr07->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr07->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr07[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr07->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml07->Visible) { // jml07 ?>
		<td data-name="jml07">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml07" class="form-group t103_daf_kelas_siswa_iuran_jml07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml07->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml07->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl07->Visible) { // tgl07 ?>
		<td data-name="tgl07">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl07" class="form-group t103_daf_kelas_siswa_iuran_tgl07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl07->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl07->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl07->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl07->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl07->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl07" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl07->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr08->Visible) { // byr08 ?>
		<td data-name="byr08">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr08" class="form-group t103_daf_kelas_siswa_iuran_byr08">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr08->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr08->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr08[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr08->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml08->Visible) { // jml08 ?>
		<td data-name="jml08">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml08" class="form-group t103_daf_kelas_siswa_iuran_jml08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml08->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml08->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl08->Visible) { // tgl08 ?>
		<td data-name="tgl08">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl08" class="form-group t103_daf_kelas_siswa_iuran_tgl08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl08->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl08->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl08->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl08->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl08->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl08" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl08->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr09->Visible) { // byr09 ?>
		<td data-name="byr09">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr09" class="form-group t103_daf_kelas_siswa_iuran_byr09">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr09->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr09->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr09[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr09->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml09->Visible) { // jml09 ?>
		<td data-name="jml09">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml09" class="form-group t103_daf_kelas_siswa_iuran_jml09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml09->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml09->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl09->Visible) { // tgl09 ?>
		<td data-name="tgl09">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl09" class="form-group t103_daf_kelas_siswa_iuran_tgl09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl09->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl09->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl09->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl09->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl09->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl09" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl09->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr10->Visible) { // byr10 ?>
		<td data-name="byr10">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr10" class="form-group t103_daf_kelas_siswa_iuran_byr10">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr10->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr10->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr10[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr10->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml10->Visible) { // jml10 ?>
		<td data-name="jml10">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml10" class="form-group t103_daf_kelas_siswa_iuran_jml10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml10->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml10->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl10->Visible) { // tgl10 ?>
		<td data-name="tgl10">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl10" class="form-group t103_daf_kelas_siswa_iuran_tgl10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl10->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl10->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl10->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl10->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl10->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl10" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl10->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr11->Visible) { // byr11 ?>
		<td data-name="byr11">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr11" class="form-group t103_daf_kelas_siswa_iuran_byr11">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr11->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr11->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr11[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr11->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml11->Visible) { // jml11 ?>
		<td data-name="jml11">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml11" class="form-group t103_daf_kelas_siswa_iuran_jml11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml11->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml11->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl11->Visible) { // tgl11 ?>
		<td data-name="tgl11">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl11" class="form-group t103_daf_kelas_siswa_iuran_tgl11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl11->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl11->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl11->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl11->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl11->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl11" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl11->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->byr12->Visible) { // byr12 ?>
		<td data-name="byr12">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_byr12" class="form-group t103_daf_kelas_siswa_iuran_byr12">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr12->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr12->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_byr12[]" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->byr12->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->jml12->Visible) { // jml12 ?>
		<td data-name="jml12">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_jml12" class="form-group t103_daf_kelas_siswa_iuran_jml12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml12->editAttributes() ?>>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_jml12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml12->OldValue) ?>">
</td>
	<?php } ?>
	<?php if ($t103_daf_kelas_siswa_iuran->tgl12->Visible) { // tgl12 ?>
		<td data-name="tgl12">
<span id="el$rowindex$_t103_daf_kelas_siswa_iuran_tgl12" class="form-group t103_daf_kelas_siswa_iuran_tgl12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" id="x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl12->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl12->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl12->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl12->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl12->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranlist", "x<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" id="o<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>_tgl12" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl12->OldValue) ?>">
</td>
	<?php } ?>
<?php

// Render list options (body, right)
$t103_daf_kelas_siswa_iuran_list->ListOptions->render("body", "right", $t103_daf_kelas_siswa_iuran_list->RowIndex);
?>
<script>
ft103_daf_kelas_siswa_iuranlist.updateLists(<?php echo $t103_daf_kelas_siswa_iuran_list->RowIndex ?>);
</script>
	</tr>
<?php
}
?>
</tbody>
</table><!-- /.ew-table -->
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->isAdd() || $t103_daf_kelas_siswa_iuran->isCopy()) { ?>
<input type="hidden" name="<?php echo $t103_daf_kelas_siswa_iuran_list->FormKeyCountName ?>" id="<?php echo $t103_daf_kelas_siswa_iuran_list->FormKeyCountName ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_list->KeyCount ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->isGridAdd()) { ?>
<input type="hidden" name="action" id="action" value="gridinsert">
<input type="hidden" name="<?php echo $t103_daf_kelas_siswa_iuran_list->FormKeyCountName ?>" id="<?php echo $t103_daf_kelas_siswa_iuran_list->FormKeyCountName ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_list->KeyCount ?>">
<?php echo $t103_daf_kelas_siswa_iuran_list->MultiSelectKey ?>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->isEdit()) { ?>
<input type="hidden" name="<?php echo $t103_daf_kelas_siswa_iuran_list->FormKeyCountName ?>" id="<?php echo $t103_daf_kelas_siswa_iuran_list->FormKeyCountName ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_list->KeyCount ?>">
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->isGridEdit()) { ?>
<input type="hidden" name="action" id="action" value="gridupdate">
<input type="hidden" name="<?php echo $t103_daf_kelas_siswa_iuran_list->FormKeyCountName ?>" id="<?php echo $t103_daf_kelas_siswa_iuran_list->FormKeyCountName ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_list->KeyCount ?>">
<?php echo $t103_daf_kelas_siswa_iuran_list->MultiSelectKey ?>
<?php } ?>
<?php if (!$t103_daf_kelas_siswa_iuran->CurrentAction) { ?>
<input type="hidden" name="action" id="action" value="">
<?php } ?>
</div><!-- /.ew-grid-middle-panel -->
</form><!-- /.ew-list-form -->
<?php

// Close recordset
if ($t103_daf_kelas_siswa_iuran_list->Recordset)
	$t103_daf_kelas_siswa_iuran_list->Recordset->Close();
?>
<?php if (!$t103_daf_kelas_siswa_iuran->isExport()) { ?>
<div class="card-footer ew-grid-lower-panel">
<?php if (!$t103_daf_kelas_siswa_iuran->isGridAdd()) { ?>
<form name="ew-pager-form" class="form-inline ew-form ew-pager-form" action="<?php echo CurrentPageName() ?>">
<?php if (!isset($t103_daf_kelas_siswa_iuran_list->Pager)) $t103_daf_kelas_siswa_iuran_list->Pager = new PrevNextPager($t103_daf_kelas_siswa_iuran_list->StartRec, $t103_daf_kelas_siswa_iuran_list->DisplayRecs, $t103_daf_kelas_siswa_iuran_list->TotalRecs, $t103_daf_kelas_siswa_iuran_list->AutoHidePager) ?>
<?php if ($t103_daf_kelas_siswa_iuran_list->Pager->RecordCount > 0 && $t103_daf_kelas_siswa_iuran_list->Pager->Visible) { ?>
<div class="ew-pager">
<span><?php echo $Language->Phrase("Page") ?>&nbsp;</span>
<div class="ew-prev-next"><div class="input-group input-group-sm">
<div class="input-group-prepend">
<!-- first page button -->
	<?php if ($t103_daf_kelas_siswa_iuran_list->Pager->FirstButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerFirst") ?>" href="<?php echo $t103_daf_kelas_siswa_iuran_list->pageUrl() ?>start=<?php echo $t103_daf_kelas_siswa_iuran_list->Pager->FirstButton->Start ?>"><i class="icon-first ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerFirst") ?>"><i class="icon-first ew-icon"></i></a>
	<?php } ?>
<!-- previous page button -->
	<?php if ($t103_daf_kelas_siswa_iuran_list->Pager->PrevButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerPrevious") ?>" href="<?php echo $t103_daf_kelas_siswa_iuran_list->pageUrl() ?>start=<?php echo $t103_daf_kelas_siswa_iuran_list->Pager->PrevButton->Start ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerPrevious") ?>"><i class="icon-prev ew-icon"></i></a>
	<?php } ?>
</div>
<!-- current page number -->
	<input class="form-control" type="text" name="<?php echo TABLE_PAGE_NO ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_list->Pager->CurrentPage ?>">
<div class="input-group-append">
<!-- next page button -->
	<?php if ($t103_daf_kelas_siswa_iuran_list->Pager->NextButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerNext") ?>" href="<?php echo $t103_daf_kelas_siswa_iuran_list->pageUrl() ?>start=<?php echo $t103_daf_kelas_siswa_iuran_list->Pager->NextButton->Start ?>"><i class="icon-next ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerNext") ?>"><i class="icon-next ew-icon"></i></a>
	<?php } ?>
<!-- last page button -->
	<?php if ($t103_daf_kelas_siswa_iuran_list->Pager->LastButton->Enabled) { ?>
	<a class="btn btn-default" title="<?php echo $Language->phrase("PagerLast") ?>" href="<?php echo $t103_daf_kelas_siswa_iuran_list->pageUrl() ?>start=<?php echo $t103_daf_kelas_siswa_iuran_list->Pager->LastButton->Start ?>"><i class="icon-last ew-icon"></i></a>
	<?php } else { ?>
	<a class="btn btn-default disabled" title="<?php echo $Language->phrase("PagerLast") ?>"><i class="icon-last ew-icon"></i></a>
	<?php } ?>
</div>
</div>
</div>
<span>&nbsp;<?php echo $Language->Phrase("of") ?>&nbsp;<?php echo $t103_daf_kelas_siswa_iuran_list->Pager->PageCount ?></span>
<div class="clearfix"></div>
</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_list->Pager->RecordCount > 0) { ?>
<div class="ew-pager ew-rec">
	<span><?php echo $Language->Phrase("Record") ?>&nbsp;<?php echo $t103_daf_kelas_siswa_iuran_list->Pager->FromIndex ?>&nbsp;<?php echo $Language->Phrase("To") ?>&nbsp;<?php echo $t103_daf_kelas_siswa_iuran_list->Pager->ToIndex ?>&nbsp;<?php echo $Language->Phrase("Of") ?>&nbsp;<?php echo $t103_daf_kelas_siswa_iuran_list->Pager->RecordCount ?></span>
</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_list->TotalRecs > 0 && (!$t103_daf_kelas_siswa_iuran_list->AutoHidePageSizeSelector || $t103_daf_kelas_siswa_iuran_list->Pager->Visible)) { ?>
<div class="ew-pager">
<input type="hidden" name="t" value="t103_daf_kelas_siswa_iuran">
<select name="<?php echo TABLE_REC_PER_PAGE ?>" class="form-control form-control-sm ew-tooltip" title="<?php echo $Language->phrase("RecordsPerPage") ?>" onchange="this.form.submit();">
<option value="10"<?php if ($t103_daf_kelas_siswa_iuran_list->DisplayRecs == 10) { ?> selected<?php } ?>>10</option>
<option value="20"<?php if ($t103_daf_kelas_siswa_iuran_list->DisplayRecs == 20) { ?> selected<?php } ?>>20</option>
<option value="50"<?php if ($t103_daf_kelas_siswa_iuran_list->DisplayRecs == 50) { ?> selected<?php } ?>>50</option>
<option value="100"<?php if ($t103_daf_kelas_siswa_iuran_list->DisplayRecs == 100) { ?> selected<?php } ?>>100</option>
<option value="ALL"<?php if ($t103_daf_kelas_siswa_iuran->getRecordsPerPage() == -1) { ?> selected<?php } ?>><?php echo $Language->Phrase("AllRecords") ?></option>
</select>
</div>
<?php } ?>
</form>
<?php } ?>
<div class="ew-list-other-options">
<?php $t103_daf_kelas_siswa_iuran_list->OtherOptions->render("body", "bottom") ?>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div><!-- /.ew-grid -->
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran_list->TotalRecs == 0 && !$t103_daf_kelas_siswa_iuran->CurrentAction) { // Show other options ?>
<div class="ew-list-other-options">
<?php $t103_daf_kelas_siswa_iuran_list->OtherOptions->render("body") ?>
</div>
<div class="clearfix"></div>
<?php } ?>
<?php
$t103_daf_kelas_siswa_iuran_list->showPageFooter();
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
$t103_daf_kelas_siswa_iuran_list->terminate();
?>