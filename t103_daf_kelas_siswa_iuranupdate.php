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
$t103_daf_kelas_siswa_iuran_update = new t103_daf_kelas_siswa_iuran_update();

// Run the page
$t103_daf_kelas_siswa_iuran_update->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t103_daf_kelas_siswa_iuran_update->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "update";
var ft103_daf_kelas_siswa_iuranupdate = currentForm = new ew.Form("ft103_daf_kelas_siswa_iuranupdate", "update");

// Validate form
ft103_daf_kelas_siswa_iuranupdate.validate = function() {
	if (!this.validateRequired)
		return true; // Ignore validation
	var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj);
	if ($fobj.find("#confirm").val() == "F")
		return true;
	if (!ew.updateSelected(fobj)) {
		ew.alert(ew.language.phrase("NoFieldSelected"));
		return false;
	}
	var elm, felm, uelm, addcnt = 0;
	var $k = $fobj.find("#" + this.formKeyCountName); // Get key_count
	var rowcnt = ($k[0]) ? parseInt($k.val(), 10) : 1;
	var startcnt = (rowcnt == 0) ? 0 : 1; // Check rowcnt == 0 => Inline-Add
	var gridinsert = ["insert", "gridinsert"].includes($fobj.find("#action").val()) && $k[0];
	for (var i = startcnt; i <= rowcnt; i++) {
		var infix = ($k[0]) ? String(i) : "";
		$fobj.data("rowindex", infix);
		<?php if ($t103_daf_kelas_siswa_iuran_update->iuran_id->Required) { ?>
			elm = this.getElements("x" + infix + "_iuran_id");
			uelm = this.getElements("u" + infix + "_iuran_id");
			if (uelm && uelm.checked) {
				if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
					return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t103_daf_kelas_siswa_iuran->iuran_id->caption(), $t103_daf_kelas_siswa_iuran->iuran_id->RequiredErrorMessage)) ?>");
			}
		<?php } ?>

			// Fire Form_CustomValidate event
			if (!this.Form_CustomValidate(fobj))
				return false;
	}
	return true;
}

// Form_CustomValidate event
ft103_daf_kelas_siswa_iuranupdate.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft103_daf_kelas_siswa_iuranupdate.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
ft103_daf_kelas_siswa_iuranupdate.lists["x_iuran_id"] = <?php echo $t103_daf_kelas_siswa_iuran_update->iuran_id->Lookup->toClientList() ?>;
ft103_daf_kelas_siswa_iuranupdate.lists["x_iuran_id"].options = <?php echo JsonEncode($t103_daf_kelas_siswa_iuran_update->iuran_id->lookupOptions()) ?>;

// Form object for search
</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t103_daf_kelas_siswa_iuran_update->showPageHeader(); ?>
<?php
$t103_daf_kelas_siswa_iuran_update->showMessage();
?>
<form name="ft103_daf_kelas_siswa_iuranupdate" id="ft103_daf_kelas_siswa_iuranupdate" class="<?php echo $t103_daf_kelas_siswa_iuran_update->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t103_daf_kelas_siswa_iuran_update->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t103_daf_kelas_siswa_iuran_update->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t103_daf_kelas_siswa_iuran">
<?php if ($t103_daf_kelas_siswa_iuran->isConfirm()) { // Confirm page ?>
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="confirm" id="confirm" value="confirm">
<?php } else { ?>
<input type="hidden" name="action" id="action" value="confirm">
<?php } ?>
<input type="hidden" name="modal" value="<?php echo (int)$t103_daf_kelas_siswa_iuran_update->IsModal ?>">
<?php foreach ($t103_daf_kelas_siswa_iuran_update->RecKeys as $key) { ?>
<?php $keyvalue = is_array($key) ? implode($COMPOSITE_KEY_SEPARATOR, $key) : $key; ?>
<input type="hidden" name="key_m[]" value="<?php echo HtmlEncode($keyvalue) ?>">
<?php } ?>
<div id="tbl_t103_daf_kelas_siswa_iuranupdate" class="ew-update-div"><!-- page -->
	<div class="form-check">
		<input type="checkbox" class="form-check-input" name="u" id="u" onclick="ew.selectAll(this);"<?php echo $t103_daf_kelas_siswa_iuran_update->Disabled ?>><label class="form-check-label" for="u"><?php echo $Language->Phrase("UpdateSelectAll") ?></label>
	</div>
<?php if ($t103_daf_kelas_siswa_iuran->iuran_id->Visible) { // iuran_id ?>
	<div id="r_iuran_id" class="form-group row">
		<label for="x_iuran_id" class="<?php echo $t103_daf_kelas_siswa_iuran_update->LeftColumnClass ?>"><div class="form-check">
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<input type="checkbox" name="u_iuran_id" id="u_iuran_id" class="form-check-input ew-multi-select" value="1"<?php echo ($t103_daf_kelas_siswa_iuran->iuran_id->MultiUpdate == "1") ? " checked" : "" ?>>
<?php } else { ?>
<input type="hidden" name="u_iuran_id" id="u_iuran_id" value="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->MultiUpdate ?>">
<input type="checkbox" class="form-check-input" disabled<?php echo ($t103_daf_kelas_siswa_iuran->iuran_id->MultiUpdate == "1") ? " checked" : "" ?>>
<?php } ?>
<label class="form-check-label" for="u_iuran_id"><?php echo $t103_daf_kelas_siswa_iuran->iuran_id->caption() ?></label></div></label>
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_update->RightColumnClass ?>"><div<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->cellAttributes() ?>>
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { ?>
<span id="el_t103_daf_kelas_siswa_iuran_iuran_id">
<div class="input-group">
	<select class="custom-select ew-custom-select" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" data-value-separator="<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->displayValueSeparatorAttribute() ?>" id="x_iuran_id" name="x_iuran_id"<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->editAttributes() ?>>
		<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->selectOptionListHtml("x_iuran_id") ?>
	</select>
</div>
<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->Lookup->getParamTag("p_x_iuran_id") ?>
</span>
<?php } else { ?>
<span id="el_t103_daf_kelas_siswa_iuran_iuran_id">
<span<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?php echo RemoveHtml($t103_daf_kelas_siswa_iuran->iuran_id->ViewValue) ?>"></span>
</span>
<input type="hidden" data-table="t103_daf_kelas_siswa_iuran" data-field="x_iuran_id" name="x_iuran_id" id="x_iuran_id" value="<?php echo HtmlEncode($t103_daf_kelas_siswa_iuran->iuran_id->FormValue) ?>">
<?php } ?>
<?php echo $t103_daf_kelas_siswa_iuran->iuran_id->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page -->
<?php if (!$t103_daf_kelas_siswa_iuran_update->IsModal) { ?>
	<div class="form-group row"><!-- buttons .form-group -->
		<div class="<?php echo $t103_daf_kelas_siswa_iuran_update->OffsetColumnClass ?>"><!-- buttons offset -->
<?php if (!$t103_daf_kelas_siswa_iuran->isConfirm()) { // Confirm page ?>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit" onclick="this.form.action.value='confirm';"><?php echo $Language->phrase("UpdateBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t103_daf_kelas_siswa_iuran_update->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
<?php } else { ?>
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("ConfirmBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="submit" onclick="this.form.action.value='cancel';"><?php echo $Language->phrase("CancelBtn") ?></button>
<?php } ?>
		</div><!-- /buttons offset -->
	</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t103_daf_kelas_siswa_iuran_update->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t103_daf_kelas_siswa_iuran_update->terminate();
?>