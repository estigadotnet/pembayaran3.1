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
$t102_daf_kelas_siswa_add = new t102_daf_kelas_siswa_add();

// Run the page
$t102_daf_kelas_siswa_add->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t102_daf_kelas_siswa_add->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "add";
var ft102_daf_kelas_siswaadd = currentForm = new ew.Form("ft102_daf_kelas_siswaadd", "add");

// Validate form
ft102_daf_kelas_siswaadd.validate = function() {
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
		<?php if ($t102_daf_kelas_siswa_add->siswa_id->Required) { ?>
			elm = this.getElements("x" + infix + "_siswa_id");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t102_daf_kelas_siswa->siswa_id->caption(), $t102_daf_kelas_siswa->siswa_id->RequiredErrorMessage)) ?>");
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
ft102_daf_kelas_siswaadd.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft102_daf_kelas_siswaadd.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft102_daf_kelas_siswaadd.lists["x_siswa_id"] = <?php echo $t102_daf_kelas_siswa_add->siswa_id->Lookup->toClientList() ?>;
ft102_daf_kelas_siswaadd.lists["x_siswa_id"].options = <?php echo JsonEncode($t102_daf_kelas_siswa_add->siswa_id->lookupOptions()) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t102_daf_kelas_siswa_add->showPageHeader(); ?>
<?php
$t102_daf_kelas_siswa_add->showMessage();
?>
<form name="ft102_daf_kelas_siswaadd" id="ft102_daf_kelas_siswaadd" class="<?php echo $t102_daf_kelas_siswa_add->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t102_daf_kelas_siswa_add->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t102_daf_kelas_siswa_add->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t102_daf_kelas_siswa">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?php echo (int)$t102_daf_kelas_siswa_add->IsModal ?>">
<?php if ($t102_daf_kelas_siswa->getCurrentMasterTable() == "t101_daf_kelas") { ?>
<input type="hidden" name="<?php echo TABLE_SHOW_MASTER ?>" value="t101_daf_kelas">
<input type="hidden" name="fk_id" value="<?php echo $t102_daf_kelas_siswa->daf_kelas_id->getSessionValue() ?>">
<?php } ?>
<div class="ew-add-div"><!-- page* -->
<?php if ($t102_daf_kelas_siswa->siswa_id->Visible) { // siswa_id ?>
	<div id="r_siswa_id" class="form-group row">
		<label id="elh_t102_daf_kelas_siswa_siswa_id" for="x_siswa_id" class="<?php echo $t102_daf_kelas_siswa_add->LeftColumnClass ?>"><?php echo $t102_daf_kelas_siswa->siswa_id->caption() ?><?php echo ($t102_daf_kelas_siswa->siswa_id->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t102_daf_kelas_siswa_add->RightColumnClass ?>"><div<?php echo $t102_daf_kelas_siswa->siswa_id->cellAttributes() ?>>
<span id="el_t102_daf_kelas_siswa_siswa_id">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="t102_daf_kelas_siswa" data-field="x_siswa_id" data-value-separator="<?php echo $t102_daf_kelas_siswa->siswa_id->displayValueSeparatorAttribute() ?>" id="x_siswa_id" name="x_siswa_id"<?php echo $t102_daf_kelas_siswa->siswa_id->editAttributes() ?>>
		<?php echo $t102_daf_kelas_siswa->siswa_id->selectOptionListHtml("x_siswa_id") ?>
	</select>
</div>
<?php echo $t102_daf_kelas_siswa->siswa_id->Lookup->getParamTag("p_x_siswa_id") ?>
</span>
<?php echo $t102_daf_kelas_siswa->siswa_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
	<?php if (strval($t102_daf_kelas_siswa->daf_kelas_id->getSessionValue()) <> "") { ?>
	<input type="hidden" name="x_daf_kelas_id" id="x_daf_kelas_id" value="<?php echo HtmlEncode(strval($t102_daf_kelas_siswa->daf_kelas_id->getSessionValue())) ?>">
	<?php } ?>
<?php if (!$t102_daf_kelas_siswa_add->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t102_daf_kelas_siswa_add->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("AddBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t102_daf_kelas_siswa_add->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t102_daf_kelas_siswa_add->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t102_daf_kelas_siswa_add->terminate();
?>