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
$t103_daf_kelas_siswa_iuran_edit = new t103_daf_kelas_siswa_iuran_edit();

// Run the page
$t103_daf_kelas_siswa_iuran_edit->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t103_daf_kelas_siswa_iuran_edit->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "edit";
var ft103_daf_kelas_siswa_iuranedit = currentForm = new ew.Form("ft103_daf_kelas_siswa_iuranedit", "edit");

// Validate form
ft103_daf_kelas_siswa_iuranedit.validate = function() {
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
		<?php if ($t103_daf_kelas_siswa_iuran_edit->id->Required) { ?>
			elm = this.getElements("x" + infix + "_id");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->id->caption(), $t103_daf_kelas_siswa_iuran->id->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->daf_kelas_siswa_id->Required) { ?>
			elm = this.getElements("x" + infix + "_daf_kelas_siswa_id");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->caption(), $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_daf_kelas_siswa_id");
			if (elm && !ew.checkInteger(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->iuran_id->Required) { ?>
			elm = this.getElements("x" + infix + "_iuran_id");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->iuran_id->caption(), $t103_daf_kelas_siswa_iuran->iuran_id->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_iuran_id");
			if (elm && !ew.checkInteger(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->iuran_id->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->Jumlah->Required) { ?>
			elm = this.getElements("x" + infix + "_Jumlah");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->Jumlah->caption(), $t103_daf_kelas_siswa_iuran->Jumlah->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_Jumlah");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->Jumlah->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->byr01->Required) { ?>
			elm = this.getElements("x" + infix + "_byr01[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr01->caption(), $t103_daf_kelas_siswa_iuran->byr01->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->jml01->Required) { ?>
			elm = this.getElements("x" + infix + "_jml01");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml01->caption(), $t103_daf_kelas_siswa_iuran->jml01->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml01");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml01->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl01->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl01");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl01->caption(), $t103_daf_kelas_siswa_iuran->tgl01->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl01");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl01->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->byr02->Required) { ?>
			elm = this.getElements("x" + infix + "_byr02[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr02->caption(), $t103_daf_kelas_siswa_iuran->byr02->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->jml02->Required) { ?>
			elm = this.getElements("x" + infix + "_jml02");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml02->caption(), $t103_daf_kelas_siswa_iuran->jml02->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml02");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml02->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl02->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl02");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl02->caption(), $t103_daf_kelas_siswa_iuran->tgl02->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl02");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl02->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->byr03->Required) { ?>
			elm = this.getElements("x" + infix + "_byr03[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr03->caption(), $t103_daf_kelas_siswa_iuran->byr03->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->jml03->Required) { ?>
			elm = this.getElements("x" + infix + "_jml03");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml03->caption(), $t103_daf_kelas_siswa_iuran->jml03->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml03");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml03->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl03->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl03");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl03->caption(), $t103_daf_kelas_siswa_iuran->tgl03->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl03");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl03->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->byr04->Required) { ?>
			elm = this.getElements("x" + infix + "_byr04[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr04->caption(), $t103_daf_kelas_siswa_iuran->byr04->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->jml04->Required) { ?>
			elm = this.getElements("x" + infix + "_jml04");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml04->caption(), $t103_daf_kelas_siswa_iuran->jml04->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml04");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml04->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl04->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl04");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl04->caption(), $t103_daf_kelas_siswa_iuran->tgl04->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl04");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl04->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->byr05->Required) { ?>
			elm = this.getElements("x" + infix + "_byr05[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr05->caption(), $t103_daf_kelas_siswa_iuran->byr05->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->jml05->Required) { ?>
			elm = this.getElements("x" + infix + "_jml05");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml05->caption(), $t103_daf_kelas_siswa_iuran->jml05->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml05");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml05->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl05->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl05");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl05->caption(), $t103_daf_kelas_siswa_iuran->tgl05->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl05");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl05->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->byr06->Required) { ?>
			elm = this.getElements("x" + infix + "_byr06[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr06->caption(), $t103_daf_kelas_siswa_iuran->byr06->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->jml06->Required) { ?>
			elm = this.getElements("x" + infix + "_jml06");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml06->caption(), $t103_daf_kelas_siswa_iuran->jml06->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml06");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml06->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl06->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl06");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl06->caption(), $t103_daf_kelas_siswa_iuran->tgl06->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl06");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl06->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->byr07->Required) { ?>
			elm = this.getElements("x" + infix + "_byr07[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr07->caption(), $t103_daf_kelas_siswa_iuran->byr07->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->jml07->Required) { ?>
			elm = this.getElements("x" + infix + "_jml07");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml07->caption(), $t103_daf_kelas_siswa_iuran->jml07->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml07");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml07->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl07->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl07");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl07->caption(), $t103_daf_kelas_siswa_iuran->tgl07->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl07");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl07->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->byr08->Required) { ?>
			elm = this.getElements("x" + infix + "_byr08[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr08->caption(), $t103_daf_kelas_siswa_iuran->byr08->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->jml08->Required) { ?>
			elm = this.getElements("x" + infix + "_jml08");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml08->caption(), $t103_daf_kelas_siswa_iuran->jml08->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml08");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml08->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl08->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl08");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl08->caption(), $t103_daf_kelas_siswa_iuran->tgl08->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl08");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl08->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->byr09->Required) { ?>
			elm = this.getElements("x" + infix + "_byr09[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr09->caption(), $t103_daf_kelas_siswa_iuran->byr09->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->jml09->Required) { ?>
			elm = this.getElements("x" + infix + "_jml09");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml09->caption(), $t103_daf_kelas_siswa_iuran->jml09->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml09");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml09->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl09->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl09");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl09->caption(), $t103_daf_kelas_siswa_iuran->tgl09->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl09");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl09->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->byr10->Required) { ?>
			elm = this.getElements("x" + infix + "_byr10[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr10->caption(), $t103_daf_kelas_siswa_iuran->byr10->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->jml10->Required) { ?>
			elm = this.getElements("x" + infix + "_jml10");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml10->caption(), $t103_daf_kelas_siswa_iuran->jml10->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml10");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml10->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl10->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl10");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl10->caption(), $t103_daf_kelas_siswa_iuran->tgl10->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl10");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl10->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->byr11->Required) { ?>
			elm = this.getElements("x" + infix + "_byr11[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr11->caption(), $t103_daf_kelas_siswa_iuran->byr11->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->jml11->Required) { ?>
			elm = this.getElements("x" + infix + "_jml11");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml11->caption(), $t103_daf_kelas_siswa_iuran->jml11->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml11");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml11->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl11->Required) { ?>
			elm = this.getElements("x" + infix + "_tgl11");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->tgl11->caption(), $t103_daf_kelas_siswa_iuran->tgl11->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_tgl11");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->tgl11->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->byr12->Required) { ?>
			elm = this.getElements("x" + infix + "_byr12[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->byr12->caption(), $t103_daf_kelas_siswa_iuran->byr12->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t103_daf_kelas_siswa_iuran_edit->jml12->Required) { ?>
			elm = this.getElements("x" + infix + "_jml12");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->jml12->caption(), $t103_daf_kelas_siswa_iuran->jml12->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_jml12");
			if (elm && !ew.checkNumber(elm.value))
				return this.onError(elm, "<?php echo JsEncode($t103_daf_kelas_siswa_iuran->jml12->errorMessage()) ?>");
		<?php if ($t103_daf_kelas_siswa_iuran_edit->tgl12->Required) { ?>
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
	}

	// Process detail forms
	var dfs = $fobj.find("input[name='detailpage']").get();
	for (var i = 0; i < dfs.length; i++) {
		var df = dfs[i], val = df.value;
		if (val && ew.forms[val])
			if (!ew.forms[val].validate())
				return false;
	}
	return true;
}

// Form_CustomValidate event
ft103_daf_kelas_siswa_iuranedit.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft103_daf_kelas_siswa_iuranedit.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft103_daf_kelas_siswa_iuranedit.lists["x_byr01[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr01->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr01[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr01->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr02[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr02->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr02[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr02->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr03[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr03->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr03[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr03->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr04[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr04->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr04[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr04->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr05[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr05->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr05[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr05->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr06[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr06->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr06[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr06->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr07[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr07->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr07[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr07->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr08[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr08->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr08[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr08->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr09[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr09->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr09[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr09->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr10[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr10->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr10[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr10->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr11[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr11->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr11[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr11->options(FALSE, TRUE)) ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr12[]"] = <?php echo $t103_daf_kelas_siswa_iuran_edit->byr12->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranedit.lists["x_byr12[]"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_edit->byr12->options(FALSE, TRUE)) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t103_daf_kelas_siswa_iuran_edit->showPageHeader(); ?>
<?php
$t103_daf_kelas_siswa_iuran_edit->showMessage();
?>
<form name="ft103_daf_kelas_siswa_iuranedit" id="ft103_daf_kelas_siswa_iuranedit" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t103_daf_kelas_siswa_iuran_edit->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_edit->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t103_daf_kelas_siswa_iuran">
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="modal" value="<?php echo (int)$t103_daf_kelas_siswa_iuran_edit->IsModal ?>">
<?php if ($t103_daf_kelas_siswa_iuran->getCurrentMasterTable() == "v102_daf_kelas_siswa") { ?>
<input type="hidden" name="<?php echo TABLE_SHOW_MASTER ?>" value="v102_daf_kelas_siswa">
<input type="hidden" name="fk_id" value="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getSessionValue() ?>">
<?php } ?>
<div class="ew-edit-div"><!-- page* -->
<?php if ($t103_daf_kelas_siswa_iuran->id->Visible) { // id ?>
	<div id="r_id" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_id" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->id->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->id->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->id->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?php echo RemoveHtml($t103_daf_kelas_siswa_iuran->id->EditValue) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_id" name="x_id" id="x_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->id->CurrentValue) ?>">
<?php echo $t103_daf_kelas_siswa_iuran->id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Visible) { // daf_kelas_siswa_id ?>
	<div id="r_daf_kelas_siswa_id" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id" for="x_daf_kelas_siswa_id" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->cellAttributes() ?>>
<?php if ($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getSessionValue() <> "") { ?>
<span id="el_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?php echo RemoveHtml($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->ViewValue) ?>"></span>
</span>
<input type="hidden" id="x_daf_kelas_siswa_id" name="x_daf_kelas_siswa_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->CurrentValue) ?>">
<?php } else { ?>
<span id="el_t103_daf_kelas_siswa_iuran_daf_kelas_siswa_id">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_daf_kelas_siswa_id" name="x_daf_kelas_siswa_id" id="x_daf_kelas_siswa_id" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->editAttributes() ?>>
</span>
<?php } ?>
<?php echo $t103_daf_kelas_siswa_iuran->daf_kelas_siswa_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
	<div id="r_iuran_id" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_iuran_id" for="x_iuran_id" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->iuran_id->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->iuran_id->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_iuran_id">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="x_iuran_id" id="x_iuran_id" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->iuran_id->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->Jumlah->Visible) { // Jumlah ?>
	<div id="r_Jumlah" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_Jumlah" for="x_Jumlah" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->Jumlah->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->Jumlah->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_Jumlah">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_Jumlah" name="x_Jumlah" id="x_Jumlah" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->Jumlah->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->Jumlah->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr01->Visible) { // byr01 ?>
	<div id="r_byr01" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr01" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr01->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->byr01->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->byr01->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr01">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr01->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr01" name="x_byr01[]" id="x_byr01[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr01->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->byr01->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml01->Visible) { // jml01 ?>
	<div id="r_jml01" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml01" for="x_jml01" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml01->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->jml01->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->jml01->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml01" name="x_jml01" id="x_jml01" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml01->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->jml01->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl01->Visible) { // tgl01 ?>
	<div id="r_tgl01" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl01" for="x_tgl01" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl01->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->tgl01->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->tgl01->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl01">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl01" name="x_tgl01" id="x_tgl01" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl01->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl01->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl01->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl01->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl01->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl01->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl01->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl01", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->tgl01->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr02->Visible) { // byr02 ?>
	<div id="r_byr02" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr02" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr02->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->byr02->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->byr02->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr02">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr02->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr02" name="x_byr02[]" id="x_byr02[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr02->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->byr02->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml02->Visible) { // jml02 ?>
	<div id="r_jml02" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml02" for="x_jml02" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml02->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->jml02->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->jml02->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml02" name="x_jml02" id="x_jml02" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml02->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->jml02->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl02->Visible) { // tgl02 ?>
	<div id="r_tgl02" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl02" for="x_tgl02" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl02->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->tgl02->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->tgl02->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl02">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl02" name="x_tgl02" id="x_tgl02" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl02->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl02->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl02->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl02->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl02->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl02->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl02->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl02", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->tgl02->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr03->Visible) { // byr03 ?>
	<div id="r_byr03" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr03" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr03->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->byr03->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->byr03->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr03">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr03->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr03" name="x_byr03[]" id="x_byr03[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr03->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->byr03->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml03->Visible) { // jml03 ?>
	<div id="r_jml03" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml03" for="x_jml03" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml03->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->jml03->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->jml03->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml03" name="x_jml03" id="x_jml03" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml03->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->jml03->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl03->Visible) { // tgl03 ?>
	<div id="r_tgl03" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl03" for="x_tgl03" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl03->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->tgl03->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->tgl03->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl03">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl03" name="x_tgl03" id="x_tgl03" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl03->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl03->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl03->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl03->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl03->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl03->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl03->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl03", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->tgl03->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr04->Visible) { // byr04 ?>
	<div id="r_byr04" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr04" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr04->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->byr04->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->byr04->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr04">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr04->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr04" name="x_byr04[]" id="x_byr04[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr04->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->byr04->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml04->Visible) { // jml04 ?>
	<div id="r_jml04" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml04" for="x_jml04" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml04->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->jml04->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->jml04->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml04" name="x_jml04" id="x_jml04" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml04->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->jml04->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl04->Visible) { // tgl04 ?>
	<div id="r_tgl04" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl04" for="x_tgl04" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl04->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->tgl04->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->tgl04->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl04">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl04" name="x_tgl04" id="x_tgl04" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl04->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl04->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl04->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl04->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl04->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl04->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl04->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl04", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->tgl04->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr05->Visible) { // byr05 ?>
	<div id="r_byr05" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr05" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr05->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->byr05->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->byr05->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr05">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr05->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr05" name="x_byr05[]" id="x_byr05[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr05->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->byr05->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml05->Visible) { // jml05 ?>
	<div id="r_jml05" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml05" for="x_jml05" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml05->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->jml05->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->jml05->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml05" name="x_jml05" id="x_jml05" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml05->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->jml05->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl05->Visible) { // tgl05 ?>
	<div id="r_tgl05" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl05" for="x_tgl05" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl05->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->tgl05->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->tgl05->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl05">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl05" name="x_tgl05" id="x_tgl05" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl05->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl05->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl05->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl05->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl05->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl05->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl05->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl05", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->tgl05->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr06->Visible) { // byr06 ?>
	<div id="r_byr06" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr06" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr06->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->byr06->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->byr06->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr06">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr06->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr06" name="x_byr06[]" id="x_byr06[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr06->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->byr06->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml06->Visible) { // jml06 ?>
	<div id="r_jml06" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml06" for="x_jml06" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml06->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->jml06->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->jml06->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml06" name="x_jml06" id="x_jml06" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml06->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->jml06->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl06->Visible) { // tgl06 ?>
	<div id="r_tgl06" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl06" for="x_tgl06" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl06->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->tgl06->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->tgl06->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl06">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl06" name="x_tgl06" id="x_tgl06" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl06->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl06->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl06->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl06->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl06->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl06->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl06->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl06", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->tgl06->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr07->Visible) { // byr07 ?>
	<div id="r_byr07" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr07" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr07->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->byr07->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->byr07->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr07">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr07->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr07" name="x_byr07[]" id="x_byr07[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr07->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->byr07->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml07->Visible) { // jml07 ?>
	<div id="r_jml07" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml07" for="x_jml07" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml07->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->jml07->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->jml07->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml07" name="x_jml07" id="x_jml07" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml07->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->jml07->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl07->Visible) { // tgl07 ?>
	<div id="r_tgl07" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl07" for="x_tgl07" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl07->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->tgl07->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->tgl07->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl07">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl07" name="x_tgl07" id="x_tgl07" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl07->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl07->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl07->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl07->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl07->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl07->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl07->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl07", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->tgl07->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr08->Visible) { // byr08 ?>
	<div id="r_byr08" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr08" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr08->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->byr08->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->byr08->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr08">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr08->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr08" name="x_byr08[]" id="x_byr08[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr08->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->byr08->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml08->Visible) { // jml08 ?>
	<div id="r_jml08" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml08" for="x_jml08" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml08->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->jml08->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->jml08->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml08" name="x_jml08" id="x_jml08" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml08->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->jml08->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl08->Visible) { // tgl08 ?>
	<div id="r_tgl08" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl08" for="x_tgl08" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl08->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->tgl08->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->tgl08->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl08">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl08" name="x_tgl08" id="x_tgl08" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl08->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl08->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl08->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl08->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl08->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl08->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl08->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl08", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->tgl08->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr09->Visible) { // byr09 ?>
	<div id="r_byr09" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr09" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr09->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->byr09->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->byr09->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr09">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr09->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr09" name="x_byr09[]" id="x_byr09[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr09->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->byr09->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml09->Visible) { // jml09 ?>
	<div id="r_jml09" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml09" for="x_jml09" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml09->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->jml09->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->jml09->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml09" name="x_jml09" id="x_jml09" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml09->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->jml09->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl09->Visible) { // tgl09 ?>
	<div id="r_tgl09" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl09" for="x_tgl09" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl09->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->tgl09->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->tgl09->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl09">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl09" name="x_tgl09" id="x_tgl09" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl09->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl09->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl09->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl09->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl09->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl09->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl09->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl09", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->tgl09->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr10->Visible) { // byr10 ?>
	<div id="r_byr10" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr10" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr10->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->byr10->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->byr10->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr10">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr10->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr10" name="x_byr10[]" id="x_byr10[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr10->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->byr10->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml10->Visible) { // jml10 ?>
	<div id="r_jml10" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml10" for="x_jml10" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml10->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->jml10->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->jml10->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml10" name="x_jml10" id="x_jml10" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml10->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->jml10->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl10->Visible) { // tgl10 ?>
	<div id="r_tgl10" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl10" for="x_tgl10" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl10->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->tgl10->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->tgl10->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl10">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl10" name="x_tgl10" id="x_tgl10" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl10->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl10->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl10->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl10->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl10->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl10->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl10->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl10", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->tgl10->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr11->Visible) { // byr11 ?>
	<div id="r_byr11" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr11" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr11->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->byr11->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->byr11->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr11">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr11->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr11" name="x_byr11[]" id="x_byr11[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr11->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->byr11->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml11->Visible) { // jml11 ?>
	<div id="r_jml11" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml11" for="x_jml11" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml11->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->jml11->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->jml11->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml11" name="x_jml11" id="x_jml11" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml11->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->jml11->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl11->Visible) { // tgl11 ?>
	<div id="r_tgl11" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl11" for="x_tgl11" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl11->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->tgl11->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->tgl11->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl11">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl11" name="x_tgl11" id="x_tgl11" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl11->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl11->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl11->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl11->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl11->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl11->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl11->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl11", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->tgl11->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->byr12->Visible) { // byr12 ?>
	<div id="r_byr12" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_byr12" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->byr12->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->byr12->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->byr12->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_byr12">
<?php
$selwrk = (ConvertToBool($t103_daf_kelas_siswa_iuran->byr12->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t103_daf_kelas_siswa_iuran" data-field="x_byr12" name="x_byr12[]" id="x_byr12[]" value="1"<?php echo $selwrk ?><?php echo $t103_daf_kelas_siswa_iuran->byr12->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->byr12->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->jml12->Visible) { // jml12 ?>
	<div id="r_jml12" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_jml12" for="x_jml12" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->jml12->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->jml12->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->jml12->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_jml12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_jml12" name="x_jml12" id="x_jml12" size="30" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->jml12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->jml12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->jml12->editAttributes() ?>>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->jml12->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t103_daf_kelas_siswa_iuran->tgl12->Visible) { // tgl12 ?>
	<div id="r_tgl12" class="form-group row">
		<label id="elh_t103_daf_kelas_siswa_iuran_tgl12" for="x_tgl12" class="<?php echo $t103_daf_kelas_siswa_iuran_edit->LeftColumnClass ?>"><?php echo $t103_daf_kelas_siswa_iuran->tgl12->caption() ?><?php echo ($t103_daf_kelas_siswa_iuran->tgl12->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->tgl12->cellAttributes() ?>>
<span id="el_t103_daf_kelas_siswa_iuran_tgl12">
<input type="text" data-table="t103_daf_kelas_siswa_iuran" data-field="x_tgl12" name="x_tgl12" id="x_tgl12" placeholder="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->tgl12->getPlaceHolder()) ?>" value="<?php echo $t103_daf_kelas_siswa_iuran->tgl12->EditValue ?>"<?php echo $t103_daf_kelas_siswa_iuran->tgl12->editAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->tgl12->ReadOnly && !$t103_daf_kelas_siswa_iuran->tgl12->Disabled && !isset($t103_daf_kelas_siswa_iuran->tgl12->EditAttrs["readonly"]) && !isset($t103_daf_kelas_siswa_iuran->tgl12->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("ft103_daf_kelas_siswa_iuranedit", "x_tgl12", {"ignoreReadonly":true,"useCurrent":false,"format":0});
</script>
<?php } ?>
</span>
<?php echo $t103_daf_kelas_siswa_iuran->tgl12->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
<?php if (!$t103_daf_kelas_siswa_iuran_edit->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t103_daf_kelas_siswa_iuran_edit->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("SaveBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t103_daf_kelas_siswa_iuran_edit->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t103_daf_kelas_siswa_iuran_edit->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t103_daf_kelas_siswa_iuran_edit->terminate();
?>