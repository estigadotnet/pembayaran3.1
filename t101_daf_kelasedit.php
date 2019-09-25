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
$t101_daf_kelas_edit = new t101_daf_kelas_edit();

// Run the page
$t101_daf_kelas_edit->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t101_daf_kelas_edit->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "edit";
var ft101_daf_kelasedit = currentForm = new ew.Form("ft101_daf_kelasedit", "edit");

// Validate form
ft101_daf_kelasedit.validate = function() {
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
		<?php if ($t101_daf_kelas_edit->tahun_ajaran_id->Required) { ?>
			elm = this.getElements("x" + infix + "_tahun_ajaran_id");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t101_daf_kelas->tahun_ajaran_id->caption(), $t101_daf_kelas->tahun_ajaran_id->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t101_daf_kelas_edit->sekolah_id->Required) { ?>
			elm = this.getElements("x" + infix + "_sekolah_id");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t101_daf_kelas->sekolah_id->caption(), $t101_daf_kelas->sekolah_id->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t101_daf_kelas_edit->kelas_id->Required) { ?>
			elm = this.getElements("x" + infix + "_kelas_id");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t101_daf_kelas->kelas_id->caption(), $t101_daf_kelas->kelas_id->RequiredErrorMessage)) ?>");
		<?php } ?>

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
ft101_daf_kelasedit.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft101_daf_kelasedit.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft101_daf_kelasedit.lists["x_tahun_ajaran_id"] = <?php echo $t101_daf_kelas_edit->tahun_ajaran_id->Lookup->toClientList() ?>;
ft101_daf_kelasedit.lists["x_tahun_ajaran_id"].options = <?php echo JsonEncode($t101_daf_kelas_edit->tahun_ajaran_id->lookupOptions()) ?>;
ft101_daf_kelasedit.lists["x_sekolah_id"] = <?php echo $t101_daf_kelas_edit->sekolah_id->Lookup->toClientList() ?>;
ft101_daf_kelasedit.lists["x_sekolah_id"].options = <?php echo JsonEncode($t101_daf_kelas_edit->sekolah_id->lookupOptions()) ?>;
ft101_daf_kelasedit.lists["x_kelas_id"] = <?php echo $t101_daf_kelas_edit->kelas_id->Lookup->toClientList() ?>;
ft101_daf_kelasedit.lists["x_kelas_id"].options = <?php echo JsonEncode($t101_daf_kelas_edit->kelas_id->lookupOptions()) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t101_daf_kelas_edit->showPageHeader(); ?>
<?php
$t101_daf_kelas_edit->showMessage();
?>
<form name="ft101_daf_kelasedit" id="ft101_daf_kelasedit" class="<?php echo $t101_daf_kelas_edit->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t101_daf_kelas_edit->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t101_daf_kelas_edit->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t101_daf_kelas">
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="modal" value="<?php echo (int)$t101_daf_kelas_edit->IsModal ?>">
<div class="ew-edit-div"><!-- page* -->
<?php if ($t101_daf_kelas->tahun_ajaran_id->Visible) { // tahun_ajaran_id ?>
	<div id="r_tahun_ajaran_id" class="form-group row">
		<label id="elh_t101_daf_kelas_tahun_ajaran_id" for="x_tahun_ajaran_id" class="<?php echo $t101_daf_kelas_edit->LeftColumnClass ?>"><?php echo $t101_daf_kelas->tahun_ajaran_id->caption() ?><?php echo ($t101_daf_kelas->tahun_ajaran_id->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t101_daf_kelas_edit->RightColumnClass ?>"><div<?php echo $t101_daf_kelas->tahun_ajaran_id->cellAttributes() ?>>
<span id="el_t101_daf_kelas_tahun_ajaran_id">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="t101_daf_kelas" data-field="x_tahun_ajaran_id" data-value-separator="<?php echo $t101_daf_kelas->tahun_ajaran_id->displayValueSeparatorAttribute() ?>" id="x_tahun_ajaran_id" name="x_tahun_ajaran_id"<?php echo $t101_daf_kelas->tahun_ajaran_id->editAttributes() ?>>
		<?php echo $t101_daf_kelas->tahun_ajaran_id->selectOptionListHtml("x_tahun_ajaran_id") ?>
	</select>
</div>
<?php echo $t101_daf_kelas->tahun_ajaran_id->Lookup->getParamTag("p_x_tahun_ajaran_id") ?>
</span>
<?php echo $t101_daf_kelas->tahun_ajaran_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t101_daf_kelas->sekolah_id->Visible) { // sekolah_id ?>
	<div id="r_sekolah_id" class="form-group row">
		<label id="elh_t101_daf_kelas_sekolah_id" for="x_sekolah_id" class="<?php echo $t101_daf_kelas_edit->LeftColumnClass ?>"><?php echo $t101_daf_kelas->sekolah_id->caption() ?><?php echo ($t101_daf_kelas->sekolah_id->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t101_daf_kelas_edit->RightColumnClass ?>"><div<?php echo $t101_daf_kelas->sekolah_id->cellAttributes() ?>>
<span id="el_t101_daf_kelas_sekolah_id">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="t101_daf_kelas" data-field="x_sekolah_id" data-value-separator="<?php echo $t101_daf_kelas->sekolah_id->displayValueSeparatorAttribute() ?>" id="x_sekolah_id" name="x_sekolah_id"<?php echo $t101_daf_kelas->sekolah_id->editAttributes() ?>>
		<?php echo $t101_daf_kelas->sekolah_id->selectOptionListHtml("x_sekolah_id") ?>
	</select>
</div>
<?php echo $t101_daf_kelas->sekolah_id->Lookup->getParamTag("p_x_sekolah_id") ?>
</span>
<?php echo $t101_daf_kelas->sekolah_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t101_daf_kelas->kelas_id->Visible) { // kelas_id ?>
	<div id="r_kelas_id" class="form-group row">
		<label id="elh_t101_daf_kelas_kelas_id" for="x_kelas_id" class="<?php echo $t101_daf_kelas_edit->LeftColumnClass ?>"><?php echo $t101_daf_kelas->kelas_id->caption() ?><?php echo ($t101_daf_kelas->kelas_id->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t101_daf_kelas_edit->RightColumnClass ?>"><div<?php echo $t101_daf_kelas->kelas_id->cellAttributes() ?>>
<span id="el_t101_daf_kelas_kelas_id">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="t101_daf_kelas" data-field="x_kelas_id" data-value-separator="<?php echo $t101_daf_kelas->kelas_id->displayValueSeparatorAttribute() ?>" id="x_kelas_id" name="x_kelas_id"<?php echo $t101_daf_kelas->kelas_id->editAttributes() ?>>
		<?php echo $t101_daf_kelas->kelas_id->selectOptionListHtml("x_kelas_id") ?>
	</select>
</div>
<?php echo $t101_daf_kelas->kelas_id->Lookup->getParamTag("p_x_kelas_id") ?>
</span>
<?php echo $t101_daf_kelas->kelas_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
	<input type="hidden" data-table="t101_daf_kelas" data-field="x_id" name="x_id" id="x_id" value="<?php echo HtmlEncode($t101_daf_kelas->id->CurrentValue) ?>">
<?php
	if (in_array("t102_daf_kelas_siswa", explode(",", $t101_daf_kelas->getCurrentDetailTable())) && $t102_daf_kelas_siswa->DetailEdit) {
?>
<?php if ($t101_daf_kelas->getCurrentDetailTable() <> "") { ?>
<h4 class="ew-detail-caption"><?php echo $Language->TablePhrase("t102_daf_kelas_siswa", "TblCaption") ?></h4>
<?php } ?>
<?php include_once "t102_daf_kelas_siswagrid.php" ?>
<?php } ?>
<?php if (!$t101_daf_kelas_edit->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t101_daf_kelas_edit->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("SaveBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t101_daf_kelas_edit->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t101_daf_kelas_edit->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t101_daf_kelas_edit->terminate();
?>