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
$t001_tahun_ajaran_edit = new t001_tahun_ajaran_edit();

// Run the page
$t001_tahun_ajaran_edit->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t001_tahun_ajaran_edit->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "edit";
var ft001_tahun_ajaranedit = currentForm = new ew.Form("ft001_tahun_ajaranedit", "edit");

// Validate form
ft001_tahun_ajaranedit.validate = function() {
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
		<?php if ($t001_tahun_ajaran_edit->Mulai->Required) { ?>
			elm = this.getElements("x" + infix + "_Mulai");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t001_tahun_ajaran->Mulai->caption(), $t001_tahun_ajaran->Mulai->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t001_tahun_ajaran_edit->Selesai->Required) { ?>
			elm = this.getElements("x" + infix + "_Selesai");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t001_tahun_ajaran->Selesai->caption(), $t001_tahun_ajaran->Selesai->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t001_tahun_ajaran_edit->Aktif->Required) { ?>
			elm = this.getElements("x" + infix + "_Aktif[]");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t001_tahun_ajaran->Aktif->caption(), $t001_tahun_ajaran->Aktif->RequiredErrorMessage)) ?>");
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
ft001_tahun_ajaranedit.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft001_tahun_ajaranedit.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft001_tahun_ajaranedit.lists["x_Aktif[]"] = <?php echo $t001_tahun_ajaran_edit->Aktif->Lookup->toClientList() ?>;
ft001_tahun_ajaranedit.lists["x_Aktif[]"].options = <?php echo JsonEncode($t001_tahun_ajaran_edit->Aktif->options(FALSE, TRUE)) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t001_tahun_ajaran_edit->showPageHeader(); ?>
<?php
$t001_tahun_ajaran_edit->showMessage();
?>
<form name="ft001_tahun_ajaranedit" id="ft001_tahun_ajaranedit" class="<?php echo $t001_tahun_ajaran_edit->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t001_tahun_ajaran_edit->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t001_tahun_ajaran_edit->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t001_tahun_ajaran">
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="modal" value="<?php echo (int)$t001_tahun_ajaran_edit->IsModal ?>">
<div class="ew-edit-div"><!-- page* -->
<?php if ($t001_tahun_ajaran->Mulai->Visible) { // Mulai ?>
	<div id="r_Mulai" class="form-group row">
		<label id="elh_t001_tahun_ajaran_Mulai" for="x_Mulai" class="<?php echo $t001_tahun_ajaran_edit->LeftColumnClass ?>"><?php echo $t001_tahun_ajaran->Mulai->caption() ?><?php echo ($t001_tahun_ajaran->Mulai->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t001_tahun_ajaran_edit->RightColumnClass ?>"><div<?php echo $t001_tahun_ajaran->Mulai->cellAttributes() ?>>
<span id="el_t001_tahun_ajaran_Mulai">
<input type="text" data-table="t001_tahun_ajaran" data-field="x_Mulai" name="x_Mulai" id="x_Mulai" size="30" maxlength="4" placeholder="<?php echo HtmlEncode($t001_tahun_ajaran->Mulai->getPlaceHolder()) ?>" value="<?php echo $t001_tahun_ajaran->Mulai->EditValue ?>"<?php echo $t001_tahun_ajaran->Mulai->editAttributes() ?>>
</span>
<?php echo $t001_tahun_ajaran->Mulai->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t001_tahun_ajaran->Selesai->Visible) { // Selesai ?>
	<div id="r_Selesai" class="form-group row">
		<label id="elh_t001_tahun_ajaran_Selesai" for="x_Selesai" class="<?php echo $t001_tahun_ajaran_edit->LeftColumnClass ?>"><?php echo $t001_tahun_ajaran->Selesai->caption() ?><?php echo ($t001_tahun_ajaran->Selesai->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t001_tahun_ajaran_edit->RightColumnClass ?>"><div<?php echo $t001_tahun_ajaran->Selesai->cellAttributes() ?>>
<span id="el_t001_tahun_ajaran_Selesai">
<input type="text" data-table="t001_tahun_ajaran" data-field="x_Selesai" name="x_Selesai" id="x_Selesai" size="30" maxlength="4" placeholder="<?php echo HtmlEncode($t001_tahun_ajaran->Selesai->getPlaceHolder()) ?>" value="<?php echo $t001_tahun_ajaran->Selesai->EditValue ?>"<?php echo $t001_tahun_ajaran->Selesai->editAttributes() ?>>
</span>
<?php echo $t001_tahun_ajaran->Selesai->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t001_tahun_ajaran->Aktif->Visible) { // Aktif ?>
	<div id="r_Aktif" class="form-group row">
		<label id="elh_t001_tahun_ajaran_Aktif" class="<?php echo $t001_tahun_ajaran_edit->LeftColumnClass ?>"><?php echo $t001_tahun_ajaran->Aktif->caption() ?><?php echo ($t001_tahun_ajaran->Aktif->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t001_tahun_ajaran_edit->RightColumnClass ?>"><div<?php echo $t001_tahun_ajaran->Aktif->cellAttributes() ?>>
<span id="el_t001_tahun_ajaran_Aktif">
<?php
$selwrk = (ConvertToBool($t001_tahun_ajaran->Aktif->CurrentValue)) ? " checked" : "";
?>
<input type="checkbox" data-table="t001_tahun_ajaran" data-field="x_Aktif" name="x_Aktif[]" id="x_Aktif[]" value="1"<?php echo $selwrk ?><?php echo $t001_tahun_ajaran->Aktif->editAttributes() ?>>
</span>
<?php echo $t001_tahun_ajaran->Aktif->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
	<input type="hidden" data-table="t001_tahun_ajaran" data-field="x_id" name="x_id" id="x_id" value="<?php echo HtmlEncode($t001_tahun_ajaran->id->CurrentValue) ?>">
<?php if (!$t001_tahun_ajaran_edit->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t001_tahun_ajaran_edit->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("SaveBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t001_tahun_ajaran_edit->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t001_tahun_ajaran_edit->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t001_tahun_ajaran_edit->terminate();
?>