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
$t002_sekolah_edit = new t002_sekolah_edit();

// Run the page
$t002_sekolah_edit->run();

// Setup login status
SetupLoginStatus();
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$t002_sekolah_edit->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "edit";
var ft002_sekolahedit = currentForm = new ew.Form("ft002_sekolahedit", "edit");

// Validate form
ft002_sekolahedit.validate = function() {
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
		<?php if ($t002_sekolah_edit->Nama->Required) { ?>
			elm = this.getElements("x" + infix + "_Nama");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t002_sekolah->Nama->caption(), $t002_sekolah->Nama->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($t002_sekolah_edit->Alamat->Required) { ?>
			elm = this.getElements("x" + infix + "_Alamat");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $t002_sekolah->Alamat->caption(), $t002_sekolah->Alamat->RequiredErrorMessage)) ?>");
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
ft002_sekolahedit.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
ft002_sekolahedit.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $t002_sekolah_edit->showPageHeader(); ?>
<?php
$t002_sekolah_edit->showMessage();
?>
<form name="ft002_sekolahedit" id="ft002_sekolahedit" class="<?php echo $t002_sekolah_edit->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($t002_sekolah_edit->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $t002_sekolah_edit->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="t002_sekolah">
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="modal" value="<?php echo (int)$t002_sekolah_edit->IsModal ?>">
<div class="ew-edit-div"><!-- page* -->
<?php if ($t002_sekolah->Nama->Visible) { // Nama ?>
	<div id="r_Nama" class="form-group row">
		<label id="elh_t002_sekolah_Nama" for="x_Nama" class="<?php echo $t002_sekolah_edit->LeftColumnClass ?>"><?php echo $t002_sekolah->Nama->caption() ?><?php echo ($t002_sekolah->Nama->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t002_sekolah_edit->RightColumnClass ?>"><div<?php echo $t002_sekolah->Nama->cellAttributes() ?>>
<span id="el_t002_sekolah_Nama">
<input type="text" data-table="t002_sekolah" data-field="x_Nama" name="x_Nama" id="x_Nama" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($t002_sekolah->Nama->getPlaceHolder()) ?>" value="<?php echo $t002_sekolah->Nama->EditValue ?>"<?php echo $t002_sekolah->Nama->editAttributes() ?>>
</span>
<?php echo $t002_sekolah->Nama->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($t002_sekolah->Alamat->Visible) { // Alamat ?>
	<div id="r_Alamat" class="form-group row">
		<label id="elh_t002_sekolah_Alamat" for="x_Alamat" class="<?php echo $t002_sekolah_edit->LeftColumnClass ?>"><?php echo $t002_sekolah->Alamat->caption() ?><?php echo ($t002_sekolah->Alamat->Required) ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $t002_sekolah_edit->RightColumnClass ?>"><div<?php echo $t002_sekolah->Alamat->cellAttributes() ?>>
<span id="el_t002_sekolah_Alamat">
<textarea data-table="t002_sekolah" data-field="x_Alamat" name="x_Alamat" id="x_Alamat" cols="35" rows="4" placeholder="<?php echo HtmlEncode($t002_sekolah->Alamat->getPlaceHolder()) ?>"<?php echo $t002_sekolah->Alamat->editAttributes() ?>><?php echo $t002_sekolah->Alamat->EditValue ?></textarea>
</span>
<?php echo $t002_sekolah->Alamat->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
	<input type="hidden" data-table="t002_sekolah" data-field="x_id" name="x_id" id="x_id" value="<?php echo HtmlEncode($t002_sekolah->id->CurrentValue) ?>">
<?php if (!$t002_sekolah_edit->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $t002_sekolah_edit->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->phrase("SaveBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $t002_sekolah_edit->getReturnUrl() ?>"><?php echo $Language->phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$t002_sekolah_edit->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$t002_sekolah_edit->terminate();
?>